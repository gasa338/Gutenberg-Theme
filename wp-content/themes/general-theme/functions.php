<?php
/**
 * General theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package General_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/** helper test functions */
function dd($array): void {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

if ( ! function_exists( 'intellrocket_log' ) ) {
	function intellrocket_log( $entry, $mode = 'a', $file = 'intellrocket_log' ) {
		// Get WordPress uploads directory.
		$upload_dir = wp_upload_dir();

		$upload_dir = $upload_dir['basedir'];
		$upload_dir = dirname(__FILE__);
		// If the entry is array, json_encode.
		if ( is_array( $entry ) ) {
			$entry = json_encode( $entry );
		}
		// Write the log file.
		$file  = $upload_dir . '/' . $file . '.log';
		$file  = fopen( $file, $mode );
		$bytes = fwrite( $file, current_time( 'mysql' ) . "::" . $entry . "\n" );
		fclose( $file );
		return $bytes;
	}
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function general_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on General theme, use a find and replace
		* to change 'general-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'general-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary menu (Top menu)', 'general-theme' ),
			'mobile-menu' => esc_html__( 'Mobile menu', 'general-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'general_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'general_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function general_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'general_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'general_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function general_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'general-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'general-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'general-theme' ),
			'id'            => 'service-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'general-theme' ),
			'before_widget' => '<div id="%1$s" class="widget widget_categories">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'general_theme_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function general_theme_scripts() {
	/** Include CSS file */
	//	Bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), _S_VERSION );
	//    Fontawesome Icon
    wp_enqueue_style( 'fontawesome-icon', get_template_directory_uri() . "/assets/css/fontawesome.min.css", array(), _S_VERSION );
	//    Magnific Popup
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . "/assets/css/magnific-popup.min.css", array(), _S_VERSION );
	//    Slick Slider
    wp_enqueue_style( 'slick-slider', get_template_directory_uri() . "/assets/css/slick.min.css", array(), _S_VERSION );

	wp_enqueue_style( 'general-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'general-theme-style', 'rtl', 'replace' );


	/** dequeue style */
	wp_dequeue_style( 'wp-block-library' );

	/** include JS file */
	//    Slick Slider
    wp_enqueue_script( 'slick-slider', get_template_directory_uri() ."/assets/js/slick.min.js", array('jquery'), _S_VERSION, true );
	//    Bootstrap
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() ."/assets/js/bootstrap.min.js", array(), _S_VERSION, true );
	//    Magnific Popup
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() ."/assets/js/jquery.magnific-popup.min.js", array(), _S_VERSION, true );
	//    Counter Up
    wp_enqueue_script( 'counter-up', get_template_directory_uri() ."/assets/js/jquery.counterup.min.js", array(), _S_VERSION, true );
	//    Range Slider
    wp_enqueue_script( 'range-slider', get_template_directory_uri() ."/assets/js/jquery-ui.min.js", array(), _S_VERSION, true );
	//    Isotope Filter
    wp_enqueue_script( 'images-loaded', get_template_directory_uri() ."/assets/js/imagesloaded.pkgd.min.js", array(), _S_VERSION, true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() ."/assets/js/isotope.pkgd.min.js", array(), _S_VERSION, true );

	//    Main Js File
     wp_enqueue_script( 'main', get_template_directory_uri() ."/assets/js/main.js", array(), _S_VERSION, true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'general_theme_scripts' );


function general_admin_scripts(): void {
	$screen = get_current_screen();
	wp_enqueue_style('admin-css', get_template_directory_uri() . '/assets/dashboard/admin.css');
	wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/dashboard/bootstrap-grid.css');
	if ( $screen->is_block_editor ) {
		wp_enqueue_style('general-css', get_template_directory_uri() . '/assets/dashboard/blocks-dashboard-custom.css');
	}

	wp_enqueue_script('custom-general-own-admin', get_template_directory_uri() . '/assets/dashboard/admin.js', ['wp-element', 'wp-components'], _S_VERSION, true);
}
add_action('admin_enqueue_scripts', 'general_admin_scripts');

//add_action( 'enqueue_block_editor_assets', function(){
//	wp_enqueue_script( 'block-qb-daterange', get_template_directory_uri() . '/assets/dashboard/admin.js');
//});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/extra-functios.php';
require get_template_directory() . '/inc/classes/Top_Main_Navigation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** ============================= theme basic setings ============================== */

/** SVG Support */
function general_help_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'general_help_mime_types' );

function general_help_fix_svg(): void {
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'general_help_fix_svg' );

// register blocks
require get_template_directory() . '/inc/register-blocks.php';

// Adding a new (custom) block category and show that category at the top
add_filter( 'block_categories_all', 'general_block_category', 10, 2);
function general_block_category( $categories, $post ) {

	array_unshift( $categories,
		array(
		'slug'	=> 'custom_theme',
		'title' => 'Custom theme'
		),
		array(
		'slug'	=> 'custom_theme_inner',
		'title' => 'Custom Inner blocks'
		)
	);

	return $categories;
}

