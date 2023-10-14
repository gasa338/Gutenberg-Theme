<?php
$content = get_field('service_detail_inner_content');
?>
<div class="mb-50 mt-25">
	<?php echo apply_filters( 'the_content', $content ); ?>
</div>
