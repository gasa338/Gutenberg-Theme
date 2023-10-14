<?php
$title = get_field( 'service-widget-category_title' );
$args = array(
	'taxonomy' => 'kategorija-trening',
	'orderby' => 'name',
	'order'   => 'ASC'
);

$categories = get_categories($args);
if (!empty($categories)):
?>

<!--<div class="widget widget_categories">-->
	<h3 class="widget_title"><?php echo $title;?></h3>
	<ul>
        <?php foreach ($categories as $category): ?>
		<li>
			<a href="<?php echo get_term_link($category) ?>"><i class="fa-solid fa-arrow-right"></i><?php echo $category->name; ?></a>
		</li>
        <?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>