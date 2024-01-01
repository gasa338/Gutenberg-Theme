<?php
$left_side  = get_field( 'choose_us_left_side' );
$right_side = get_field( 'choose_us_right_side' );
?>
<div class="wcu-area-1 space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wcu-thumb">
					<?php $small_image = general_get_image( $left_side['big_image'] ); ?>
                    <img class="img-1" src="<?php echo $small_image['src'] ?>" alt="<?php echo $small_image['alt'] ?>"
                         srcset="<?php echo $small_image['srcset'] ?>">

					<?php if ( $left_side['small_image'] != '' ): ?>
                        <div class="img-2 jump">
							<?php $big_image = general_get_image( $left_side['small_image'] ); ?>
                            <img src="<?php echo $big_image['src']; ?>" alt="<?php echo $big_image['alt']; ?>">
                        </div>
					<?php endif; ?>
                    <div class="wcu-grid jump2">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/wcu-icon_1-1.svg' ?>"
                                 alt="user avatar with stars">
                        </div>
						<?php if ( $left_side['number'] != '' ): ?>
                            <div class="details">
                                <h3 class="wcu-grid_year"><span
                                            class="counter-number"><?php echo $left_side['number'] ?></span>+</h3>
                                <span class="wcu-grid_text"><?php echo $left_side['text'] ?></span>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wcu-wrap">
					<?php if ( $right_side['small_title'] != '' || $right_side['title'] != '' || $right_side['description'] != '' ): ?>
                        <div class="title-area mb-50">
							<?php if ( $right_side['small_title'] != '' ): ?>
                                <span class="sub-title"><?php echo $right_side['small_title'] ?></span>
							<?php endif; ?>
							<?php if ( $right_side['title'] != '' ): ?>
                                <h2 class="sec-title text-white"><?php echo $right_side['title']; ?></h2>
							<?php endif; ?>
							<?php if ( $right_side['description'] != '' ): ?>
                                <div class="sec-text text-white"><?php echo apply_filters( 'the_content', $right_side['description'] ); ?></div>
							<?php endif; ?>
                        </div>
					<?php endif; ?>
					<?php if ( $right_side['questions'] ): ?>
                        <div class="accordion-area accordion" id="faqAccordion">

							<?php foreach ( $right_side['questions'] as $key => $question ): ?>
								<?php if ( $key == 0 ): ?>
                                    <div class="accordion-card active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="true"
                                                    aria-controls="collapse-1">
                                                <?php echo $question['question']; ?>
                                            </button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                             aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <div class="faq-text"><?php echo apply_filters( 'the_content', $right_side['answear'] ); ?></div>
                                            </div>
                                        </div>
                                    </div>
								<?php else: ?>
                                    <div class="accordion-card ">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="false"
                                                    aria-controls="collapse-2">
	                                            <?php echo $question['question']; ?>
                                            </button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse "
                                             aria-labelledby="collapse-item-2"
                                             data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <div class="faq-text"><?php echo apply_filters( 'the_content', $right_side['answear'] ); ?></div>
                                            </div>
                                        </div>
                                    </div>
								<?php endif; ?>
							<?php endforeach; ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

