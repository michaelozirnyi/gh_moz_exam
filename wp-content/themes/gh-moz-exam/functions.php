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


}
add_action( 'widgets_init', 'gh_moz_exam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gh_moz_exam_scripts() {

// register styles
    wp_register_style( 'style', get_template_directory_uri() . '/stylesheet/style.css' );



    wp_register_style( 'font-awesome', get_template_directory_uri() . '/libs/bower_components/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'font-awesome' );

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
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
    wp_enqueue_style( 'et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');



// ===  Add logo  ===
function gh_exam_customize_register( $wp_customize ) {

    $wp_customize->add_section('logo', array(
        'title'       => __('Site Logo', 'gh-moz-exam'),
        'description' => 'Text logo',
        'priority' 	  => 2,
    ));

    $wp_customize->add_setting('logo_first', array(
        'default'    => 'AJ',
        'type'       => 'text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'logo_first', array(
        'label'    => __('First', 'gh-moz-exam'),
        'section'  => 'logo',
        'settings' => 'logo_first',
    )));

    $wp_customize->add_setting('logo_second', array(
        'default'    => 'y',
        'type'       => 'text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'logo_second', array(
        'label'    => __('Second', 'gh-moz-exam'),
        'section'  => 'logo',
        'settings' => 'logo_second',
    )));

            //
    $wp_customize->add_section('footer', array(
        'title'       => __('Footer', 'gh-moz-exam'),
        'description' => 'Footer',
        'priority' 	  => 15,
    ));

    $wp_customize->add_setting('logo_first', array(
        'default'    => 'AJ',
        'type'       => 'text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'logo_first', array(
        'label'    => __('First', 'gh-moz-exam'),
        'section'  => 'logo',
        'settings' => 'logo_first',
    )));

    // Contact section
    $wp_customize->add_setting('phone', array(
        'default'    => '123456789',
        'type'       => 'text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'phone', array(
        'label'    => __('Phone', 'gh-moz-exam'),
        'section'  => 'footer',
        'settings' => 'phone',
    )));
}
add_action('customize_register', 'gh_exam_customize_register');



function post_types_clients(){

    $labels = array (
        'name' => __('Clients'),
        'singular_name' => __('Clients'),
        'add_new' => __('Add New', 'Client'),
        'all_items' => __('All Clients'),
        'add_new_item' => __('Add Client'),
        'edit_item' => __('Edit Client'),
        'new_item' => __('New Client'),
        'view_item' => __('View Client'),
        'search_items' => __('Search Client'),
        'not_found' => __('No Client found'),
        'not_fount_in_trash' => __('No Client')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_ui' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'post-formats',
            'thumbnail',
            'comments'
        ),
        'menu_position' => 4,
        'exclude_form_search' => false
    );
    register_post_type('clients', $args);
}

add_action('init', 'post_types_clients');



//========================================

function post_types_offers(){

    $labels = array (
        'name' => __('Offers'),
        'singular_name' => __('Offers'),
        'add_new' => __('Add New', 'Offer'),
        'all_items' => __('All Offers'),
        'add_new_item' => __('Add Offer'),
        'edit_item' => __('Edit Offer'),
        'new_item' => __('New Offer'),
        'view_item' => __('View Offer'),
        'search_items' => __('Search Offer'),
        'not_found' => __('No Offer found'),
        'not_fount_in_trash' => __('No Offers')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_ui' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'post-formats',
            'thumbnail',
            'comments'
        ),
        'menu_position' => 5,
        'exclude_form_search' => false
    );
    register_post_type('offers', $args);
}

add_action('init', 'post_types_offers');
