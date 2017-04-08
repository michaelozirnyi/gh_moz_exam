<?php
/**
 * gh-moz-exam Theme Customizer
 *
 * @package gh-moz-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_moz_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'gh_moz_exam_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_moz_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_moz_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_moz_exam_customize_preview_js' );



// ===  Add  ===
function gh_exam_customize_register( $wp_customize ) {

    $wp_customize->add_section('logo', array(
        'title'       => __('Site Logo', 'gh-moz-exam'),
        'description' => 'Text logo',
        'priority' 	  => 2,
    ));

    $wp_customize->add_setting('logo_first', array(
        'default'    => 'AJ',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'logo_first', array(
        'label'    => __('First', 'gh-moz-exam'),
        'section'  => 'logo',
        'settings' => 'logo_first',
        'type'       => 'text',
    )));

    $wp_customize->add_setting('logo_second', array(
        'default'    => 'y',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'logo_second', array(
        'label'    => __('Second', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'logo',
        'settings' => 'logo_second',
    )));

    $wp_customize->add_section('bg-under-header', array(
        'title'       => __('Backgroung under heager  on pages', 'gh-moz-exam'),
        'description' => 'Text logo',
        'priority' 	  => 2,
    ));
    $wp_customize->add_setting('bg-blog', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bg-blog', array(
        'label'    => __('Bg image', 'gh-moz-exam'),
        'section'  => 'bg-under-header',
        'settings' => 'bg-blog',
    )));


    //
    $wp_customize->add_section('footer', array(
        'title'       => __('Footer', 'gh-moz-exam'),
        'description' => 'Footer',
        'priority' 	  => 15,
    ));


    // Contact section
    $wp_customize->add_setting('description-contact', array(
        'default'    => 'description',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'description-contact', array(
        'label'    => __('Contact Description ', 'gh-moz-exam'),
        'section'  => 'footer',
        'settings' => 'description-contact',
        'type'     => 'textarea',
    )));

    $wp_customize->add_setting('phone', array(
        'default'    => '123456789',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'phone', array(
        'label'    => __('Phone', 'gh-moz-exam'),
        'section'  => 'footer',
        'settings' => 'phone',
        'type'     => 'text',
    )));

    $wp_customize->add_setting('addres', array(
        'default'    => 'addres   cont',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'addres', array(
        'label'    => __('addres', 'gh-moz-exam'),
        'section'  => 'footer',
        'settings' => 'addres',
        'type'     => 'text',
    )));

    $wp_customize->add_setting('bg-contact', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bg-contact', array(
        'label'    => __('Bg image', 'gh-moz-exam'),
        'section'  => 'footer',
        'settings' => 'bg-contact',
    )));



}
add_action('customize_register', 'gh_exam_customize_register');

// ===  Add  custom  ===
function gh_exam_customize_register_home( $wp_customize ) {

    $wp_customize->add_section('home', array(
        'title'       => __('Home Why us', 'gh-moz-exam'),
        'description' => 'Customizer Home page',
        'priority' 	  => 3,
    ));

    $wp_customize->add_setting('why-title', array(
        'default'    => 'We are Professional',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'why-title', array(
        'label'    => __('Title Why us', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home',
        'settings' => 'why-title',
    )));

    $wp_customize->add_setting('why-subtitle', array(
        'default'    => 'Live Support',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'why-subtitle', array(
        'label'    => __('Sub-title Why us', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home',
        'settings' => 'why-subtitle',
    )));

    $wp_customize->add_setting('why-text', array(
        'default'    => 'lorem',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'why-text', array(
        'label'    => __('Text Why us', 'gh-moz-exam'),
        'type'       => 'textarea',
        'section'  => 'home',
        'settings' => 'why-text',
    )));

    $wp_customize->add_setting('main-img', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'main-img', array(
        'label'    => __('MAin image', 'gh-moz-exam'),
        'section'  => 'home',
        'settings' => 'main-img',
    )));

    $wp_customize->add_setting('little-img', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'little-img', array(
        'label'    => __('Little image(book)', 'gh-moz-exam'),
        'section'  => 'home',
        'settings' => 'little-img',
    )));

    $wp_customize->add_setting('phone-img', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'phone-img', array(
        'label'    => __('Phone image', 'gh-moz-exam'),
        'section'  => 'home',
        'settings' => 'phone-img',
    )));

//==========
    $wp_customize->add_section('home-welcome', array(
        'title'       => __('Home welcome', 'gh-moz-exam'),
        'description' => 'Customizer Home page welcome section ',
        'priority' 	  => 4,
    ));

    $wp_customize->add_setting('welcome-img', array(
        'default'    => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'welcome-img', array(
        'label'    => __('image', 'gh-moz-exam'),
        'section'  => 'home-welcome',
        'settings' => 'welcome-img',
    )));

    $wp_customize->add_setting('welcome-title', array(
        'default'    => 'Welcome Here.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'welcome-title', array(
        'label'    => __('Title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-welcome',
        'settings' => 'welcome-title',
    )));

    $wp_customize->add_setting('welcome-subtitle', array(
        'default'    => 'some text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'welcome-subtitle', array(
        'label'    => __('Sub-title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-welcome',
        'settings' => 'welcome-subtitle',
    )));

//============================
    $wp_customize->add_section('home-offering', array(
        'title'       => __('Home Offering', 'gh-moz-exam'),
        'description' => 'Customizer Home page welcome section ',
        'priority' 	  => 4,
    ));

    $wp_customize->add_setting('offering-title', array(
        'default'    => 'We are Offering....',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'offering-title', array(
        'label'    => __('Title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-offering',
        'settings' => 'offering-title',
    )));

    $wp_customize->add_setting('offering-subtitle', array(
        'default'    => 'some text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'offering-subtitle', array(
        'label'    => __('Sub-title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-offering',
        'settings' => 'offering-subtitle',
    )));

    //============================
    $wp_customize->add_section('home-portfolio', array(
        'title'       => __('Home Portfolio', 'gh-moz-exam'),
        'description' => 'Customizer Home page - portfolio section ',
        'priority' 	  => 5,
    ));

    $wp_customize->add_setting('portfolio-title', array(
        'default'    => 'Some of latest Work...',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'portfolio-title', array(
        'label'    => __('Title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-portfolio',
        'settings' => 'portfolio-title',
    )));

    $wp_customize->add_setting('portfolio-subtitle', array(
        'default'    => 'some text asd ',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'portfolio-subtitle', array(
        'label'    => __('Sub-title', 'gh-moz-exam'),
        'type'       => 'text',
        'section'  => 'home-portfolio',
        'settings' => 'portfolio-subtitle',
    )));





}
add_action('customize_register', 'gh_exam_customize_register_home');