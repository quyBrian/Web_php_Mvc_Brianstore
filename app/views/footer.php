 <!-- Footer Area Start -->
 <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Về chúng tôi:</h4>
                                <p class="about-text">Chúng tôi luôn mang đến cho bạn những sản phẩm chất lượng và đa dạng mẫu mà giúp đáp ứng nhu cần khách hàng.
                                </p>
                                <ul class="link-follow">
                                    <li class="li">
                                        <a class="paypal icon-paypal m-0" title="Paypal" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="tumblr icon-social-tumblr" title="Tumblr" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="twitter icon-social-twitter" title="Twitter" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="pinterest icon-social-pinterest" title="Pinterest" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="linkedin icon-social-linkedin" title="Linkedin" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Thông tin </h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="<?php echo BASE_URL ?>/aboutus/about">Giới Thiệu</a></li>
                                            <li class="li"><a class="single-link" href="#">Thông Tin Giao Hàng</a></li>
                                            <li class="li"><a class="single-link" href="#">Chính Sách Sảo Mật</a></li>
                                            <li class="li"><a class="single-link" href="#">Điểu Khoản & Điều Kiện</a></li>
                                            <li class="li"><a class="single-link" href="#">Sản Xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-2 col-sm-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="600">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Tài Khoản Của Tôi:</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="#">Tài Khoản Của Tôi</a></li>
                                            <li class="li"><a class="single-link" href="">Giỏ Hàng</a></li>
                                            <?php 
                                                if(!Session::get('customer')){
                                            ?> 
                                                <li class="li"><a class="single-link" href="<?php echo BASE_URL ?>/customer/logout">Đăng xuất</a></li>
                                            <?php
                                                }else{
                                            ?>
                                                <li class="li"><a class="single-link" href="<?php echo BASE_URL ?>/customer/signin">Đăng nhập</a></li>
                                            <?php
                                                }
                                            ?>
                                            <li class="li"><a class="single-link" href="#">Danh Sách Yêu Thích</a></li>
                                            <li class="li"><a class="single-link" href="#">Thủ Tục Thanh Toán0</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                            <div class="single-wedge">
                                <h4 class="footer-herading">newsletter</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="#">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Your Mail*" name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <button id="mc-embedded-subscribe" class="button btn-primary" type="submit" name="subscribe" value=""><i
                                                            class="icon-cursor"></i> Send Mail</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-md-6 text-end">
                            <div class="payment-link">
                                <img src="<?php echo BASE_URL ?>/public/furns/assets/images/icons/payment.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 text-start">
                            <p class="copy-text"> © 2021 <strong>BrianStore</strong> Made With <i class="ion-heart" aria-hidden="true"></i> By <a class="company-name" href="#">
                                <strong> Brian</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top mb-20px">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
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
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button class="add-cart btn btn-primary btn-hover-primary ml-4"> Add To
                                            Cart</button>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->






    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="<?php echo BASE_URL ?>/public/furns/assets/js/vendor/vendor.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/furns/assets/js/plugins/plugins.min.js"></script>

    <!-- Main Js -->
    <script src="<?php echo BASE_URL ?>/public/furns/assets/js/main.js"></script>
</body>


<!-- Mirrored from template.hasthemes.com/furns/furns/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 13:14:32 GMT -->
</html>