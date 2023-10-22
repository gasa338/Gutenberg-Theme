<?php
$fields = get_field( 'hero_section_1' );
?>

<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-1" id="hero">

    <div class="global-carousel">
<!--    <div class="global-carousel" id="heroSlider1" data-fade="true" data-slide-show="0" data-lg-slide-show="0"-->
<!--         data-md-slide-show="0" data-sm-slide-show="0" data-xs-slide-show="0" data-arrows="false" data-xl-arrows="false"-->
<!--         data-ml-arrows="false">-->
		<?php
		foreach ( $fields as $field ):
			$slider_image = general_get_image( $field['slider_image'] );
			$cover_image = general_get_image( $field['cover_image'] );
			?>
            <div class="hero-slider" data-bg-src="<?php echo $slider_image['src']; ?>">
				<?php if ( ! empty( $field['cover_image'] ) ): ?>
                    <div class="hero-shape1 shape-mockup movingX" data-bottom="165px" data-right="0">
                        <img src="<?php echo $cover_image['src']; ?>" alt="<?php echo $cover_image['alt']; ?>"
                             srcset="<?php echo $cover_image['srcset']; ?>">
                    </div>
				<?php endif; ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style1">
								<?php if ( $field['small_text'] ): ?>
                                    <span class="hero-subtitle" data-ani="slideinup"
                                          data-ani-delay="0s"><?php echo $field['small_text']; ?></span>
								<?php endif; ?>
                                <h1 class="hero-title text-white" data-ani="slideinup"
                                    data-ani-delay="0.1s"><?php echo $field['title']; ?></h1>
								<?php if ( $field['link'] ): ?>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.2s">
                                        <a href="<?php echo $field['link']['url']; ?>"
                                           class="btn style2"><?php echo $field['link']['title']; ?></a>
                                    </div>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endforeach; ?>
    </div>
	<?php if ( count( $fields ) > 1 ): ?>
        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider1" class="slick-arrow slick-prev">PREV</button>
            <button data-slick-next="#heroSlider1" class="slick-arrow slick-next">NEXT</button>
        </div>
	<?php endif; ?>
</div>
