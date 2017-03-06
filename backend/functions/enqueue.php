<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.2
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// Enqueue Scripts and Styles
// -------------------------------------------------------------


add_action('wp_enqueue_scripts', 'clutterless_enqueue_scripts');
function clutterless_enqueue_scripts(){	
	// Clutterless Stylesheet	
	wp_enqueue_style( 'clutterless', get_stylesheet_uri(), array(), clutterless_theme_version );

	// Clutterless Google Fonts
	wp_enqueue_style('google-webfonts-nc', 'https://fonts.googleapis.com/css?family=News+Cycle:400');
	wp_enqueue_style('google-webfonts-mw', 'https://fonts.googleapis.com/css?family=Merriweather:700');
	
	// jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
    wp_enqueue_script('jquery');
	
	// Scripts
	wp_enqueue_script('clutterless-custom-code', get_template_directory_uri().'/frontend/js/custom-code-min.js');
				
}


