<?php
$big_image   = get_field( 'testimonial_1_big_image' );
$bg_image    = get_field( 'testimonial_1_background' );
$small_title = get_field( 'testimonial_1_small_title' );
$title       = get_field( 'testimonial_1_title' );
$sections    = get_field( 'testimonial_1_section' );
?>
<!--==============================
Testimonial Area
==============================-->
<div class="testimonial-area-1 overflow-hidden">
    <div class="testimonial-bg-thumb1">
		<?php if ( $big_image != '' ): ?>
			<?php $big_image_data = general_get_image( $big_image ); ?>
            <div class="thumb">
                <img src="<?php echo $big_image_data['src']; ?>" alt="<?php echo $big_image_data['alt']; ?>">
            </div>
		<?php endif; ?>
    </div>
    <div class="space">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-9">
					<?php if ( $bg_image != '' ): ?>
					<?php $bg_image_data = general_get_image( $bg_image ); ?>
                    <div class="testi-box-wrap1 text-center" data-bg-src="<?php echo $bg_image_data['src'] ?>">
						<?php else: ?>
                        <div class="testi-box-wrap1 text-center">
							<?php endif; ?>
							<?php if ( $small_title != '' || $title != '' ): ?>
                                <div class="title-area">

									<?php if ( $small_title != '' ) : ?>
                                        <span class="sub-title"><?php echo $small_title; ?></span>
									<?php endif; ?>
									<?php if ( $title != '' ) : ?>
                                        <h2 class="sec-title text-white"><?php echo $title; ?></h2>
									<?php endif; ?>

                                </div>
							<?php endif; ?>

							<?php if ( $sections ): ?>
                                <div class="row global-carousel testi-slider-1" data-slide-show="1">
									<?php foreach ( $sections as $section ): ?>
										<?php intellrocket_log(sprintf("%s", print_r($section, true) ), 'w'); ?>
                                        <div class="col-lg-6">
                                            <div class="testi-box">
                                                <div class="testi-box_thumb">

                                                    <img src="<?php echo $section['icon']['url']; ?>"
                                                         alt="<?php echo $section['icon']['alt']; ?>">
                                                    <div class="block-quote">
                                                        <i class="fas fa-quote-right"></i>
                                                    </div>
                                                </div>
                                                <div class="testi-box_content">
                                                    <p class="testi-box_text"><?php echo $section['text'] ?></p>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									<?php endforeach; ?>

                                </div>
                                <div class="testi-slider-controller" data-sliderNavfor=".testi-slider-1">
									<?php foreach ( $sections as $section ): ?>

                                        <a class="indicatior-btn active">
                                            <div class="testi-box_profile">
                                                <h4 class="testi-box_name"><?php echo $section['name']; ?></h4>
                                                <span class="testi-box_desig"><?php echo $section['postition']; ?></span>
                                            </div>
                                        </a>
									<?php endforeach; ?>

                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
