<!-- Main Menu Start -->
<div class="bg-gray d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="main-menu manu-color-white">
                            <ul>
                                <li class="dropdown"><a href="<?php echo BASE_URL ?>/index">Trang chủ</a>
                                </li>
                                <li><a href="<?php echo BASE_URL ?>/aboutus/about">Giới thiệu</a></li>
                                <li class="dropdown position-static"><a href="<?php echo BASE_URL ?>/productus/allproduct">Danh mục sản phẩm <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static">
                                            <?php 
                                                foreach($categoryhome as $key => $cateus){
                                            ?>
                                                <a href="<?php echo BASE_URL ?>/productus/categoryus/<?php echo $cateus['id_category_product'] ?>">
                                                <?php echo $cateus['title_category_product'] ?>
                                            </a>
                                            <?php 
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="<?php echo BASE_URL ?>/news/allpost">Tin tức <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php 
                                                foreach($categoryposthome as $key => $catepost){
                                        ?>
                                        <li class="dropdown position-static">
                                            <a href="<?php echo BASE_URL ?>/news/categorynews/<?php echo $catepost['id_category_post'] ?>">
                                                <?php echo $catepost['title_category_post'] ?>
                                            </a>
                                        </li>
                                        <?php
                                                }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo BASE_URL ?>/index/contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->
    </div>