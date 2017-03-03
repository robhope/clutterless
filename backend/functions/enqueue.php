<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// Enqueue Scripts and Styles
// -------------------------------------------------------------

add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}
add_action('wp_enqueue_scripts', 'clutterless_enqueue_scripts');
function clutterless_enqueue_scripts(){	
	// Clutterless Stylesheet	
	wp_enqueue_style( 'clutterless', get_stylesheet_uri(), array(), clutterless_theme_version );

	// Clutterless Google Fonts
	wp_enqueue_style('google-webfonts-nc', 'http://fonts.googleapis.com/css?family=News+Cycle:400');
	wp_enqueue_style('google-webfonts-mw', 'http://fonts.googleapis.com/css?family=Merriweather:700');
	
	// jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
    wp_enqueue_script('jquery');
	
	// Scripts
	wp_enqueue_script('clutterless-custom-code', get_template_directory_uri().'/js/custom-code-min.js');
				
}

// Customizer Styles
add_action('wp_head', 'clutterless_customizer_styles');
function clutterless_customizer_styles(){
	$color = get_theme_mod('clutterless_options_theme_customizer');
	$color = wp_parse_args($color, array(
		'clutterless_body_background' => '#F8F8F8',
		'clutterless_sidebar_color' => '#18BCEB',
		'clutterless_sidebar_link_color' => '#FFFFFF',
		'clutterless_content_text_shadow' => '#FFFFFF',
		'clutterless_content_post_title' => '#333333',
		'clutterless_content_post_headings' => '#444444',
		'clutterless_content_post_date' => '#999999',
		'clutterless_content_post_links' => '#444444',
		'clutterless_content_post_links_hover' => '#18BCEB',		
	));
	
	?>
	<!-- Embedded WP Customizer Code Start-->
	<style>
		body
		{background: <?php echo $color['clutterless_body_background']; ?>;}
		#sidebar-name .sidebar-name-wrap,#sidebar-inner
		{background: <?php echo $color['clutterless_sidebar_color']; ?> !important;}
		#sidebar,#sidebar a,#sidebar-inner #search #search-form #search-field
		{color:<?php echo $color['clutterless_sidebar_link_color']; ?>;}
		#content
		{color: <?php echo $color['clutterless_content_text_color']; ?>; text-shadow: 0 1px 0 <?php echo $color['clutterless_content_text_shadow']; ?>;}
		#content .post-title h2, #content .post-title h2 a
		{color: <?php echo $color['clutterless_content_post_title']; ?>;}
		#content  .post-content h2,#content  .post-content h3,#content  .post-content h4
		{color: <?php echo $color['clutterless_content_post_headings']; ?>;}
		#content  .post-date, #content  .post-date a, #return a
		{color: <?php echo $color['clutterless_content_post_date']; ?>;}
		#content .post-content a
		{color: <?php echo $color['clutterless_content_post_links']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links']; ?>;}
		#content .post-content a:hover
		{color: <?php echo $color['clutterless_content_post_links_hover']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links_hover']; ?>;}
	</style>
	<!-- Embedded WP Customizer Code End -->
	<?php
}
