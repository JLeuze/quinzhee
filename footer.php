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

		</div><!-- .wrap -->
	</div><!-- #content -->

	<?php // Check for Sponsor area widgets
	if ( is_active_sidebar( 'sponsors-area' ) ) {
		echo '<div id="sponsors-area" class="sponsors-widget-area widget-area">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'sponsors-area' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #sponsors-area -->';
	}

	// Check for Footer widgets
	if ( is_active_sidebar( 'footer-widgets' ) ) {
		// Count the number of widgets
		$quinzhee_sidebars_widgets     = get_option( 'sidebars_widgets' );
		$quinzhee_footer_widgets_count = count( $quinzhee_sidebars_widgets['cta-area'] );
		echo '<div id="footer-widgets" class="footer-multi-widgets-area widget-area widget-area-' . $quinzhee_footer_widgets_count . '-column">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'footer-widgets' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #footer-widgets -->';
	}

	// Check for Announcement widget
	if ( is_active_sidebar( 'footer-area' ) ) {
		echo '<div id="footer-area" class="footer-single-widget-area widget-area">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'footer-area' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #footer-area -->';
	} ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<div class="site-info">
				<i class="fa fa-wordpress fa-3x"></i>

				<p>Proudly powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'quinzhee' ) ); ?>"><?php printf( esc_html__( '%s', 'quinzhee' ), 'WordPress' ); ?></a></p>
			</div><!-- .site-info -->
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
