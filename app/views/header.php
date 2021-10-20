<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/furns/furns/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 13:14:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Furns - Furniture eCommerce HTML Template</title>
    <meta name="description" content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/furns/" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Furns - Responsive eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Furns - Responsive eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Furns - Responsive eCommerce HTML Template" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->
    <link rel="icon" href="<?php echo BASE_URL ?>/public/furns/assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="icon" href="<?php echo BASE_URL ?>/public/furns/assets/images/favicon/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo BASE_URL ?>/public/furns/assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL ?>/public/furns/assets/images/favicon/favicon.png" />
    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Replace_with_your_site_title",
            "url": "Replace_with_your_site_URL"
        }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/furns/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/furns/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/furns/assets/css/style.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>
    <!-- Header Area start  -->
    <div class="header section">
        <!-- Header Top Message Start -->
        <div class="header-top section-fluid bg-black">
            <div class="container">
                <div class="row row-cols-lg-2 align-items-center">
                    <!-- Header Top Message Start -->
                    <div class="col text-center text-lg-start">
                        <div class="header-top-massege">
                            <!-- <p>Default Welcome Message </p> -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                </div>
            </div>
        </div>
        
        <!-- Header Top  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="<?php echo BASE_URL ?>/index"><img src="<?php echo BASE_URL ?>/public/furns/assets/images/logo/logo10.jpg" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                        class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="<?php echo BASE_URL?>/search/search">
                                        <input class="form-control" placeholder="Tìm kiếm sản phẩm" type="text" name="tukhoa">
                                        <button class="submit" type="submit" name="searchproduct"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php
                                        if(isset($_SESSION['customer']) && $_SESSION['customer']!=""){
                                    ?>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/customer/account/<?php echo $_SESSION['id_customer'] ?>"><?php echo $_SESSION['name_customer'] ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/customer/purchase/<?php echo $_SESSION['id_customer'] ?>">Đơn mua</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/customer/logout">Thoát</a></li>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/customer/signin">Tài khoản của tôi</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/customer/signin">Đăng Nhập</a></li>
                                    <?php
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                            <div  class="header-bottom-set dropdown">
                                <a href="<?php echo BASE_URL ?>/cart" class="dropdown-toggle header-action-btn">
                                    <i class="icon-handbag"></i>
                                    <span class="header-action-num">
                                    <?php
                                            $count= 0 ; 
                                            foreach($_SESSION['shopping_cart'] as $key => $value){
                                                $count++;
                                            }
                                            echo $count;
                                    ?>    
                                            
                                    </span>
                                </a>
                            </div>         
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- OffCanvas Cart Start -->
    
    <!-- OffCanvas Cart End -->
        
    <!-- Header Area End  -->
    <!-- OffCanvas Cart Start -->
    <!-- <div id="offcanvas-cart" >
        <a href="?php echo BASE_URL ?>/cart"></a>
    </div> -->
    <!-- OffCanvas Cart End -->