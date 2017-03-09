<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.3
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
#-------------------------------------------------------------------------------
# Register the Clutterless Panel within the Theme Customizer
#-------------------------------------------------------------------------------
#-------------------------------------------------------------------------------

function clutterless_customizer_panels ( $wp_customize ) {

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