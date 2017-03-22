<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('loop'); ?>

	<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<!-- AJAX navigation -->
	<div class="navigation"></div>

	<!-- Pagination required by WP but not needed -->
	<div class="pagination"><?php previous_posts_link('Previous') ?><?php next_posts_link('Next') ?></div>

<?php get_footer(); ?>