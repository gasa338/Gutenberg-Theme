<?php
$contact = get_field( 'contact_area' );
?>
<div class="contact-area space bg-smoke2">
	<div class="container">
		<div class="row gy-4 justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="contact-info">
					<div class="contact-info_icon">
						<img src="<?php echo $contact['contact_area_phone']['icon']['url']; ?>" alt="<?php echo $contact['contact_area_phone']['icon']['alt']; ?>">
					</div>
					<div class="media-body">
						<span class="contact-info_title"><?php echo $contact['contact_area_phone']['title']; ?></span>
                        <?php $phone = $contact['contact_area_phone']['phone'];  ?>
						<h6 class="contact-info_text">
                            <a href="tel:<?php echo preg_replace('/(\W*)/', '', $phone); ?>"><?php echo $phone; ?></a>
                        </h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info">
					<div class="contact-info_icon">
                        <img src="<?php echo $contact['contact_area_email']['icon']['url']; ?>" alt="<?php echo $contact['contact_area_email']['icon']['alt']; ?>">
					</div>
					<div class="media-body">
						<span class="contact-info_title"><?php echo $contact['contact_area_email']['title']; ?></span>
						<h6 class="contact-info_text">
                            <a href="mailto:<?php echo $contact['contact_area_email']['email']; ?>">
                                <?php echo $contact['contact_area_email']['email']; ?>
                            </a>
                        </h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info">
					<div class="contact-info_icon">
                        <img src="<?php echo $contact['contact_area_location']['icon']['url']; ?>" alt="<?php echo $contact['contact_area_location']['icon']['alt']; ?>">
					</div>
					<div class="media-body">
						<span class="contact-info_title"><?php echo $contact['contact_area_location']['title']; ?></span>
						<h6 class="contact-info_text">
                            <a href="tel:<?php echo preg_replace('/(\W*)/', '', $contact['contact_area_location']['phone']); ?>">
	                            <?php echo $contact['contact_area_location']['text']; ?>
                            </a>
                        </h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
