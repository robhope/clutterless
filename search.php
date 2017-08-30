<?php
/**
 * The template for displaying search results pages
 *
 * @package clutterless
 * @since clutterless 2.1.0
 *  @license CCA 3.0
 *
 */
get_header(); global $paged; ?>

	<div id="search-page">

		<div id="search-header">

			<div id="search-term">

				<?php printf( __( '%d %s', 'clutterless' ), $wp_query->found_posts, _n( 'search result', 'search results', 'clutterless', $wp_query->found_posts), get_search_query() ); ?> for <?php echo ' &quot;'.esc_html($s).'&quot;'; ?>

			</div><!-- #search-term -->    

			<div id="search">

				<form id="search-form"  action="<?php print get_site_url(); ?>/" method="get">

					<input type="text" id="search-field" name="s" placeholder="Search..." />

					<input type="submit" id="search-button" value="" />

				</form>

			</div><!-- #search -->

			<div class="clear"></div>

		</div><!-- #search-header -->

		<div id="search-results">

			<?php get_template_part( 'template-parts/content', 'search' ); ?>  

			<div class="clear"></div>    

		</div><!-- #search-results -->

		<?php get_template_part( 'template-parts/link', 'home' ); ?> 

	</div><!-- #search-page -->

<?php get_footer(); ?>