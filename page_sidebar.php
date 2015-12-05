<?php
/**
 * Template Name: Sidebar Template
 * 
 * The template for displaying pages with a sidebar.
 *
 * This is a custom page template that for pages with a sidebar.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quinzhee
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>