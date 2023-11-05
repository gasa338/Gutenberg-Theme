<?php
$spaces = '';
switch (get_field( 'service_provide_2_spaces' )) {
	case 'space':
		$spaces = 'space';
		break;
	case 'space-top':
		$spaces = 'space-top';
		break;
	case 'space-bottom':
		$spaces = 'space-bottom';
		break;
	default:
		break;
}
?>
<?php
if ( have_rows( 'service_provide_2_services' ) ): ?>
<div class="service-area-2 <?php echo $spaces; ?> overflow-hidden">
    <div class="container">
        <div class="row gy-4">
            <?php while ( have_rows( 'service_provide_2_services' ) ) : the_row(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                    </div>
                    <div class="service-card_content">
                        <?php $title = get_sub_field( 'title' ); ?>
                        <h4 class="service-card_title h5"><a href="<?php echo $title['url'] ?>"><?php echo $title['title'];?></a></h4>
                        <p class="service-card_text"><?php echo get_sub_field('descripton'); ?></p>
                        <?php $link = get_sub_field( 'button' );  ?>
                        <?php if (isset($link['url'])): ?>
                        <a href="<?php echo $link['url'] ?>" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> <?php echo $link['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>