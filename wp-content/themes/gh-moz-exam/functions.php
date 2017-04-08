<?php
/**
 * gh-moz-exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gh-moz-exam
 */

if ( ! function_exists( 'gh_moz_exam_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gh_moz_exam_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gh-moz-exam, use a find and replace
	 * to change 'gh-moz-exam' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gh-moz-exam', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gh-moz-exam' ),
	) );

    register_nav_menus( array(
        'menu-2' => esc_html__( 'Second menu', 'gh-moz-exam' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gh_moz_exam_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gh_moz_exam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gh_moz_exam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gh_moz_exam_content_width', 640 );
}
add_action( 'after_setup_theme', 'gh_moz_exam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gh_moz_exam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'gh-moz-exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gh-moz-exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'gh-moz-exam' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'gh-moz-exam' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'gh_moz_exam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gh_moz_exam_scripts() {

// register styles
    wp_register_style( 'style', get_template_directory_uri() . '/stylesheet/style.css' );

    //add bootstrap from CDN
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery_js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js');
    wp_enqueue_script( 'tether_js', 'https:///cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js');

    wp_enqueue_style( 'style' );


// default styles and scripts
	wp_enqueue_style( 'gh-moz-exam-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gh-moz-exam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gh-moz-exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gh_moz_exam_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


// ===  Add Google fonts  ===
function load_fonts()
{
    wp_register_style('et-googleFonts',
        'https://fonts.googleapis.com/css?family=Oswald:300,400,700');
    wp_enqueue_style( 'et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');



// ===  Add   ===
