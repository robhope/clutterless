<?php
/**
 * The template for displaying archives
 *
 * @package clutterless
 * @since clutterless 2.5.2
 * @license GPL 2.0
 *
 */

get_header(); global $paged; ?>

<div id="search-page">

	<div id="search-header">

		<div id="search-term" class="archive-term">

			<?php 

				if (function_exists('is_tag') && is_tag()) { // tags

					echo $wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts);
					echo ' posts tagged with ';
					echo single_tag_title();

				}

				else { // category

					// echo 'You are browsing the ';
					echo single_cat_title();
					echo ' category';	

				};

			?>

		</div><!-- #search-term -->    

		<div class="clear"></div>

	</div><!-- #search-header -->

	<div id="search-results">

		<?php get_template_part( 'template-parts/content', 'archive' ); ?>  

		<div class="clear"></div>     

	</div><!-- #search-results -->

	<?php get_template_part( 'template-parts/link', 'home' ); ?> 

</div><!-- /#search-page -->   

<?php get_footer(); ?>