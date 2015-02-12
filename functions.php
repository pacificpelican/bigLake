<?php
/**
 * Green Lake functions and definitions
 *
 * @package Green Lake
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'greenlake_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greenlake_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Green Lake, use a find and replace
	 * to change 'greenlake' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'greenlake', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'greenlake' ),
		'lower' => __( 'Lower Menu', 'greenlake' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'greenlake_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // greenlake_setup
add_action( 'after_setup_theme', 'greenlake_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function greenlake_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'greenlake' ),
		'id'            => 'sidebar-1',
		'description'   => 'Single Post right responsive',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


register_sidebar(array(
            'name' => __('Home Widget 0', 'greenlake'),
            'description' => __('Top Left front page', 'greenlake'),
            'id' => 'home-widget-0',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));

register_sidebar(array(
            'name' => __('Home Widget 00', 'greenlake'),
            'description' => __('Top Right front page', 'greenlake'),
            'id' => 'home-widget-00',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));

	register_sidebar(array(
            'name' => __('Home Widget 1', 'greenlake'),
            'description' => __('Lower Left front page', 'greenlake'),
            'id' => 'home-widget-1',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));

        register_sidebar(array(
            'name' => __('Home Widget 2', 'greenlake'),
            'description' => __('Lower Middle front page', 'greenlake'),
            'id' => 'home-widget-2',
            'before_title' => '<div id="widget-title-two" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));

        register_sidebar(array(
            'name' => __('Home Widget 3', 'greenlake'),
            'description' => __('Lower Right front page', 'greenlake'),
            'id' => 'home-widget-3',
            'before_title' => '<div id="widget-title-three" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));
}
add_action( 'widgets_init', 'greenlake_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greenlake_scripts() {
	wp_enqueue_style( 'greenlake-style', get_stylesheet_uri() );

	wp_enqueue_script( 'greenlake-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'greenlake-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greenlake_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function theme_name_scripts() {

$themeloc = esc_url( get_template_directory_uri() );

// -----------------------------

	$gl_foundation_css = "$themeloc/layouts/foundation/foundation.css";

	$gl_css = "$themeloc/layouts/lakeballinger/style.css";

	$gl_biglake = "$themeloc/layouts/biglake/biglake.css";

	wp_register_style( "foundationcss", $gl_foundation_css );

	wp_register_style( "glcss", $gl_css );

	wp_register_style( "gl_biglake", $gl_biglake );


	wp_enqueue_style( "foundationcss" );

	wp_enqueue_style( "glcss" );

	wp_enqueue_style( "gl_biglake" );


//  ----------------------------




	$srcmodernizr = "$themeloc/js/modernizr/modernizr.js";

	$srcjqtoo = "$themeloc/js/jquery/jquery-2.1.3.js";

	$srctemplates = "$themeloc/js/foundation/templates.js";

	$srcmarketing = "$themeloc/js/foundation/marketing.js";


	wp_register_script( "lakemodernizr", $srcmodernizr );

	wp_register_script( "portjqry", $srcjqtoo );

	wp_register_script( "portmterial", $srctemplates );

	wp_register_script( "lakemarketing", $srcmarketing );


	wp_enqueue_script( "lakemodernizr" );

	wp_enqueue_script( "portjqry" );

	wp_enqueue_script( "portmterial" );

	wp_enqueue_script( "lakemarketing" );


								}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts_zero() {
$args = array(
	'width'         => 1248,
	'height'        => 250,
	'default-image' => get_stylesheet_directory_uri() . '/images/Seattle-by-DanMcKeown-2014-11-22.jpg',
);
add_theme_support( 'custom-header', $args );
								}
add_action( 'after_setup_theme', 'theme_name_scripts_zero' );

