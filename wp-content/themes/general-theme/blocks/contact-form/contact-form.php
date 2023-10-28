<?php
$form = get_field( 'contact_form' );
?>

<div class="map-sec2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="container">
    <div class="contact-form-area space-bottom">
        <div class="row g-0">
            <div class="col-lg-4">
				<?php
				$image_id = $form['image'];
				if ( $image_id != '' ):
					$image = general_get_image( $image_id );
					?>
                    <div class="contact-form-thumb">
                        <img src="<?php echo $image['src'] ?>" alt="<?php echo $image['alt'] ?>"
                             srcset="<?php echo $image['srcset'] ?>">
                    </div>
				<?php endif; ?>
            </div>
            <div class="col-lg-8 bg-smoke2">
                <div class="contact-form-wrap">
                    <div class="title-area">
                        <?php if ($form['subtitle'] !='' ): ?>
                            <span class="sub-title"><?php echo $form['subtitle']; ?></span>
                        <?php endif; ?>
                        <h2 class="sec-title"><?php echo $form['title']; ?></h2>
                    </div>

                    <div class="contact-form ajax-contact">
                    <?php echo do_shortcode( '[contact-form-7 id="d52da69" title="Contact form 1"]' ) ?>
                    </div>
                    <!--
                    <div class="contact-form ajax-contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="name" id="name"
                                           placeholder="Your Name">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="email" id="email"
                                           placeholder="Email Address">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="subject" id="subject" class="form-select style-white">
                                <option value="" disabled="" selected="" hidden="">Select Subject</option>
                                <option value="one">Body Building</option>
                                <option value="two">Power Lifting</option>
                                <option value="three">Meditation Class</option>
                                <option value="four">Boxing Class</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Type Your Message" id="contactForm"
                                      class="form-control style-white"></textarea>
                        </div>

                        <div class="form-btn col-12">
                            <button class="btn">Send A Message</button>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
