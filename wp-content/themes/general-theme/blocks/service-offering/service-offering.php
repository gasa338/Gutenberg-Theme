<?php
$small_title = get_field( 'offer_small_title' );
$title       = get_field( 'offer_title' );
?>
<!--==============================
Service Area 01
==============================-->
<div class="service-area-1 space overflow-hidden">
    <div class="container">
        <div class="title-area">
			<?php if ( $small_title != '' ): ?>
                <span class="sub-title"><?php echo $small_title; ?></span>
			<?php endif; ?>
            <h2 class="sec-title text-white"><?php echo $title; ?></h2>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row global-carousel service-slider-1" data-slide-show="4" data-ml-slide-show="3"
             data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
             data-dots="false">
			<?php
			if ( have_rows( 'offer_items' ) ):
				while ( have_rows( 'offer_items' ) ) : the_row();
					$text = get_sub_field( 'text' );
					$icon = general_get_image( get_sub_field( 'icon' ) );
					?>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>" srcset="<?php echo $icon['alt']; ?>">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a
                                            href="<?php echo $text['title']['url']; ?>"><?php echo $text['title']['title']; ?></a>
                                </h4>
                                <p class="service-card_text"><?php echo $text['description']; ?></p>
                                <a href="<?php echo $text['button']['url'] ?>" class="link-btn" tabindex="0">
									<?php echo $text['button']['title'] ?>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
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
