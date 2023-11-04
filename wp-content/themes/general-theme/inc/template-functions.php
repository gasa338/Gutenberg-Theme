<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package General_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function general_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'general_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function general_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'general_theme_pingback_header' );

/** Create Theme options  */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

//	acf_add_options_sub_page(array(
//		'page_title'    => 'Theme Header Settings',
//		'menu_title'    => 'Header',
//		'parent_slug'   => 'theme-general-settings',
//	));
//
//	acf_add_options_sub_page(array(
//		'page_title'    => 'Theme Footer Settings',
//		'menu_title'    => 'Footer',
//		'parent_slug'   => 'theme-general-settings',
//	));

}



function general_get_image($image_id): array {
	return [
		'src' => wp_get_attachment_url($image_id),
		'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', TRUE),
		'srcset' => wp_get_attachment_image_srcset($image_id),
	];
}

function general_return_cf7_shortcode(): array {
	$args = [
		'post_type' => 'wpcf7_contact_form',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	];

	$the_query = new WP_Query($args);
	$output = [];
	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$output["[contact-form-7 id='" . get_the_ID() . "' title='" . get_the_title() . "']"] = get_the_title();
		}
	}
	wp_reset_postdata();
	return $output;
}