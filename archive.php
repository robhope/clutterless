<?php
/**
 * The template for displaying archives
 *
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 *
 */

get_header(); global $paged; ?>

<div id="search-page">

	<div class="post">

		<div id="search-results">

			<?php $my_100_query = new WP_Query('posts_per_page=100'); ?>

			<?php while ( $my_100_query->have_posts() ) {
			$my_100_query->the_post();
			?>

			<div class="archive-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="archive-date"><?php echo the_time(get_option('date_format')) ?></div><!-- .archive-date -->

				<div class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div><!-- .archive-title -->

			</div><!-- .archive-post -->

			<?php 
			} ?>

			<?php wp_reset_query(); // reset main query ?>

			<div class="clear"></div>    

		</div><!-- #search-results -->

	</div><!-- /.post -->

	<?php get_template_part( 'template-parts/link', 'home' ); ?> 

</div><!-- /#search-page -->   

<?php get_footer(); ?>