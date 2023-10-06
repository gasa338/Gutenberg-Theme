<?php
?>
<!--==============================
Counter Area
==============================-->
<!--<div class="counter-area-1" data-bg-src="assets/img/bg/counter-bg1.png">
	<div class="counter-sec-shape-top">
		<img src="assets/img/bg/sec-shape-top.png" alt="img">
	</div>-->
<div class="counter-wrap1 space">
    <div class="container">
        <div class="row gy-40 justify-content-between">
			<?php
			if ( have_rows( 'counter_items' ) ):
				while ( have_rows( 'counter_items' ) ) : the_row();
					$text = get_sub_field( 'text' );
					$number = get_sub_field( 'number' );
					$unit = get_sub_field( 'unit' );
					$icon = general_get_image( get_sub_field( 'icon' ) );
					?>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="counter-card">
                            <div class="counter-card_icon">
                                <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number">
                                    <span class="counter-number"><?php echo $number; ?></span>
                                    <?php echo $unit != ''? $unit: ''; ?>
                                </h2>
                                <p class="counter-card_text"><?php echo $text; ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
        </div>
    </div>
</div>

<!--<div class="counter-sec-shape-bottom">
	<img src="assets/img/bg/sec-shape-bottom.png" alt="img">
</div>
</div>-->
