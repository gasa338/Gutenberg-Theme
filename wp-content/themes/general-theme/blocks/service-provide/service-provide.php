<?php
$small_title = get_field( 'service_provide_small_title' );
$title       = get_field( 'service_provide_title' );

$spaces = '';
switch (get_field( 'service_provide_spaces' )) {
	case 'space':
		$spaces = 'space';
		break;
	case 'space-top':
		$spaces = 'space-top';
		break;
	case 'space-bottom':
		$spaces = 'space-bottom';
		break;
	default:
		break;
}
?>
<!--==============================
Service Area 02
==============================-->
<div class="service-area-2 <?php echo $spaces; ?> overflow-hidden">
    <?php if ($small_title != '' || $title !="" ): ?>
    <div class="container">
        <div class="title-area text-center">
			<?php if ( $small_title != '' ): ?>
                <span class="sub-title"><?php echo $small_title; ?></span>
			<?php endif; ?>
            <h2 class="sec-title"><?php echo $title; ?></h2>
        </div>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3"
             data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
             data-dots="false">

			<?php
			if ( have_rows( 'service_provide_services' ) ):
				while ( have_rows( 'service_provide_services' ) ) : the_row();
					$icon = general_get_image(get_sub_field( 'icon' ));
                    $title = get_sub_field('title');
					$description = get_sub_field( 'descripton' );
                    $button = get_sub_field( 'button' );
					?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>" srcset="<?php echo $icon['srcset']; ?>">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5">
                                    <a href="<?php echo $title['url']; ?>"><?php echo $title['title']; ?></a>
                                </h4>
                                <p class="service-card_text"><?php echo $description; ?></p>
                                <?php if (isset($button['url'])): ?>
                                <a href="<?php echo $button['url']; ?>" class="link-btn" tabindex="0">
                                    <i class="fas fa-arrow-right"></i><?php echo $button['title']; ?>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
				<?php
				endwhile;
			endif;
			?>
        </div>
    </div>
</div>
