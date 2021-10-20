<div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <h5 class="breadcrumb-title" style="text-align: center;">Giới Thiệu</h5>
    </div>

    <!-- breadcrumb-area end -->

    <!-- About Us Area Start -->
    <?php
        foreach($about as $key => $ab){

    ?>
    <section class="about-area pb-100px pt-100px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left-image mb-md-30px mb-lm-30px" data-aos="fade-up">
                        <img src="<?php echo BASE_URL ?>/public/uploads/about/<?php echo $ab['image_about'] ?>" alt="" class="img-responsive w-100" width="576px" height="333.46px" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-title" data-aos="fade-up">
                            <h2><?php echo $ab['title_about'] ?></h2>
                        </div>
                        <p class="mb-30px" data-aos="fade-up" data-aos-delay="200">
                            <?php echo $ab['content_about'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
    <!-- About Us Area End -->
    <!-- Start Slill Progress -->
    <div class="progressbar-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- <div class="content" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="title">Functionality meets perfection</h4>
                        <p class="title-desc">In today’s day and age, one cannot underestimate the importance of design, the art of
                            creating striking visuals to move and captivate your audience. And as the world becomes more
                            and more digitized with each passing second, the importance of graphic design has been
                            rocketed to the top.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Slill Progress -->
   

   

    
