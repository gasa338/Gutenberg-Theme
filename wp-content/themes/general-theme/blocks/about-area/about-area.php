<?php
$images = get_field( 'about_images' );
$text = get_field( 'about_text' );
$spaces = '';
switch (get_field( 'about_spaces' )) {
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

<div class="<?php echo $spaces; ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-thumb mb-5 mb-lg-0">
                    <?php $big_image = general_get_image( $images['big_image'] ) ?>
					<img class="about-img-1" src="<?php echo $big_image['src'] ?>" alt="<?php echo $big_image['alt'] ?>" srcset="<?php echo $big_image['srcset'] ?>">
                    <?php if ($images['small_image'] != ''):
                        $small_image = general_get_image( $images['small_image'] ); ?>
					<img class="about-img-2 jump" src="<?php echo $small_image['src'] ?>" alt="<?php echo $small_image['alt'] ?>" srcset="<?php echo $small_image['srcset'] ?>">
                    <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-content-wrap">
					<div class="title-area mb-0">
						<span class="sub-title"><?php echo $text['small_text']; ?></span>
						<h2 class="sec-title"><?php echo $text['title']; ?></h2>
						<p class="sec-text"><?php echo $text['description']; ?></p>
						<div class="about-tab-1">
                            <div class="filter-menu-active">
	                            <?php foreach ($text['section'] as $key=>$section ): ?>
								<button data-filter=".cat<?php echo $key + 1; ?>" class="<?php echo $key == 0 ? 'active': '' ?>" type="button"><?php echo $section['title']; ?></button>
	                            <?php endforeach; ?>
							</div>

							<div class="filter-active-cat1">
								<?php foreach ($text['section'] as $key=>$section ): ?>
								<div class="filter-item cat<?php echo $key+1; ?>">
									<div class="about-tab-icon">
                                        <?php $icon = general_get_image( $section['icon'] ); ?>
										<img src="<?php echo $icon['src'] ?>" alt="<?php echo $icon['alt'] ?>">
									</div>
									<p class="about-tab-text"><?php echo $section['text']; ?></p>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="btn-wrap mt-40">
						<a href="<?php echo $text['link']['url']; ?>" class="btn"><?php echo $text['link']['title']; ?></a>
						<div class="about-info-wrap">
							<div class="icon"><i class="fas fa-phone-volume"></i></div>
							<div class="details">
								<p class="about-info-title"><?php echo $text['help_text']; ?></p>
								<a class="about-info-link"
                                   href="tel:">
                                    <?php echo $text['phone']; ?>
                                </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>