<?php
/**
 * The template for displaying all single posts and pages
 *
 * @package clutterless
 * @since clutterless 2.5.4
 *  @license CCA 3.0
 * 
 */
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/content','loop'); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php get_template_part( 'template-parts/link', 'home' ); ?> 

<?php get_footer(); ?>