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
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'gh-moz-exam' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'gh-moz-exam' ), 'WordPress' ); ?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'gh-moz-exam' ), 'gh-moz-exam', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
<!--		</div><!-- .site-info -->

        <div class="container">
            <div class="row">
                <p class="copywrit">&copy; <?php echo __('Copyright 2012', 'blogname'); ?></p>

                <div class="footer-social">
                    <?php
                    if( get_theme_mod( 'fb_chec' ) == true ) {
                        ?>
                        <a href="<?php echo get_theme_mod( 'fb_link' ); ?>" class="fb"></a>
                        <?php
                    }
                    if( get_theme_mod( 'twit_chec' ) == true ) {
                        ?>
                        <a href="<?php echo get_theme_mod( 'twit_link' ); ?>" class="tw"></a>
                        <?php
                    }
                    if( get_theme_mod( 'in_chec' ) == true ) {
                        ?>
                        <a href="<?php echo get_theme_mod( 'in_link' ); ?>" class="in"></a>
                    <?php } ?>
                </div>

                <div class="foot-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'link_before' => '(before)', 'link_after' => '(after)', ) ); ?>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
