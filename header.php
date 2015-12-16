<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quinzhee
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'quinzhee' ); ?></a>

	<?php // Check for header background
	if( get_theme_mod( 'quinzhee_header_background' ) ) {
		$quinzhee_header_class = 'site-header-background';
	} else {
		$quinzhee_header_class = 'site-header-no-background';
	} ?>

	<header id="masthead" class="site-header <?php echo $quinzhee_header_class; ?>" role="banner">
		<div class="wrap">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php  // Check for Site Logo
				if ( get_theme_mod( 'quinzhee_site_logo_upload' ) ) {
					echo '<a class="site-logo" href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( get_theme_mod( 'quinzhee_site_logo_upload' ) ) . '" alt="' . get_bloginfo( 'name' ) . '" /></a>';
				} ?>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'quinzhee' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<?php // Check for Featured Section widget
	if ( is_active_sidebar( 'featured-area' ) ) {
		echo '<div id="featured-area" class="featured-widget-area widget-area">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'featured-area' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #featured-area -->';
	}

	// Check for Call To Action widgets
	if ( is_active_sidebar( 'cta-area' ) ) {
		// Count the number of widgets
		$quinzhee_sidebars_widgets       = get_option( 'sidebars_widgets' );
		$quinzhee_cta_area_widgets_count = count( $quinzhee_sidebars_widgets['cta-area'] );
		echo '<div id="cta-area" class="cta-widget-area widget-area widget-area-' . $quinzhee_cta_area_widgets_count . '-column">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'cta-area' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #cta-area -->';
	}

	// Check for Announcement widget
	if ( is_active_sidebar( 'announcement-area' ) ) {
		echo '<div id="announcement-area" class="announcement-widget-area widget-area">';
			echo '<div class="wrap">';
				dynamic_sidebar( 'announcement-area' );
			echo '</div><!-- .wrap -->';
		echo '</div><!-- #announcement-area -->';
	} ?>

	<div id="content" class="site-content">
		<div class="wrap">