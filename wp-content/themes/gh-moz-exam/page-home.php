<?php
/**
 * Template Name: Home page
 */

get_header(); ?>
<div class="page-home">
    <section class="why-us">
        <div id="primary" class="container ">
            <div class="row">
                <div class="col-md-6 images">
                    <div class="main-img">
                        <img src="<?php echo get_theme_mod('main-img', '')?>" alt=""  >
                    </div>
                    <img src="<?php echo get_theme_mod('little-img', '')?>" alt="" class="little">
                    <img src="<?php echo get_theme_mod('phone-img', '')?>" alt="" class="phone">
                </div>
                <div id="main" class="col-md-6 why-info">
                    <h1 class="upper"><?php echo __('Why US?:', 'gh-moz-exam'); ?></h1>
                    <h2><?php echo get_theme_mod('why-title', 'We are Professional')?></h2>
                    <p class="sub-title"><?php echo get_theme_mod('why-subtitle', 'Live Support')?></p>
                    <p><?php echo get_theme_mod('why-text', 'Lorem')?></p>
                </div>
                <div class="col-lg-12 down">
                    <a href="#welcome" class=""><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image">
                    <img src="<?php echo get_theme_mod('welcome-img', '')?>" alt="">
                </div>
                <div class="col-md-7">
                    <h2 class="title">
                        <?php echo get_theme_mod('welcome-title', 'Welcome Here. ')?>
                    </h2>
                    <p class="description">
                        <?php echo get_theme_mod('welcome-subtitle', 'Lorem')?>
                    </p>

                </div>
        </div>
    </section>
    <section class="offering-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 image">
                    <h2 class="title">
                        <?php echo get_theme_mod('offering-title', 'We are Offering.... ')?>
                    </h2>
                    <p class="description">
                        <?php echo get_theme_mod('offering-subtitle', 'Lorem sub title')?>
                    </p>

                    <div class="offers row">
                        <?php query_posts('post_type=offers'); ?>
                        <?php if(have_posts()) : ?>

                            <?php while (have_posts() ) : the_post(); ?>
                                <div class="col-md-4">
                                    <div class="label">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h5 class="offer-title"><?php the_title(); ?></h5>
                                    <div class="offer-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
    </section>
    <section class="portfolio" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 image">
                    <h2 class="title">
                        <?php echo get_theme_mod('portfolio-title', 'Some of latest Work... ')?>
                    </h2>
                    <p class="description">
                        <?php echo get_theme_mod('portfolio-subtitle', 'Lorem sub title')?>
                    </p>

                    <div class="works row">
                        <?php query_posts('post_type=offers'); ?>
                        <?php if(have_posts()) : ?>

<!--                            --><?php //while (have_posts() ) : the_post(); ?>
<!--                                <div class="col-md-4">-->
<!--                                    <div class="label">-->
<!--                                        --><?php //the_post_thumbnail(); ?>
<!--                                    </div>-->
<!--                                    <h5 class="offer-title">--><?php //the_title(); ?><!--</h5>-->
<!--                                    <div class="offer-content">-->
<!--                                        --><?php //the_content(); ?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //endwhile; ?>

                        <?php endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php
get_footer();



