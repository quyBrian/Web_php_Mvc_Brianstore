  <div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    
    <!-- breadcrumb-area end -->
    <?php
        foreach($detailsproduct as $key =>$value){
            $name= $value['title_product'];
            $name_category_product= $value['title_category_product'];
            $id_cate= $value['id_category_product'];
        }
    ?>
    <div class="breadcrumb-area">
        <h5 class="breadcrumb-title" style="text-align: center;">Chi Tiết sản phẩm</h5>
    </div>
    <?php
        foreach($detailsproduct as $key =>$value){
    ?>
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
        <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
            <input type="hidden" value="<?php echo  $value['id_product'] ?>" name="id_product">
            <input type="hidden" value="<?php echo  $value['title_product'] ?>" name="title_product">
            <input type="hidden" value="<?php echo  $value['image_product'] ?>" name="image_product">
            <!-- <input type="hidden" value="?php echo  $product['price_product'] ?>" name="price_product"> -->
            <?php
                if($value['discount_product']==0){
            ?>
            <input type="hidden" value="<?php echo  $value['price_product'] ?>" name="price_product">
            <?php
                }
            ?>
            <?php
                if($value['discount_product']==1){
            ?>
                <input type="hidden" value="<?php echo  $value['price_discount_product'] ?>" name="price_product">
            <?php
                }
            ?>
            <input type="hidden" value="<?php echo  $value['quantity_product'] ?>" name="quantity_product_details">
            <div class="row">     
                <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-15px mb-15px">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product']?> " alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product'] ?>" alt="">
                            </div>
                           
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        <h2><?php echo $value['title_product'] ?></h2>
                        <p class="reference">Mã SP:<span> <?php echo  $value['id_product'] ?></span></p>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <?php
                                    if($value['discount_product']==0){
                                ?>
                                    <li class="old-price not-cut" style="color:#FF7704;"><?php echo number_format($value['price_product'],0,',','.').'đ'?></li>
                                 <?php
                                    }
                                    else if($value['discount_product']==1){
                                ?>
                                    <li class="old-price not-cut" style="color:#FF7704;"><?php echo number_format($value['price_discount_product'],0,',','.').'đ'?></li>
                                    <li class="old-price not-cut" style="color:#BBBBBB; font-size: 20px;  text-decoration: line-through;"><?php echo number_format($value['price_product'],0,',','.').'đ'?></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <?php
                            if($value['quantity_product']>0){
                        ?>
                        <p class="quickview-para">Còn hàng. </p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input min="1" max="<?php echo  $value['quantity_product'] ?>" class="cart-plus-minus-box" type="text" name="product_quantity" value="1" />
                                <input type="hidden" value="<?php echo  $value['quantity_product'] ?>" name="quantity_product_details">
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart btn btn-primary btn-hover-primary ml-4" href="#"> Thêm Vào Giỏ Hàng</button>
                            </div>
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <p class="quickview-para">Hết hàng. </p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input min="1" max="<?php echo  $value['quantity_product'] ?>" class="cart-plus-minus-box" type="text" name="product_quantity" value="1" />
                                <input type="hidden" value="<?php echo  $value['quantity_product'] ?>" name="quantity_product_details">
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart btn btn-primary btn-hover-primary ml-4" href="#" disabled > Thêm Vào Giỏ Hàng</button>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="pro-details-wish-com">
                            <div class="pro-details-wishlist">
                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Thêm vào danh sách yêu thích</a>
                            </div>
                            <div class="pro-details-compare">
                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Thêm vào để so sánh</a>
                            </div>
                        </div>
                        <div class="pro-details-social-info">
                            <span>Share</span>
                            <div class="social-info">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-policy">
                            <ul>
                                <li><img src="<?php echo BASE_URL ?>/public/furns/assets/images/icons/policy.png" alt="" /><span>Chính Sách Bảo Mật</span></li>
                                <li><img src="<?php echo BASE_URL ?>/public/furns/assets/images/icons/policy-2.png" alt="" /><span>Chính Sách Giao Hàng</span></li>
                                <li><img src="<?php echo BASE_URL ?>/public/furns/assets/images/icons/policy-3.png" alt="" /><span>Chính Sách TRả Hàng</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details1">Mô Tả</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Chi Tiết Sản Phẩm</a>
                    <a data-bs-toggle="tab" href="#des-details3">Đánh Giá Sản Phẩm (2)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p ><?php echo $value['desc_product'] ?></p>
                            
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="<?php echo BASE_URL ?>/public/furns/assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Trả lời</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Coment1.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="<?php echo BASE_URL ?>/public/furns/assets/images/review-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Trả lời</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Shop xin cảm ơn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Thêm đánh giá</h3>
                                    <div class="ratting-form">
                                        <form action="<?php echo BASE_URL ?>/customer/comment" method="POST">
                                            <input type="hidden" value="<?php echo  $value['id_product'] ?>" name="id_product">
                                            <div class="star-box">
                                                <span>Đánh giá:</span>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Tên" type="text" name="name_comment" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" type="email" name="email_comment" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="content_comment" placeholder="Nội dung"></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Đánh Giá</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

    <?php
        }
    ?>

    <!-- New Product End -->

    <!-- New Product Start -->
    <div class="section pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-start mb-11">
                        <h2 class="title">Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <div class="new-product-wrapper swiper-wrapper">
                    <?php 
                        foreach($relatedproducthome as $key =>$relate){
                    ?>
                    <!-- Single Prodect -->
                    
                    <div class="new-product-item swiper-slide">
                        <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
                            <input type="hidden" value="<?php echo  $relate['id_product'] ?>" name="id_product">
                            <input type="hidden" value="<?php echo  $relate['title_product'] ?>" name="title_product">
                            <input type="hidden" value="<?php echo  $relate['image_product'] ?>" name="image_product">
                            <!-- <input type="hidden" value="?php echo  $newsproduct['price_product'] ?>" name="price_product"> -->
                            <?php
                                if($relate['discount_product']==0){
                            ?>
                                <input type="hidden" value="<?php echo  $relate['price_product'] ?>" name="price_product">
                            <?php
                                }
                            ?>
                            <?php
                                if($relate['discount_product']==1){
                            ?>
                                <input type="hidden" value="<?php echo  $relate['price_discount_product'] ?>" name="price_product">
                            <?php
                                }
                            ?>
                            <input type="hidden" value="1" name="quantity_product_details"> 
                        <div class="product">
                            <div class="thumb">
                                <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $relate['id_product']?>" class="image">
                                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $relate['image_product'] ?>" alt="Product" width="271.5px" height="319.4px"/>
                                    <img class="hover-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $relate['image_product'] ?>" alt="Product" width="271.5px" height="319.4px" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="#" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Thêm Vào Giỏ Hàng</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $relate['id_product']?>"> <?php echo $relate['title_product'] ?></a></h5>
                                <span class="price">
                                <?php
                                    if($relate['discount_product']==0){
                                ?>
                                    <span class="new" style="color:#FF7704;"><?php echo number_format($relate['price_product'],0,',','.').'đ'?></span>
                                <?php
                                    }
                                    else if($relate['discount_product']==1){
                                ?>
                                    <span class="new" style="color:#FF7704;"><?php echo number_format($relate['price_discount_product'],0,',','.').'đ'?></span>
                                    <span class="old" style="color:#BBBBBB;"><?php echo number_format($relate['price_product'],0,',','.').'đ'?></span>
                                <?php
                                    }
                                ?>
                                </span>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                    <!-- Single Prodect -->
                    <?php
                        }
                    ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
