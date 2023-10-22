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
    /*
    const dataBgSrc = document.querySelectorAll('[data-bg-src]')
    dataBgSrc.forEach( (obj, index) => {
        const src = obj.getAttribute('data-bg-src')
        obj.style.backgroundImage="url(" + src + ")";
        obj.className = 'background-image'
        obj.removeAttribute('data-bg-src')
    })
    */
    // (function ($) {
    //     "use strict";
    //     if ($("[data-bg-src]").length > 0) {
    //         $("[data-bg-src]").each(function () {
    //             var src = $(this).attr("data-bg-src");
    //             $(this).css("background-image", "url(" + src + ")");
    //             $(this).removeAttr("data-bg-src").addClass("background-image");
    //         });
    //     }
    // })(jQuery);

</script>
</body>
</html>
