<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Add and remove Panels 
#-------------------------------------------------------------------------------

function clutterless_customizer_panels ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Panel: Clutterless Setup
	#-------------------------------------------------------------------------------

	$wp_customize->add_panel( 'clutterless_panel_setup', array(
		'priority'       => 800,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'Clutterless Setup',
		'description'    => 'Clutterless Setup',
	));  

}

add_action('customize_register' , 'clutterless_customizer_panels');


?>