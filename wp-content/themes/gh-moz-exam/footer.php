<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-moz-exam
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

        <div class="clients ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><?php echo __('Featured Clients', 'gh-moz-exam'); ?></h4>
                        <div class="client">
                            <?php query_posts('post_type=clients'); ?>
                            <?php if(have_posts()) : ?>
<!--                                <div class="row">-->
<!--                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--                                        <div class="carousel-inner" role="listbox">-->
<!--                                            <div class="carousel-item active">-->
<!--                                                <img class="d-block img-fluid" src="..." alt="First slide">-->
<!--                                            </div>-->
<!--                                            <div class="carousel-item active">-->
<!--                                                <img class="d-block img-fluid" src="..." alt="Second slide">-->
<!--                                            </div>-->
<!--                                            <div class="carousel-item active">-->
<!--                                                <img class="d-block img-fluid" src="..." alt="Third slide">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <ul>
                                        <?php while (have_posts() ) : the_post(); ?>
                                            <li class="slide-group">
                                                <?php the_post_thumbnail(); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-section darkness" style=" background: url( <?php echo get_theme_mod('bg-contact', '')?>) ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 contact-info">
                        <h3><?php echo __('Contact Us:', 'gh-moz-exam'); ?></h3>
                        <div class="description">
                            <?php echo get_theme_mod('description-contact', 'Some cont  ... ')?>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <?php echo get_theme_mod('phone', '123456789')?>
                        </div>
                        <div class="addres">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span><?php echo get_theme_mod('addres', '123 Office, Street')?></span>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10375.48860485298!2d32.075212799999996!3d49.449133350000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1491642735446" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 form">

                    </div>
                </div>
            </div>
        </div>

            <div class="logo-footer-section">
            <div class="container">
                <div class="foot-logo main-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php echo get_theme_mod('logo_first', 'aj'); ?>
                        <span><?php echo get_theme_mod('logo_second', 'y'); ?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="copywriting-footer-section">
            <div class="container">
                <p class="copywrit">&copy;<?php echo __('2015  All Rights Reserved.', 'gh-moz-exam'); ?></p>
            </div>
        </div>
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!---->
<!--                <div class="footer-social">-->
<!--                    --><?php
//                    if( get_theme_mod( 'fb_chec' ) == true ) {
//                        ?>
<!--                        <a href="--><?php //echo get_theme_mod( 'fb_link' ); ?><!--" class="fb"></a>-->
<!--                        --><?php
//                    }
//                    if( get_theme_mod( 'twit_chec' ) == true ) {
//                        ?>
<!--                        <a href="--><?php //echo get_theme_mod( 'twit_link' ); ?><!--" class="tw"></a>-->
<!--                        --><?php
//                    }
//                    if( get_theme_mod( 'in_chec' ) == true ) {
//                        ?>
<!--                        <a href="--><?php //echo get_theme_mod( 'in_link' ); ?><!--" class="in"></a>-->
<!--                    --><?php //} ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
