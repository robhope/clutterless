<?php
/**
 * The template for displaying all single posts and pages
 *
 * @package clutterless
 * @since clutterless 2.5.2
 * @license GPL 2.0
 * 
 */
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="post">

			<div class="post-date">

				<?php if ( is_single() ) { echo '<a href="', the_permalink(), '">', the_time(get_option('date_format')), '</a> - '; }; // date ?>
				<?php if ( is_single() ) { echo the_category(', ', 'parents' ); }; // categories ?>

			</div><!-- .post-date -->

			<div class="post-title">

				<h2><?php the_title(); ?></h2> 

			</div><!-- .post-title -->

			<div class="post-content">

				<?php the_content();?>

			</div><!-- .post-content -->

		</div><!-- /.post -->

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php get_template_part( 'template-parts/link', 'home' ); ?> 

<?php get_footer(); ?>