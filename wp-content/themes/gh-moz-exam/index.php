<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-moz-exam
 */

get_header(); ?>

	<div id="primary" class="container">
        <div class="row">
            <main id="main" class="blog-content col-xl-8 col-lg-8 " role="main">
                <div class="row">

                <?php
                if ( have_posts() ) :

//                    if ( is_home() && ! is_front_page() ) : ?>
<!--                        <header>-->
<!--                            <h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--asdasd</h1>-->
<!--                        </header>-->
<!---->
<!--                    --><?php
//                    endif; ?>

                    <ul class="flexes posts-list">

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post(); ?>

                            <li class="col-lx-6 col-lg-6">
                                <div class="post">
                                    <div class="post-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="post-info">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4><?php the_title(); ?></h4>
                                        </a>
                                        <?php the_excerpt(); ?>

                                        <div class="data">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <span class="post-data">
                                                <?php echo get_the_date('d, m, Y');?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
    //                        get_template_part( 'template-parts/content', get_post_format() );

                        endwhile; ?>
                    </ul>

                    <?php

                    echo paginate_links( );
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

                </main><!-- #main -->

                <div class="sidebar ccol-xl-4 col-lg-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php
get_footer();
