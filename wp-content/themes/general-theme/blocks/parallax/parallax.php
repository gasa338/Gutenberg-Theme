<?php
$allowed_blocks = array( 'acf/service-offering' );

$background = get_field('parallax_background');
$top_shape = get_field('parallax_top_shape');
$bottom_shape = get_field('parallax_bottom_shape');
?>

<!--==============================
    Service Area
            ==============================-->
<div class="service-bg-area" data-bg-src="<?php echo $background['url']; ?>">
    <?php if($top_shape != ''): ?>
    <div class="sec-shape-top">
        <img src="<?php echo $top_shape['url'] ?>" alt="<?php echo $top_shape['alt'] ?>">
    </div>
    <?php endif; ?>


    <InnerBlocks />

    <?php if($bottom_shape != ''): ?>
    <div class="sec-shape-bottom">
        <img src="<?php echo $bottom_shape['url'] ?>" alt="<?php echo $bottom_shape['alt']; ?>">
    </div>
    <?php endif; ?>
</div>