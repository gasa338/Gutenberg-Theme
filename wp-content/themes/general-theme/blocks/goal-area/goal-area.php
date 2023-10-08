<?php
$small_text = get_field('goal_small_text');
$title = get_field('goal_title');
$link = get_field('goal_link');
$image_id = get_field('goal_image');
$image_text = get_field('goal_image_text');
$goals = get_field('goal_goals');
?>
<!--==============================
Goal Area
==============================-->
<section class="goal-area space">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 order-lg-2 text-lg-end">
				<div class="goal-thumb-1 mb-40 mb-lg-0">
                    <?php $image = general_get_image( $image_id ); ?>
                    <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image['srcset']; ?>">
                    <?php if ($image_text != ''): ?>
                    <div class="goal-badge-wrap">
						<div class="goal-badge"><?php echo str_replace('<p>', '', wpautop($image_text)); ?></div>
					</div>
                    <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1">
                <?php if ($small_text != '' || $title != ''): ?>
				<div class="title-area">
                    <span class="sub-title"><?php echo $small_text; ?></span>
					<h2 class="sec-title"><?php echo $title ?></h2>
				</div>
                <?php endif; ?>
                <?php foreach ($goals as $goal): ?>
				<div class="about-grid">
					<div class="about-grid_icon">
						<img src="<?php echo $goal['icon']['url']; ?>" alt="<?php echo $goal['icon']['alt']; ?>">
					</div>
					<div class="about-grid_content">
						<h4 class="about-grid_title"><?php echo $goal['title']; ?></h4>
						<p class="about-grid_text"><?php echo $goal['description']; ?></p>
					</div>
				</div>
                <?php endforeach; ?>
				<a class="btn btn-border2" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
			</div>
		</div>
	</div>
</section>

