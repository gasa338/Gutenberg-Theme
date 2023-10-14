<?php
$content = get_field( 'why_choose_us_inner_1' );
?>
<h3 class="page-subtitle mb-0"><?php echo $content['title_main']; ?></h3>
<p><?php echo $content['subtitle']; ?></p>
<div class="row">
	<div class="col-sm-6">
		<div class="service-wrap">
			<h6><i class="far fa-check me-2"></i><?php echo $content['title_1']; ?></h6>
			<p><?php echo $content['text_1']; ?></p>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="service-wrap">
			<h6><i class="far fa-check me-2"></i><?php echo $content['title_2']; ?></h6>
			<p><?php echo $content['text_2']; ?></p>
		</div>
	</div>
</div>
