<?php
$image_id = get_field('service_detail_1_image');
$name = get_field('service_detail_1_name');
$content = get_field( 'service_detail_1_content' );
?>

<div class="service-details-area space-top space-extra-bottom overflow-hidden">
	<div class="container">
		<div class="row">
			<div class="col-xxl-8 col-lg-7">
				<div class="service-page-single">
                    <?php if ($image_id != ''): ?>
					<div class="page-img mb-50">
                        <?php $image = general_get_image($image_id); ?>
						<img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image['srcset']; ?>">
					</div>
                    <?php endif; ?>
					<div class="page-content">
						<?php if ($name != ''): ?>
						<h2 class="page-title"><?php echo $name; ?></h2>
                        <?php endif; ?>
                        <div class="mb-50"> <!-- paragraf ima klasi mb-30 -->
                            <?php echo apply_filters( 'the_content', $content ); ?>
                        </div>
                        <InnerBlocks />
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-lg-5">
				<aside class="sidebar-area">
					<?php if ( is_active_sidebar( 'service-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'service-sidebar' ); ?>
					<?php endif; ?>
				</aside>
			</div>
		</div>
	</div>
</div>
