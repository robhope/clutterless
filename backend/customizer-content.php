<?php
/**
 * 
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Customizer: Content 
#-------------------------------------------------------------

function clutterless_customizer_setup_content ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Setting: Logo
	#-------------------------------------------------------------------------------  

	# Option: Logo
	$clutterless_logo = (get_option( 'clutterless_logo' )) ? get_option( 'clutterless_logo' ) : "Default.";
	$wp_customize->add_setting( 'clutterless_logo',
		array(
			'default' => 'Default.',
			'sanitize_callback' => 'clutterless_logo_sanitize',        
		)
	);

	# Sanitize: Logo
	function clutterless_logo_sanitize( $input ) {
		return esc_url_raw( $input );
	}

	# Control: Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clutterless_logo', array(
				'label'    => 'Logo',
				'section'  => 'clutterless_customizer_setup_content_option',
				'description'  => 'This sits in the sidebar next to your site name.',           
				'settings' => 'clutterless_logo',
				'priority' => 101,
			)

		)

	);


	#-------------------------------------------------------------------------------
	# Add Setting: About
	#-------------------------------------------------------------------------------  

	# Option: About
	$clutterless_about = (get_option( 'clutterless_about' )) ? get_option( 'clutterless_about' ) : "Tell your readers why you are blogging and why they should follow you. Some basic code is cool too.";
	$wp_customize->add_setting( 'clutterless_about',
		array(
			'default' => 'Tell your readers why you are blogging and why they should follow you. Some basic code is cool too.',
			'type'    => 'option',
			'sanitize_callback' => 'clutterless_about_sanitize',        
		)
	);

	# Sanitize: About
	function clutterless_about_sanitize( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}

	# Control: About
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clutterless_about', array(
				'label'    => 'About',
				'section'  => 'clutterless_customizer_setup_content_option',
				'description'  => 'This sits in the sidebar under your site name.',           
				'settings' => 'clutterless_about',
				'type'     => 'textarea',        
				'priority' => 102,
			)

		)

	);

}

add_action('customize_register' , 'clutterless_customizer_setup_content');

?>