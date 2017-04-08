<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-moz-exam
 */

get_header(); ?>


    <div id="primary" class="container">
        <div class="row">
            <main id="main" class="content single-page col-xl-8 col-lg-8 " role="main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', get_post_format() );

                        the_post_navigation( array(
                            'prev_text'          => 'Previous',
                            'next_text'          => 'Next',
                        ));


                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->

            <div class="sidebar ccol-xl-4 col-lg-4">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
    </div><!-- #primary -->

<?php
get_footer();
