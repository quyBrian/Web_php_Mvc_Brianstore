  <div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <?php
        foreach($detailsposthome as $key =>$value){
            $name= $value['title_post'];
            $name_category_post= $value['title_category_post'];
            $id_cate= $value['id_category_post'];
        }
    ?>
    <div class="breadcrumb-area">
        <h5 class="breadcrumb-title" style="text-align: center;">Chi Tiết Bài viết</h5>
        <!-- danh mục: ?php echo $name_category_post ?>/ id: <?php echo $id_cate ?>/ Tên bài viết: <?php echo $name ?> -->
    </div>
    <!-- breadcrumb-area end -->
    <!-- Blog Area Start -->
    <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
                <?php
                    foreach($detailsposthome as $key =>$post){
                ?>
                <div class="col-lg-9 col-md-12">
                    <div class="blog-posts ">
                        <div class="single-blog-post blog-grid-post">
                            <!-- <div class="blog-post-media">
                                <div class="blog-image single-blog" data-aos="fade-up" data-aos-delay="200">
                                    <img src="?php echo BASE_URL ?>/public/uploads/post/?php echo $post['image_post'] ?>" alt="blog" width="876px" height="503px"/>
                                </div> 
                            </div> -->
                            <div class="blog-post-content-inner mt-30px" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="blog-title"><a href="#"> <?php echo $post['title_post'] ?> </a></h4>
                                <div class="blog-athor-date">
                                    <a class="blog-date" href="#">14 November</a>
                                </div>
                                <p>
                                    <?php echo $post['content_post'] ?>
                                </p>
                            </div>
                        </div>
                        <!-- single blog post -->
                    </div>
                    <div class="blog-single-tags-share d-sm-flex justify-content-between">
                        <div class="blog-single-tags d-flex mb-xs-15px" data-aos="fade-up" data-aos-delay="200">
                            <span class="title">Tags: </span>
                            <ul class="tag-list">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Water,</a></li>
                                <li><a href="#">Shelter</a></li>
                            </ul>
                        </div>
                        <div class="blog-single-share d-flex" data-aos="fade-up" data-aos-delay="200">
                            <span class="title">Share:</span>
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="blog-related-post">
                        <div class="row">
                            <div class="col-md-12 text-center" data-aos="fade-up">
                                <!-- Section Title -->
                                <div class="section-title">
                                    <h2 class="title m-0">Bài Liên Quan</h2>
                                </div>
                                <!-- Section Title -->
                            </div>
                        </div>
                        
                        <div class="row">
                            <?php
                                foreach($relatedposthome as $key =>$samepost){
                            ?>
                            <div class="col-md-4 mb-lm-30px related-post-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog-post-media">
                                    <div class="blog-image single-blog">
                                        <a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $samepost['id_post']?>"><img class="img-responsive" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $samepost['image_post'] ?>" alt="blog" width="276px" height="299.06px" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-3">
                                    <div class="blog-athor-date">
                                        <a class="blog-date" href="#">14 November</a>
                                    </div>
                                    <h4 class="blog-title"><a href="<?php echo BASE_URL ?>/news/newsdetails/<?php echo $samepost['id_post']?>"><?php echo $samepost['title_post'] ?>.</a></h4>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="comment-area">
                        <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">3 Comments</h2>
                        <div class="review-wrapper">
                            <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/review-image/1.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>
                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-review child-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/review-image/2.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="<?php echo BASE_URL ?>/public/furns/assets/images/review-image/1.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>
                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-form">
                        <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">Leave a Reply</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Your email address will not be published. Required fields are marked *</p>
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="single-form">
                                    <label>Your Review:</label>
                                    <textarea placeholder="Write a review"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="single-form mb-lm-15px">
                                    <label>Name:</label>
                                    <input type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="single-form mb-lm-15px">
                                    <label>Email:</label>
                                    <input type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="single-form">
                                    <label>Website:</label>
                                    <input type="email" placeholder="Website" />
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark border-0 mt-30px" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Start -->
                <?php 
                }
                ?>

                <div class="col-lg-3 col-md-12  mt-md-50px mt-lm-50px" data-aos="fade-up" data-aos-delay="200">
                    <div class="left-sidebar shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-title mt-0">Search</h3>
                            <div class="search-widget">
                                <form action="#">
                                    <input placeholder="Search entire store here ..." type="text" />
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="category-post">
                                <ul>
                                    <li><a href="#" class="selected">All <span>(4)</span> </a></li>
                                    <li><a href="#" class="">Accesssories <span>(3)</span> </a></li>
                                    <li><a href="#" class="">Box <span>(5)</span> </a></li>
                                    <li><a href="#" class="">chair <span>(2)</span> </a></li>
                                    <li><a href="#" class="">Deco <span>(6)</span> </a></li>
                                    <li><a href="#" class="">Furniture <span>(4)</span> </a></li>
                                    <li><a href="#" class="">Glass <span>(1)</span> </a></li>
                                    <li><a href="#" class="">Sofa <span>(3)</span> </a></li>
                                    <li><a href="#" class="">Table <span>(4)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title">Recent Post</h3>

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
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/blog-image/2.jpg" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <h5><a href="blog-single-left-sidebar.html">A quick tutorial for using
                                            </a></h5>
                                        <span class="date">APRIL 25, 2021</span>
                                    </div>
                                </div>
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side">
                                        <a href="blog-single-left-sidebar.html"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/blog-image/3.jpg" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <h5><a href="blog-single-left-sidebar.html">Informed donor is very effective
                                            </a>
                                        </h5>
                                        <span class="date">APRIL 26, 2021</span>
                                    </div>
                                </div>
                                <div class="recent-single-post d-flex">
                                    <div class="thumb-side m-0px">
                                        <a href="blog-single-left-sidebar.html"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/blog-image/4.jpg" alt="" /></a>
                                    </div>
                                    <div class="media-side">
                                        <h5><a href="blog-single-left-sidebar.html">Want more charitable resources</a>
                                        </h5>
                                        <span class="date">APRIL 27, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-40px">
                            <h3 class="sidebar-title">Tags</h3>

                            <div class="sidebar-widget-tag d-inline-block">
                                <ul>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Hungry</a></li>
                                    <li><a href="#">Water</a></li>
                                    <li><a href="#">Shool</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Children</a></li>
                                    <li><a href="#">selter</a></li>
                                </ul>
                            </div>
                        </div>
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

 