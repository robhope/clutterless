<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.0.1
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Add, move and remove Sections
#-------------------------------------------------------------------------------

function clutterless_customizer_sections ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Remove Section: Static Front Page
	#-------------------------------------------------------------------------------

	$wp_customize->remove_section( 'static_front_page' );

	#-------------------------------------------------------------------------------
	# Move Section: Site Identity
	#-------------------------------------------------------------------------------

	$wp_customize->get_section ('title_tagline')->panel = 'clutterless_panel_setup';

	#-------------------------------------------------------------------------------
	# Move Section: Additional CSS
	#-------------------------------------------------------------------------------

	$wp_customize->get_section ('custom_css')->panel = 'clutterless_panel_setup';
	$wp_customize->get_section ('custom_css')->priority = 700;

	#-------------------------------------------------------------------------------
	# Add Section: Content
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_content_option', 
	  array(
	    'title'       => 'Content',
	    'priority'    => 500,
	    'capability'  => 'edit_theme_options',
	    'description' => 'All the wise words...',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Add Section: Appearance
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_appearance_option', 
	  array(
	    'title'       => 'Colors',
	    'priority'    => 600,
	    'capability'  => 'edit_theme_options',
	    'description' => 'All the pretty colors...',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Add Section: Documentation
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_documentation_option', 
	  array(
	    'title'       => 'Documentation',
	    'priority'    => 800,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);


	#-------------------------------------------------------------------------------
	# Add Section: Support & Pro Version
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_support_option', 
	  array(
	    'title'       => 'Support & Pro Version 🎉',
	    'priority'    => 900,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

}

add_action('customize_register' , 'clutterless_customizer_sections');

?>