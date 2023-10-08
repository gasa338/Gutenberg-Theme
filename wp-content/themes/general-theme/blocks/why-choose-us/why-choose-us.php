<?php
$left_side = get_field('choose_us_left_side');
$right_side = get_field('choose_us_right_side');
?>
<!--==============================
Why-choose-us Area
==============================-->
<div class="wcu-area-1 space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wcu-thumb">
                    <?php $small_image = general_get_image($left_side['big_image']); ?>
                    <img class="img-1" src="<?php echo $small_image['src'] ?>" alt="<?php echo$small_image['alt'] ?>" srcset="<?php echo$small_image['srcset'] ?>">

	                <?php if($left_side['small_image'] != '' ): ?>
                    <div class="img-2 jump">
	                    <?php $big_image = general_get_image($left_side['small_image']); ?>
                        <img src="<?php echo $big_image['src']; ?>" alt="<?php echo $big_image['alt']; ?>">
                    </div>
	                <?php endif; ?>
                    <div class="wcu-grid jump2">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/wcu-icon_1-1.svg' ?>" alt="user avatar with stars">
                        </div>
                        <?php if($left_side['number'] != ''): ?>
                        <div class="details">
                            <h3 class="wcu-grid_year"><span class="counter-number"><?php echo $left_side['number']?></span>+</h3>
                            <span class="wcu-grid_text"><?php echo $left_side['text'] ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wcu-wrap">
                    <div class="title-area mb-50">
                        <span class="sub-title">Why Choose Us?</span>
                        <h2 class="sec-title text-white">Why Choose Us?</h2>
                        <p class="sec-text text-white">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium
                            dolore mque laudantium aperiam eaquecy inventore veritatis</p>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">

                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    What are your gym's operating hours?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                 aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Our standard membership provides access to our gym facilities
                                        during regular operating hours. This option is ideal for individuals who prefer
                                        independent workouts and want to make use of our state</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    What amenities and facilities does your gym offer?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Professionally are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Do you provide personal training services?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Contributors are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

