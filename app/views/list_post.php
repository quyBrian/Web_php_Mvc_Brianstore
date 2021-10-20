<div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <h5 class="breadcrumb-title" style="text-align: center;">Tất Cả Bài Viết</h5>
    </div>

    <!-- breadcrumb-area end -->
    <!-- Blog Area Start -->
    <div class="blog-grid pb-100px pt-100px main-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    
                    <?php
                        foreach($listposthome as $key =>$post){
                    ?>
                    <div class="row mb-50px">
                        <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-blog-post blog-list-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $post['id_post']?>"><img class="img-responsive" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $post['image_post'] ?>" alt="blog" width="351px" height="300px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 align-self-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="blog-post-content-inner mt-lm-20px">
                                <div class="blog-athor-date">
                                    <a class="blog-date" href="#">14 November</a>
                                </div>
                                <h4 class="blog-title"><a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $post['id_post']?>"><?php echo substr($post['title_post'],0,120) ?>.</a></h4>
                                <p>
                                <?php echo substr($post['content_post'],0,218)?>...
                                </p>
                                <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $post['id_post']?>" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                            </div>
                        </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- single blog post -->
                    
                    
                    <!-- single blog post -->
                    
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
                    <!--  Pagination Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up" data-aos-delay="200">
                    <div class="left-sidebar shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title mt-0">Recent Post</h3>

                            <div class="recent-post-widget">
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/blog-image/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <h5><a href="blog-single-left-sidebar.html">Want more charitable resources</a>
                                        </h5>
                                        <span class="date">APRIL 24, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title">Instagram Widget </h3>
                            <div class="flicker-widget">
                                <ul>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/1.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/2.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/3.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/4.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/1.png" alt="instagram"></a>
                                    </li>
                                    <li>
                                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/instragram-image/2.png" alt="instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </div>
    <!-- Blag Area End -->

   