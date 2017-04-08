<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-moz-exam
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row space-between justify-content-between">
                <div class="main-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php echo get_theme_mod('logo_first', 'aj'); ?>
                        <span><?php echo get_theme_mod('logo_second', 'y'); ?></span>
                    </a>
                </div>

                <nav class=" main-navigation navbar navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- .container -->
	</header><!-- #masthead -->

    <div class="site-banner">
        <?php
        if ( is_home() && ! is_front_page() )  { ?>
            <div class="bunner page-bunner" style="background: url()">

                <h3 class="text-center"><?php single_post_title(); ?></h3>
            </div>
        <?php
            } ?>
    </div><!-- .site-branding -->

	<div id="content" class="site-content">



<!--        --><?php //get_search_form(  ); ?>
