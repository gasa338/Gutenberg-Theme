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
