<?php
$allowed_blocks = array( 'acf/service-offering' );

$background = get_field('parallax_background');
$top_shape = get_field('parallax_top_shape');
$bottom_shape = get_field('parallax_bottom_shape');

dd($background);
dd($top_shape);
dd($bottom_shape);
?>

<!--==============================
    Service Area
            ==============================-->
<div class="service-bg-area" data-bg-src="<?php echo general_get_image($background)['url']; ?>">
    <?php if($top_shape != ''): ?>
    <div class="sec-shape-top">
        <?php $top_shape_image = general_get_image($top_shape) ?>
        <img src="<?php echo $top_shape_image['url'] ?>" alt="<?php echo $top_shape_image['alt'] ?>">
    </div>
    <?php endif; ?>


    <InnerBlocks />

    <?php if($bottom_shape != ''): ?>
    <div class="sec-shape-bottom">
        <?php $bottom_shape_image = general_get_image($bottom_shape); ?>
        <img src="<?php echo $bottom_shape_image['url'] ?>" alt="<?php echo $bottom_shape_image['alt']; ?>">
    </div>
    <?php endif; ?>
</div>