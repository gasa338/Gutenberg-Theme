<?php
$content = get_field( 'why_choose_us_inner_2' );
$image = $content['image'];
$image_src = '';
if ($image != '') {
	$image_src .= "data-bg-src=".$image;
}
?>
<?php if ($content['title'] != ''): ?>
<h3 class="page-subtitle mb-0"><?php echo $content['title']; ?></h3>
<?php endif; ?>
<div class="service-page-list checklist mb-50" <?php echo $image_src; ?>>
    <ul>
        <?php foreach ($content['data'] as $text): ?>
        <li><i class="far fa-check-circle"></i><?php echo $text['text'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>
