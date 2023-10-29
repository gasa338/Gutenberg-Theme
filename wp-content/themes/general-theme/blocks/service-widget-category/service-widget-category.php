<?php
$title = get_field( 'service-widget-category_title' );
$current_taxonomy = cptui_get_current_taxonomy();

$used_taxonomy = 'kategorija-trening';
switch ($current_taxonomy){
    case 'kategorija-trening';
        $used_taxonomy = 'kategorija-usluge';
        break;
    case 'kategorija-usluge';
	    $used_taxonomy = 'kategorija-trening';
        break;
    default;
        break;

}
$args = array(
	'taxonomy' => $current_taxonomy,
	'orderby' => 'name',
	'order'   => 'ASC'
);
$categories = get_the_terms($post->ID, $current_taxonomy);
if (!empty($categories)):
?>

<div class="widget widget_categories">
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