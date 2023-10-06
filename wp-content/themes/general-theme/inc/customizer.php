<?php
/**
 * General theme Theme Customizer
 *
 * @package General_theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function general_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/** Custom customizer field */
	$wp_customize->add_setting('retina_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'retina_logo', array(
			'label' => __('Retina logo', 'general-theme'),
			'section' => 'title_tagline',
			'settings' => 'retina_logo',
			'priority' => 7,
		)
	));
	$wp_customize->add_setting('white_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'white_logo', array(
			'label' => __('White logo', 'general-theme'),
			'section' => 'title_tagline',
			'settings' => 'white_logo',
			'priority' => 8,
		)
	));
	$wp_customize->add_setting('mobile_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'mobile_logo', array(
			'label' => __('Mobile logo', 'general-theme'),
			'section' => 'title_tagline',
			'settings' => 'mobile_logo',
			'priority' => 9,
		)
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'general_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'general_theme_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'general_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function general_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function general_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function general_theme_customize_preview_js() {
	wp_enqueue_script( 'general-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'general_theme_customize_preview_js' );
