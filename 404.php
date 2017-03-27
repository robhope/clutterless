<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 *
 */
get_header(); ?>

	<div class="post">

		<div class="post-date">

			Oops

		</div><!-- .post-date -->

		<div class="post-title">

			<h2>404 Error!</h2> 

		</div><!-- .post-title -->

		<div class="post-content">

			<p>The page you are looking for does not exist.</p>

		</div><!-- .post-content -->

	</div><!-- /.post -->

	<?php get_template_part( 'template-parts/link', 'home' ); ?> 

<?php get_footer(); ?>