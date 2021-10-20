   <!-- breadcrumb-area end -->
    <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
             <!-- seach product -->
             <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                    <div class="row">
                        <!-- Tab Start -->
                        <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                            <ul class="product-tab-nav nav justify-content-center">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">Tìm Kiếm Theo Sản Phẩm </a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Tìm Kiếm Theo Bài Viết</a></li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st tab hot_product start -->
                                <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                                    <div class="row">
                                        <?php
                                        if(isset($searchproduct)){
                                            foreach ($searchproduct as $key => $product) {
                                        ?>
                                                <div class="col-lg-4  col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                                    <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
                                                        <input type="hidden" value="<?php echo  $product['id_product'] ?>" name="id_product">
                                                        <input type="hidden" value="<?php echo  $product['title_product'] ?>" name="title_product">
                                                        <input type="hidden" value="<?php echo  $product['image_product'] ?>" name="image_product">
                                                        <input type="hidden" value="<?php echo  $product['price_product'] ?>" name="price_product">
                                                        <input type="hidden" value="1" name="quantity_product_details">
                                                        <!-- Single Prodect -->
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product'] ?>" class="image">
                                                                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="276px" height="324.7px" />
                                                                    <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" alt="Product" width="276px" height="324.7px" />
                                                                </a>
                                                                <span class="badges">
                                                                    <span class="new">New</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                                                    <!-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                        class="icon-size-fullscreen"></i></a> -->
                                                                    <a href="#" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                                                </div>
                                                                <button type="submit" title="AddCart" name="addcart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                                                            </div>
                                                            <div class="content">
                                                                <h5 class="title"><a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $product['id_product'] ?>"><?php echo $product['title_product'] ?></a></h5>
                                                                <span class="price">
                                                                    <span class="new" style="color: #FF7004"><?php echo number_format($product['price_product'], 0, ',', '.') . ' VND' ?></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <!--  Pagination Area Start -->
                                        <div class="pro-pagination-style mt-20px mb-md-50px mb-lm-60px text-center" data-aos="fade-up" data-aos-delay="200">
                                                <div class="pages">
                                                    <ul>
                                                        <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                                        <li class="li"><a class="page-link active" href="#">1</a></li>
                                                        <li class="li"><a class="page-link" href="#">2</a></li>
                                                        <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- 1st tab hot_product end -->
                                <!-- 2nd tab selling products start -->
                                <div class="tab-pane fade" id="tab-product-best-sellers">
                                    <div class="row">
                                        <div class="col-lg-9 order-lg-last col-md-12 order-md-first" data-aos="fade-up" data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <?php
                                            if(isset($searchpost)){
                                                foreach($searchpost as $key =>$spost){
                                            ?>
                                            <div class="row mb-50px">
                                                <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="single-blog-post blog-list-post">
                                                        <div class="blog-post-media">
                                                            <div class="blog-image">
                                                                <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $spost['id_post']?>"><img class="img-responsive" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $spost['image_post'] ?>" alt="blog" width="351px" height="300px" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-6 align-self-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                                                    <div class="blog-post-content-inner mt-lm-20px">
                                                        <div class="blog-athor-date">
                                                            <a class="blog-date" href="#">14 November</a>
                                                        </div>
                                                        <h4 class="blog-title"><a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $spost['id_post']?>"><?php echo substr($spost['title_post'],0,120) ?>.</a></h4>
                                                        <p>
                                                        <?php echo substr($post['content_post'],0,318)?>...
                                                        </p>
                                                        <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $spost['id_post']?>" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <!--  Pagination Area Start -->
                                            <div class="pro-pagination-style mt-20px mb-md-50px mb-lm-60px text-center" data-aos="fade-up" data-aos-delay="200">
                                                <div class="pages">
                                                    <ul>
                                                        <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                                        <li class="li"><a class="page-link active" href="#">1</a></li>
                                                        <li class="li"><a class="page-link" href="#">2</a></li>
                                                        <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- 2nd tab selling products end -->
                            </div>
                        </div>
                    </div>
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
                            <h3 class="sidebar-title">Filter By</h3>
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
            <!-- seach post -->

            <div class="section product-tab-area">
    <div class="container">
        
    </div>
</div>
            

        </div>
    </div>
    </div>

