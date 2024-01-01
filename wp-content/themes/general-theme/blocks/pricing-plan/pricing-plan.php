<?php
$title    = get_field( 'pricin_plan_1_title' );
$subtitle = get_field( 'pricin_plan_1_subtitle' );
$sections = get_field('sections');
$spaces = '';
switch (get_field( 'pricin_plan_1_spaces' )) {
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
    <!--==============================
	Pricing plan Area
	==============================-->

<?php if ( $sections ): ?>
    <div class="pricing-area <?php echo $spaces; ?>">
        <div class="container">
			<?php if ( $title != '' || $subtitle != '' ): ?>
                <div class="title-area text-center">
					<?php if ( $subtitle != '' ): ?>
                        <h3 class="sub-title"><?php echo $subtitle; ?></h3>
					<?php endif; ?>
					<?php if ( $title != '' ): ?>
                        <h2 class="sec-title"><?php echo $title; ?></h2>
					<?php endif; ?>
                </div>
			<?php endif; ?>
            <div class="row gy-4 justify-content-center">

				<?php foreach ($sections as $key=>$section):
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card <?php echo $key == 1 ? 'pricing-card_active': ''; ?>">
                            <div class="pricing-card_bg">
                                <?php $bg_image = general_get_image( $section['bg_image'] ); ?>
                                <img src="<?php echo $bg_image['src']; ?>" alt="<?php echo $bg_image['alt']; ?>">
                            </div>
                            <?php if($section['regular_icon']): ?>
                            <div class="pricing-card_icon">
                                <img src="<?php echo $section['regular_icon']['url']; ?>" alt="<?php echo $section['regular_icon']['alt']; ?>">
                            </div>
                            <?php endif; ?>
                            <?php if ($section['name'] != ''): ?>
                            <div class="pricing-card_title"><a href="<?php echo $section['name']['url']; ?>"> <?php echo $section['name']['title']; ?> </a></div>
	                    	<?php endif; ?>
                            <?php if (!$section['format']): ?>
                            <h4 class="pricing-card_price">
                                <span class="currency"><?php echo $section['curency']; ?></span>
                                <?php echo $section['price']; ?>
                                <span class="duration"><?php echo $section['during']; ?></span></h4>
                            <?php else: ?>
                            <h4 class="pricing-card_price"><?php echo $section['pricing_text']; ?></h4>
                            <?php endif; ?>
                            <p class="pricing-card_content"><?php echo $section['description'] ?></p>
                            <?php if ($section['highlighted']): ?>
                            <div class="checklist">
                                <?php foreach ($section['highlighted'] as $item): ?>
                                <ul>
                                    <li><i class="far fa-check-circle"></i><?php echo $item['item']; ?></li>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                            <a class="btn style2" href="<?php echo $section['link']['url']?>"><?php echo $section['link']['title']?></a>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>