<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quinzhee
 */

if ( ! is_active_sidebar( 'sidebar-default' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-default' ); ?>
</div><!-- #secondary -->