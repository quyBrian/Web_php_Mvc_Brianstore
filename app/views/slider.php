<div class="offcanvas-overlay"></div>

<!-- Hero/Intro Slider Start -->
<div class="section " data-interval="2000">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper"  >
            <!-- Single slider item -->
            <?php
                    foreach ($newsliderhome as $key => $nsli) {
                ?>
                <div class="hero-slide-item slider-height-2 swiper-slide d-flex">
                    <div class="hero-bg-image">
                        <img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php echo $nsli['image_slider'] ?>" class="img-responsive w-100" alt="" >
                    </div>
                </div>
                <?php
                    }
                ?>
            <!-- Single slider item -->
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->