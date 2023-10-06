<?php
$features[] = get_field('feature_area_1');
$features[] = get_field('feature_area_2');
$features[] = get_field('feature_area_3');
?>
<div class="space">
	<div class="container">
		<div class="feature-area">
			<div class="row gx-0">
                <?php foreach ($features as $feature): ?>
				<div class="col-lg-4">
					<div class="feature-card">
                        <?php if ($feature['bg_image'] != ''):
                            $bg_image = general_get_image( $feature['bg_image'] )
                            ?>
						<div class="feature-card_bg">
							<img src="<?php echo $bg_image['src'] ?>" alt="<?php echo $bg_image['alt'] ?>">
						</div>
                        <?php endif; ?>
						<div class="feature-card_icon">
                            <?php $icon = general_get_image( $feature['icon'] ); ?>
							<img src="<?php echo $icon['src'] ?>" alt="<?php echo $icon['alt'] ?>">
						</div>
						<h6 class="feature-card_subtitle"><?php echo $feature['subtitle']; ?></h6>
						<h4 class="feature-card_title"><a href="<?php echo $feature['title']['url']; ?>"><?php echo $feature['title']['title']; ?></a></h4>
						<p class="feature-card_text"><?php echo $feature['description']; ?></p>
						<a href="<?php echo $feature['button_link']['url']; ?>" class="btn style2"><?php echo $feature['button_link']['title']; ?></a>
					</div>
				</div>
                <?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
