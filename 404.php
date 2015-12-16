<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Quinzhee
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<?php // Check for 404 widgets
				if ( is_active_sidebar( '404-area' ) ) {
					echo '<div id="area-404" class="area-widget-404 widget-area">';
						echo '<div class="wrap">';
							dynamic_sidebar( '404-area' );
						echo '</div><!-- .wrap -->';
					echo '</div><!-- #area-404 -->';
				} else {
					?><header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'quinzhee' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'quinzhee' ); ?></p>
					</div><!-- .page-content --><?php
				} ?>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>