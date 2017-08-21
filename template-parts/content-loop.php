<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.5.6
 * @license GPL 2.0
 * 
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-date">

		<?php 

			if ( ! is_page() ) {

			echo '<a href="', the_permalink(), '">', the_time(get_option('date_format')), '</a>';
			$categorycount = get_categories('hide_empty=0'); 

				if ( is_single() && count($categorycount) > 1 ) { // show category if user has more than one 
					echo ' - '; echo the_category(', ', 'parents' ); 
				}; 

			};

		?>

	</div><!-- .post-date -->

	<div class="post-title">

		<h2><?php the_title(); ?></h2> 

	</div><!-- .post-title -->

	<div class="post-content">

		<?php the_content();?>

		<!-- Tags display need to be a theme option -->
		<?php if ( is_singular() ) { the_tags('', ' ', ' '); }; ?>

		<?php if ( is_singular() ) {  wp_link_pages(); }; ?>

	</div><!-- .post-content -->

</div><!-- /.post -->