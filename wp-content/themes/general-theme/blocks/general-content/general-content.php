<?php
$content = get_field( 'general_detail_content' );
$spaces = '';
switch ( get_field( 'general_detail_content_spaces' ) ) {
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
<div class="service-details-area <?php echo $spaces; ?> overflow-hidden"> <!-- eliminate class space-extra-bottom -->
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <?php echo apply_filters( 'the_content', $content ); ?>
            </div>
        </div>
    </div>
</div>
