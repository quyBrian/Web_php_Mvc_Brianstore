   <!-- breadcrumb-area end -->
   <div class="breadcrumb-area">
        <h5 class="breadcrumb-title" style="text-align: center;">Tất Cả Sản Phẩm</h5>
    </div>
    <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>Có X sản phẩm.</p>
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
                            foreach($allproduct as $key =>$product){
                        ?>
                           
                            <div class="col-lg-4  col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST" >
                                    <input type="hidden" value="<?php echo  $product['id_product']?>" name="id_product">
                                    <input type="hidden" value="<?php echo  $product['title_product']?>" name="title_product">
                                    <input type="hidden" value="<?php echo  $product['image_product']?>" name="image_product">
                                    <input type="hidden" value="<?php echo  $product['price_product']?>" name="price_product">
                                    <input type="hidden" value="1" name="quantity_product_details">

                                <div class="product mb-25px">
                                    <div class="thumb">
                                        <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product']?>" class="image">
                                            <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="270px" height="324.7px"/>
                                            <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="270px" height="324.7px"/>
                                        </a>
                                        <span class="badges">
                                            <span class="new">Mới</span>
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
                                        <h5 class="title"><a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product']?>"><?php echo $product['title_product'] ?></a></h5>
                                        <span class="price">
                                            <span class="new" style="color:#FF7704;"><?php echo number_format($product['price_product'],0,',','.').'đ'?></span>
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
                                foreach($countproduct as $key=>$cou){
                                    $count++;
                                }
                                //echo $count;
                                $product_buttom= ceil($count/6);
                                $sp_tungtrang=6;
                                    if(!isset($_GET['trang'])){
                                        $trang=1;
                                    }
                                    else{ 
                                        $trang=$_GET['trang'];
                                    }
                                    $tung_trang=($trang-1)*6;
                                //echo $product_buttom;
                                if ($trang > 1 && $product_buttom > 1){
                                    echo '<a href="http://localhost:81/MvcPdo/Mvc1/test/demo?trang='.($trang-1).'"> Trước </a> | ';
                                }
                                $i=0;
                                for($i=1; $i<=$product_buttom; $i++){
                                    if ($i == $trang){
                                        echo '<a class="active">'.$i.'</a> | ';
                                    }
                                    else{
                                        echo '<a href="http://localhost:81/MvcPdo/Mvc1/test/demo?trang='.$i.'">'.$i.'</a> | ';
                                    }
                                }

                                if ($trang < $product_buttom && $trang > 1){
                                    echo '<a href="http://localhost:81/MvcPdo/Mvc1/test/demo?trang='.($trang+1).'">Tiếp</a> ';
                                }
                            ?> 
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <div class="main-heading">
                                <h3 class="sidebar-title">Danh mục sản phẩm</h3>
                            </div>
                            <div class="sidebar-widget-category">
                                <?php 
                                    foreach($categoryhome as $key => $cateus){
                                ?>     
                                <ul>
                                    <li><a href="<?php echo BASE_URL ?>/productus/categoryus/<?php echo $cateus['id_category_product'] ?>" class="selected"><?php echo $cateus['title_category_product'] ?> <span></span> </a></li>
                                </ul>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-group">
                            <h3 class="sidebar-title">Bộ lọc</h3>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Price</h4>
                                <div class="price-filter">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" class="p-0 h-auto lh-1" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title mt-5">Size</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a href="#">Large <span>(4)</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Medium
                                                    <span>(4)</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Small <span>(4)</span>
                                                </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Extra
                                                    Large<span>(4)</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget no-cba">
                                <h4 class="pro-sidebar-title">Colour</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a href="#">Grey<span>(2)</span> </a>
                                                <span class="checkmark grey"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">White<span>(4)</span></a>
                                                <span class="checkmark white"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Black<span>(4)</span>
                                                </a>
                                                <span class="checkmark black"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Camel<span>(4)</span>
                                                </a>
                                                <span class="checkmark camel"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Brand</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a href="#">Studio Design<span>(10)</span>
                                                </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Graphic
                                                    Corner<span>(7)</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget tag">
                            <div class="main-heading">
                                <h3 class="sidebar-title mt-3">Tags</h3>
                            </div>
                            <div class="sidebar-widget-tag">
                                <ul>
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Chair</a></li>
                                    <li><a href="#">Decoration</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Sofa</a></li>
                                    <li><a href="#">Table</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

