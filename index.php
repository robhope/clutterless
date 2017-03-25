<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package clutterless
 * @since clutterless 2.0.0
 * @license CC BY 3.0
 *
 */
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('template-parts/content','loop'); ?>

	<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<!-- AJAX navigation -->
	<div class="navigation"></div>

	<!-- Pagination required by WP but not needed -->
	<div class="pagination"><?php previous_posts_link('Previous') ?><?php next_posts_link('Next') ?></div>

<?php get_footer(); ?>