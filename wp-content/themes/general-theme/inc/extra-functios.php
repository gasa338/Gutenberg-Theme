<?php


/** =============
 *  Add custom button in  text editors
 *  =============
 */
// hooks your functions into the correct filters
function wdm_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
//	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'wdm_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'wdm_register_mce_button' );
//	}
}
add_action('admin_head', 'wdm_add_mce_button');

// register new button in the editor
function wdm_register_mce_button( $buttons ) {
	$buttons[] = 'stroke_mce_button';
	return $buttons;
}


// declare a script for the new button
// the script will insert the shortcode on the click event
function wdm_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['stroke_mce_button'] = get_template_directory_uri() .'/assets/dashboard/custom-tiny.js';
	return $plugin_array;
}

function plugin_mce_css( $mce_css ): string {
	if ( !empty( $mce_css ) )
		$mce_css .= ',';
	$mce_css .= get_stylesheet_directory_uri() .'/assets/dashboard/admin.css';
	return $mce_css;
}
add_filter( 'mce_css', 'plugin_mce_css' );