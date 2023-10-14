<?php
$content = get_field( 'faq_accordion_inner' );
?>
<div class="accordion-area mb-30 accordion" id="faqAccordion">
    <?php foreach ($content as $key=>$value): ?>
	<div class="accordion-card style2 <?php echo $key == 0 ? 'active': '' ?>">
		<div class="accordion-header" id="collapse-item-<?php echo $key ?>">
			<button class="accordion-button <?php echo $key > 0 ? 'collapsed': '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $key ?>" aria-expanded="<?php echo $key > 0 ? 'false': 'true' ?>" aria-controls="collapse-<?php echo $key ?>"> <?php echo $value['question'] ?></button>
		</div>
		<div id="collapse-<?php echo $key ?>" class="accordion-collapse collapse <?php echo $key == 0 ? 'show': '' ?>" aria-labelledby="collapse-item-<?php echo $key ?>" data-bs-parent="#faqAccordion">
			<div class="accordion-body">
				<p class="faq-text"><?php echo $value['answer']; ?></p>
			</div>
		</div>
	</div>
    <?php endforeach ?>
</div>
