<?php
$small_title = get_field( 'cta_1_small_title' );
$title = get_field( 'cta_1_title' );
$link = get_field( 'cta_1_link' );
$help_text = get_field( 'cta_1_help_text' );
$phone = get_field( 'cta_1_phone' );
?>
<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="<?php echo get_field( 'cta_1_image' ); ?>">
	<div class="container">
		<div class="row justify-content-lg-end justify-content-center">
			<div class="col-xl-6 col-lg-8 col-md-10">
				<div class="cta-wrap text-center text-lg-start">
					<div class="title-area">
                        <?php if ($small_title != ''): ?>
						<span class="sub-title"><?php echo $small_title; ?></span>
                        <?php endif; ?>
						<h2 class="sec-title text-white"><?php echo $title; ?></h2>
					</div>
					<div class="btn-wrap mt-40">
						<a href="<?php echo $link['url']; ?>" class="btn style2"><?php echo $link['title']; ?></a>
						<div class="about-info-wrap style3">
							<div class="icon"><i class="fas fa-phone-volume"></i></div>
							<div class="details">
                                <?php if ($help_text != ''): ?>
								<p class="about-info-title text-white"><?php echo $help_text; ?></p>
                                <?php endif; ?>
                                <?php if ($phone): ?>
								<a class="about-info-link" href="tel:+<?php echo preg_replace('/(\W*)/', '', $phone); ?>">
                                    <?php echo $phone; ?>
                                </a>
                                <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
