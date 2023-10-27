<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package General_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/favicons/favicon.png" ?>">
    <link rel="manifest"
          href="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/favicons/manifest.json" ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php echo site_url() . "/wp-content/themes/general-theme/assets/img/favicons/ms-icon-144x144.png"; ?>">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'general-theme' ); ?></a>
<!--==============================
 Preloader
==============================-->
<div class="preloader ">
    <div class="preloader-inner">
        <span class="loader"></span>
    </div>
</div>
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area text-center">
        <button class="menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php $mobile_logo = general_get_image( get_theme_mod( 'custom_logo' ) ); ?>
                <img src="<?php echo $mobile_logo['src']; ?>" alt="<?php echo $mobile_logo['alt']; ?>">
            </a>
        </div>
<!--        <div class="mobile-menu">-->
	        <?php
	        wp_nav_menu(
		        array(
			        'theme_location'  => 'menu-1',
			        'container'       => 'div',
			        'container_class' => 'mobile-menu',
			        'depth'           => 2,
			        'walker'          => new Top_Main_Navigation(),
			        //  'add_li_class' => 'nav-product d-flex flex-column align-items-center'
		        )
	        );
	        ?>
    </div>
</div>
<header class="nav-header header-layout1">
    <div class="header-top d-lg-block d-none">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <?php
                            $mail = get_field('contact_email', 'option');
                            if ($mail): ?>
                            <li><i class="far fa-envelope"></i>
                                <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                            </li>
                            <?php endif;
                            $work_time = get_field('work_time', 'option');
                            if($work_time): ?>
                            <li><i class="far fa-clock"></i><?php echo $work_time; ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php $social_network = get_field('social_network_header', 'option');
                if(array_filter($social_network)): ?>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="social-links">
                                    <span class="me-3"><?php echo __('Visit our social pages', 'general-theme'); ?></span>
                                    <?php if ($social_network['facebook']): ?>
                                    <a href="<?php echo $social_network['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif;?>
	                                <?php if ($social_network['twitter']): ?>
                                    <a href="<?php echo $social_network['twitter'];?>"><i class="fab fa-twitter"></i></a>
	                                <?php endif;?>
	                                <?php if ($social_network['linkedin']): ?>
                                    <a href="<?php echo $social_network['linkedin'];?>"><i class="fab fa-linkedin-in"></i></a>
	                                <?php endif;?>
	                                <?php if ($social_network['instagram']): ?>
                                    <a href="<?php echo $social_network['instagram'];?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
	                                <?php if ($social_network['discord']): ?>
                                    <a href="<?php echo $social_network['discord'];?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-start justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
							<?php $general_logo = general_get_image( get_theme_mod( 'custom_logo' ) ); ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo $general_logo['src']; ?>"
                                     alt="<?php echo $general_logo['alt']; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'menu-1',
								'container'       => 'nav',
								'container_class' => 'main-menu d-none d-lg-inline-block',
								'depth'           => 2,
								'walker'          => new Top_Main_Navigation(),
								//  'add_li_class' => 'nav-product d-flex flex-column align-items-center'
							)
						);
						?>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <?php
                    $phone = get_field('contact_phone', 'options');
                    if ($phone): ?>
                    <div class="col-auto ms-auto d-lg-block d-none">
                        <div class="navbar-right-desc">
                            <i class="fas fa-phone-volume"></i><a href="tel:+<?php echo preg_replace('/(\W*)/', '', $phone); ?>"><?php echo $phone; ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <a href="contact.html" class="btn d-xl-block d-none">
                                Get a Quote
                            </a>
                            <button type="button" class="btn btn-border sideMenuToggler">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


