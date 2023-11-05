<?php
$image_id = get_field('service_detail_1_image');
$name = get_field('service_detail_1_name');
$content = get_field( 'service_detail_1_content' );
$sidebar_title = get_field( 'service_widget_category_title' );
$sidebar_links = get_field( 'service_widget_category_links' );
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
                        <InnerBlocks id="left-blocks" />
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-lg-5">
				<aside class="sidebar-area">
                    <?php if (!empty($sidebar_links)): ?>
                    <div class="widget widget_categories">
                        <h3 class="widget_title"><?php echo $sidebar_title;?></h3>
                        <ul>
							<?php foreach ($sidebar_links as $link): ?>
                                <li>
                                    <a href="<?php echo $link['link']['url']; ?>"><i class="fa-solid fa-arrow-right"></i><?php echo $link['link']['title']; ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
				</aside>
			</div>
		</div>
	</div>
</div>
