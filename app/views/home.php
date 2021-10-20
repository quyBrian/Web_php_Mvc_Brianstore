<!-- Banner Section Start -->
<div class="section pb-100px pt-100px">
    <div class="container">
        <!-- Banners Start -->
        <div class="row">
            <!-- Banner Start -->
            <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <div class="banner-2">
                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/banner/5.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Bộ sưu tập ghế văn phòng <br /> mới
                            </h3>
                            <a href="shop-left-sidebar.html" class="shop-link">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                <div class="banner-2">
                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/banner/6.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Bộ sưu tập<br /> phòng khách </h3>
                            <a href="shop-left-sidebar.html" class="shop-link">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="600">
                <div class="banner-2">
                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/banner/7.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Bộ sưu tập phòng <br />trẻ em
                            </h3>
                            <a href="shop-left-sidebar.html" class="shop-link">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->
        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- Product tab Area Start -->
<div class="section product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title mb-0">
                    <h2 class="title">Sản Phẩm Của Chúng Tôi </h2>
                    <p class="sub-title mb-30px">BrianSore luôn mang đến những sản phẩm chất lượng và dịch vụ tốt nhất tới khách hàng </p>
                </div>
            </div>

            <!-- Tab Start -->
            <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                <ul class="product-tab-nav nav justify-content-center">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">Sản Phẩm Hot</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Sản Phẩm Bán Chạy</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">Sản Phẩm Giảm Giá</a></li>
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
                            foreach ($hotproduct as $key => $product) {
                                if ($product['hot_product'] == 1) {
                            ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                        <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
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
                            }
                            ?>
                        </div>
                    </div>
                    <!-- 1st tab hot_product end -->
                    <!-- 2nd tab selling products start -->
                    <div class="tab-pane fade" id="tab-product-best-sellers">
                        <div class="row">
                            <!-- ?php
                                    foreach($category as $key =>$product){
                                        if($product['hot_product']==1){
                                ?> -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="shop-left-sidebar.html" class="image">
                                            <img src="<?php echo BASE_URL ?>/public/furns/assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="<?php echo BASE_URL ?>/public/furns/assets/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab selling products end -->
                    <!-- 3rd tab discount products start -->
                    <div class="tab-pane fade" id="tab-product-sale-item">
                        <div class="row">
                        <?php
                            foreach ($discountproduct as $key => $dis) {
                                if ($dis['discount_product'] == 1) {
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                            <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
                                            <input type="hidden" value="<?php echo  $dis['id_product'] ?>" name="id_product">
                                            <input type="hidden" value="<?php echo  $dis['title_product'] ?>" name="title_product">
                                            <input type="hidden" value="<?php echo  $dis['image_product'] ?>" name="image_product">
                                            <!-- <input type="hidden" value="?php echo  $dis['price_product'] ?>" name="price_product"> -->
                                            <?php
                                                if($dis['discount_product']==0){
                                            ?>
                                                 <input type="hidden" value="<?php echo  $dis['price_product'] ?>" name="price_product">
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($dis['discount_product']==1){
                                            ?>
                                                 <input type="hidden" value="<?php echo  $dis['price_discount_product'] ?>" name="price_product">
                                            <?php
                                                }
                                            ?>
                                            <input type="hidden" value="1" name="quantity_product_details">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $dis['id_product'] ?>" class="image">
                                            <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $dis['image_product'] ?>" alt="Product" width="276px" height="324.7px" />
                                            <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $dis['image_product'] ?>" alt="Product" width="276px" height="324.7px" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button type="submit" title="AddCart" name="addcart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $dis['id_product'] ?>"><?php echo $dis['title_product'] ?></a></h5>
                                            <span class="price">
                                            <?php
                                                if($dis['discount_product']==0){
                                            ?>
                                            <span class="new" style="color:#FF7704;"><?php echo number_format($dis['price_product'],0,',','.').'đ'?></span>
                                            <?php
                                            }
                                            else if($dis['discount_product']==1){
                                            ?>
                                             <span class="new" style="color:#FF7704;"><?php echo number_format($dis['price_discount_product'],0,',','.').'đ'?></span>
                                             <span class="old" style="color:#BBBBBB;"><?php echo number_format($dis['price_product'],0,',','.').'đ'?></span>
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
                            }
                        ?>
                        </div>
                    </div>
                    <!-- 3rd tab discount products end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product tab Area End -->

<!-- Banner Section Start -->
<div class="section pb-100px pt-100px">
    <div class="container-fluid">
        <!-- Banners Start -->
        <div class="row">
            <!-- Banner Start -->
            <div class="col-lg-6 col-md-6 col-12 mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <a href="shop-left-sidebar.html" class="banner-3">
                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/banner/1.jpg" alt="" />
                    <div class="info justify-content-end">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Nội thất giảm giá <br />cho mùa hè
                            </h3>
                            <p>Giảm giá lớn ở đây</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <a href="shop-left-sidebar.html" class="banner-3">
                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/banner/2.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Ghế văn phòng <br /> cho ưu đãi tốt</h3>
                            <p>Giảm giá lớn ở đây</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->
        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- New Product Start -->
<div class="section pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Sản Phẩm Mới</h2>
                        <p class="sub-title">Brian store luôn cập nhật su hướng & mẫu mã đa dạng phục vụ quý khách 
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <div class="new-product-wrapper swiper-wrapper">
                    <!-- Single Prodect -->
                    <?php
                        foreach ($newsproducthome as $key => $newsproduct) {
                    ?>
                    <div class="new-product-item swiper-slide">
                    <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
                        <input type="hidden" value="<?php echo  $newsproduct['id_product'] ?>" name="id_product">
                        <input type="hidden" value="<?php echo  $newsproduct['title_product'] ?>" name="title_product">
                        <input type="hidden" value="<?php echo  $newsproduct['image_product'] ?>" name="image_product">
                        <!-- <input type="hidden" value="?php echo  $newsproduct['price_product'] ?>" name="price_product"> -->
                        <?php
                            if($newsproduct['discount_product']==0){
                        ?>
                             <input type="hidden" value="<?php echo  $newsproduct['price_product'] ?>" name="price_product">
                        <?php
                            }
                        ?>
                        <?php
                            if($newsproduct['discount_product']==1){
                        ?>
                             <input type="hidden" value="<?php echo  $newsproduct['price_discount_product'] ?>" name="price_product">
                        <?php
                            }
                        ?>
                        <input type="hidden" value="1" name="quantity_product_details">
                        <div class="product">
                            <div class="thumb">
                                <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $newsproduct['id_product']?>" class="image">
                                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $newsproduct['image_product'] ?>" class="img-responsive w-100" alt="" width="271.5px" height="319.4px"/>
                                    <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $newsproduct['image_product'] ?>" alt="Product" width="271.5px" height="319.4px"/> 
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <!-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a> -->
                                </div>
                                <button type="submit" title="AddCart" name="addcart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html"><?php echo $newsproduct['title_product']?></a></h5>
                                <span class="price">
                                <?php
                                    if($newsproduct['discount_product']==0){
                                ?>
                                    <span class="new" style="color:#FF7704;"><?php echo number_format($newsproduct['price_product'],0,',','.').'đ'?></span>
                                <?php
                                    }
                                    else if($newsproduct['discount_product']==1){
                                ?>
                                    <span class="new" style="color:#FF7704;"><?php echo number_format($newsproduct['price_discount_product'],0,',','.').'đ'?></span>
                                    <span class="old" style="color:#BBBBBB;"><?php echo number_format($newsproduct['price_product'],0,',','.').'đ'?></span>
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
                    <!-- Single Prodect -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

<!-- New Product End -->


<!--  Blog area Start -->
<div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Bài Viết Mới </h2>
                        <p class="sub-title">Brian store luôn cập nhật xu hướng định hướng thay đổi diện mạo không gian phù hợp với khách hàng 
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                <?php
                    foreach ($newsposthome as $key => $newspost) {
                ?>
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $newspost['id_post'] ?>"><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $newspost['image_post'] ?>" class="img-responsive w-100" alt="" width="372px" height="403.09px"></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $newspost['id_post'] ?>">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $newspost['id_post'] ?>"><?php echo $newspost['title_post'] ?>.</a></h5>
                            <p class="blog-detail-text"><?php echo substr($newspost['title_post'], 0, 120) ?>.</p>

                            <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $newspost['id_post'] ?>" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Đọc thêm</a>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->
