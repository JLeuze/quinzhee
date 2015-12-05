<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quinzhee
 */

?>

	</div><!-- #content -->

	<?php // Check for Sponsor area widgets
	if ( is_active_sidebar( 'sponsors-area' ) ) {
		echo '<div id="sponsors-area" class="widget-area">';
			dynamic_sidebar( 'sponsors-area' );
		echo '</div><!-- #sponsors-area -->';
	}

	// Check for Footer widgets
	if ( is_active_sidebar( 'footer-widgets' ) ) {
		echo '<div id="footer-widgets" class="widget-area">';
			dynamic_sidebar( 'footer-widgets' );
		echo '</div><!-- #footer-widgets -->';
	}

	// Check for Announcement widget
	if ( is_active_sidebar( 'footer-area' ) ) {
		echo '<div id="footer-area" class="widget-area">';
			dynamic_sidebar( 'footer-area' );
		echo '</div><!-- #footer-area -->';
	} ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<i class="fa fa-wordpress fa-3x"></i>

			<p>Proudly powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'quinzhee' ) ); ?>"><?php printf( esc_html__( '%s', 'quinzhee' ), 'WordPress' ); ?></a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
