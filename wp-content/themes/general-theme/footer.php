<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="<?php echo "/wp-content/themes/general-theme/assets/img/bg/footer-1-bg.png"; ?>">
    <div class=" container">
        <div class="contact-card">
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-location-dot"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Gym Location</p>
                    <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Email Address</p>
                    <a href="mailto:health@Fitmas.com" class="info-card_link">health@Fitmas.com</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Phone Number</p>
                    <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <div class="footer-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod( 'white_logo' ); ?>" alt="footer white logo">
                                </a>
                            </div>
                            <?php
                            $footer_description = get_field( 'footer_description', 'option' );
                            if ( $footer_description ): ?>
                                <p class="about-text">
                                    <?php echo wpautop( $footer_description ) ?>
                                </p>
                            <?php
                            endif;
                            $social_network = get_field( 'social_network_footer', 'option' );
                            if ( array_filter( $social_network ) ):
                                ?>
                                <div class="social-btn">
                                    <?php if ( $social_network['facebook'] ): ?>
                                        <a href="<?php echo $social_network['facebook']; ?>" tabindex="0"><i
                                                    class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $social_network['twitter'] ): ?>
                                        <a href="<?php echo $social_network['twitter']; ?>" tabindex="0"><i
                                                    class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $social_network['linkedin'] ): ?>
                                        <a href="<?php echo $social_network['linkedin']; ?>" tabindex="0"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $social_network['instagram'] ): ?>
                                        <a href="<?php echo $social_network['instagram']; ?>" tabindex="0"><i
                                                    class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $social_network['discord'] ): ?>
                                        <a href="<?php echo $social_network['discord']; ?>" tabindex="0"><i
                                                    class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <?php $menu = wp_get_nav_menu_object( 'mobile-menu' ); ?>
                        <h3 class="widget_title"><?php echo $menu->name; ?></h3>
                        <?php
                        wp_nav_menu( array(
                                'menu'                 => '',
                                'container'            => 'div',
                                'container_class'      => 'menu-all-pages-container',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => 'menu',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'item_spacing'         => 'preserve',
                                'depth'                => 0,
                                'walker'               => '',
                                'theme_location'       => 'mobile-menu',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Gallery</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed1.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed1.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed2.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed2.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed3.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed3.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed4.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed4.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed5.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed5.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed6.png"; ?>"
                                     alt="Gallery Image">
                                <a href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/widget/insta-feed6.png"; ?>"
                                   class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <?php
                        $newsletter_title = get_field( 'newsletter_title', 'option' );
                        if ( $newsletter_title ): ?>
                            <h3 class="widget_title"><?php echo $newsletter_title; ?></h3>
                        <?php
                        endif;
                        $newsletter_description = get_field( 'newsletter_description', 'option' );
                        if ( $newsletter_description ):
                            ?>
                            <p class="footer-text"><?php echo wpautop( $newsletter_description ); ?></p>
                        <?php endif; ?>
                        <?php echo do_shortcode( '[mc4wp_form id=81]' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a>
                        All Rights Reserved.</p></div>
            </div>
        </div>
    </div>
</footer>

<!--********************************
		Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<?php wp_footer(); ?>



<script>

    /*---------- 06. Set Background Image ----------*/
    (function ($) {
        if ($("[data-bg-src]").length > 0) {
            $("[data-bg-src]").each(function () {
                var src = $(this).attr("data-bg-src");
                $(this).css("background-image", "url(" + src + ")");
                $(this).removeAttr("data-bg-src").addClass("background-image");
            });
        }


        /*----------- 07. Global Slider ----------*/
        $(".global-carousel").each(function () {
            var carouselSlide = $(this);

            // Collect Data
            function d(data) {
                return carouselSlide.data(data);
            }

            // Custom Arrow Button
            var prevButton =
                    '<button type="button" class="slick-prev"><i class="' +
                    d("prev-arrow") +
                    '"></i></button>',
                nextButton =
                    '<button type="button" class="slick-next"><i class="' +
                    d("next-arrow") +
                    '"></i></button>';

            // Function For Custom Arrow Btn
            $("[data-slick-next]").each(function () {
                $(this).on("click", function (e) {
                    e.preventDefault();
                    $($(this).data("slick-next")).slick("slickNext");
                });
            });

            $("[data-slick-prev]").each(function () {
                $(this).on("click", function (e) {
                    e.preventDefault();
                    $($(this).data("slick-prev")).slick("slickPrev");
                });
            });

            // Check for arrow wrapper
            if (d("arrows") == true) {
                if (!carouselSlide.closest(".arrow-wrap").length) {
                    carouselSlide.closest(".container").parent().addClass("arrow-wrap");
                }
            }

            carouselSlide.slick({
                dots: d("dots") ? true : false,
                fade: d("fade") ? true : false,
                arrows: d("arrows") ? true : false,
                speed: d("speed") ? d("speed") : 1000,
                sliderNavfor: d("slidernavfor") ? d("slidernavfor") : false,
                autoplay: d("autoplay") == false ? false : true,
                infinite: d("infinite") == false ? false : true,
                slidesToShow: d("slide-show") ? d("slide-show") : 1,
                adaptiveHeight: d("adaptive-height") ? true : false,
                centerMode: d("center-mode") ? true : false,
                autoplaySpeed: d("autoplay-speed") ? d("autoplay-speed") : 8000,
                centerPadding: d("center-padding") ? d("center-padding") : "0",
                focusOnSelect: d("focuson-select") == false ? false : true,
                pauseOnFocus: d("pauseon-focus") ? true : false,
                pauseOnHover: d("pauseon-hover") ? true : false,
                variableWidth: d("variable-width") ? true : false,
                vertical: d("vertical") ? true : false,
                verticalSwiping: d("vertical") ? true : false,
                prevArrow: d("prev-arrow")
                    ? prevButton
                    : '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
                nextArrow: d("next-arrow")
                    ? nextButton
                    : '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
                rtl: $("html").attr("dir") == "rtl" ? true : false,
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            arrows: d("xl-arrows") ? true : false,
                            dots: d("xl-dots") ? true : false,
                            slidesToShow: d("xl-slide-show")
                                ? d("xl-slide-show")
                                : d("slide-show"),
                            centerMode: d("xl-center-mode") ? true : false,
                            centerPadding: "0",
                        },
                    },
                    {
                        breakpoint: 1400,
                        settings: {
                            arrows: d("ml-arrows") ? true : false,
                            dots: d("ml-dots") ? true : false,
                            slidesToShow: d("ml-slide-show")
                                ? d("ml-slide-show")
                                : d("slide-show"),
                            centerMode: d("ml-center-mode") ? true : false,
                            centerPadding: 0,
                        },
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            arrows: d("lg-arrows") ? true : false,
                            dots: d("lg-dots") ? true : false,
                            slidesToShow: d("lg-slide-show")
                                ? d("lg-slide-show")
                                : d("slide-show"),
                            centerMode: d("lg-center-mode")
                                ? d("lg-center-mode")
                                : false,
                            centerPadding: 0,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: d("md-arrows") ? true : false,
                            dots: d("md-dots") ? true : false,
                            slidesToShow: d("md-slide-show")
                                ? d("md-slide-show")
                                : 1,
                            centerMode: d("md-center-mode")
                                ? d("md-center-mode")
                                : false,
                            centerPadding: 0,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: d("sm-arrows") ? true : false,
                            dots: d("sm-dots") ? true : false,
                            slidesToShow: d("sm-slide-show")
                                ? d("sm-slide-show")
                                : 1,
                            centerMode: d("sm-center-mode")
                                ? d("sm-center-mode")
                                : false,
                            centerPadding: 0,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            arrows: d("xs-arrows") ? true : false,
                            dots: d("xs-dots") ? true : false,
                            slidesToShow: d("xs-slide-show")
                                ? d("xs-slide-show")
                                : 1,
                            centerMode: d("xs-center-mode")
                                ? d("xs-center-mode")
                                : false,
                            centerPadding: 0,
                        },
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ],
            });
        });
        if ($(".testi-slider-controller").length) {
            $(".testi-slider-controller").defaultTab({
                sliderTab: true,
                tabButton: ".indicatior-btn",
            });
        }

    })(jQuery);
</script>
</body>
</html>
