<div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
    <?php
        $name='Danh Mục Chưa Có Sản Phẩm';
        foreach($categoryhomebyid as $key =>$product_name){
            $name=$product_name['title_category_product'];
        }
        ?>
         <h5 class="breadcrumb-title" style="text-align: center;"><?php echo $name ?></h5>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>There Are 17 Products.</p>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <div class="row">
                            <?php
                                foreach($categoryhomebyid as $key =>$product){
                            ?>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST" >
                                    <input type="hidden" value="<?php echo  $product['id_product'] ?>" name="id_product">
                                    <input type="hidden" value="<?php echo  $product['title_product'] ?>" name="title_product">
                                    <input type="hidden" value="<?php echo  $product['image_product'] ?>" name="image_product">
                                    <!-- <input type="hidden" value="?php echo  $product['price_product'] ?>" name="price_product"> -->
                                    <?php
                                        if($product['discount_product']==0){
                                    ?>
                                        <input type="hidden" value="<?php echo  $product['price_product'] ?>" name="price_product">
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($product['discount_product']==1){
                                    ?>
                                        <input type="hidden" value="<?php echo  $product['price_discount_product'] ?>" name="price_product">
                                    <?php
                                        }
                                    ?>
                                    <input type="hidden" value="1" name="quantity_product_details">
                                <div class="product mb-25px">
                                    <div class="thumb">
                                        <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product']?>" class="image">
                                            <img  src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="276px" height="324.7px"/>
                                            <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="276px" height="324.7px"/>
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="#" class="action wishlist" title="Wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <!-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="icon-refresh"></i></a> -->
                                        </div>
                                        <button type="submit" title="AddCart" name="addcart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product']?>"><?php echo $product['title_product'] ?></a></h5>
                                        <span class="price">
                                            <!-- <span class="new">?php echo number_format($product['price_product'],0,',','.').'đ'?></span> -->
                                            <?php
                                                if($product['discount_product']==0){
                                            ?>
                                                <span class="new" style="color:#FF7704;"><?php echo number_format($product['price_product'],0,',','.').'đ'?></span>
                                            <?php
                                                }
                                                else if($product['discount_product']==1){
                                            ?>
                                                <span class="new" style="color:#FF7704;"><?php echo number_format($product['price_discount_product'],0,',','.').'đ'?></span>
                                                <span class="old" style="color:#BBBBBB;"><?php echo number_format($product['price_product'],0,',','.').'đ'?></span>
                                            <?php
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-30px" data-aos="fade-up">
                            <?php
                                $count=0;
                                foreach($countproductcategory as $key=>$cou){
                                    $count++;
                                }
                                //echo $count;
                                $product_buttom= ceil($count/8);
                                $sp_tungtrang=8;
                                    if(!isset($_GET['trang'])){
                                        $trang=1;
                                    }
                                    else{ 
                                        $trang=$_GET['trang'];
                                    }
                                    $tung_trang=($trang-1)*8;
                                //echo $product_buttom;
                                if ($trang > 1 && $product_buttom > 1){
                                    echo '<a href="http://localhost:81/MvcPdo/Mvc1/productus/categoryus/29?trang='.($trang-1).'"> Trước </a> | ';
                                }
                                $i=0;
                                for($i=1; $i<=$product_buttom; $i++){
                                    if ($i == $trang){
                                        echo '<a class="active">'.$i.'</a> | ';
                                    }
                                    else{
                                        echo '<a href="http://localhost:81/MvcPdo/Mvc1/productus/categoryus/29?trang='.$i.'">'.$i.'</a> | ';
                                    }
                                }

                                if ($trang < $product_buttom && $trang > 1){
                                    echo '<a href="http://localhost:81/MvcPdo/Mvc1/productus/categoryus/29?trang='.($trang+1).'">Tiếp</a> ';
                                }
                            ?> 
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    </div>