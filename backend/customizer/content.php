<?php
/**
 * 
 * @package clutterless
 * @since clutterless 1.9.0
 * @license CC BY 3.0
 * 
 */

function clutterless_customizer_setup_content ( $wp_customize ) {

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
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'clutterless_about',
			array(
				'label'    => 'Blog About',
				'section'  => 'clutterless_customizer_setup_content_option',
				'description'  => 'This is the intro paragraph on the home page as well as the information in the dark overlay feature.',           
				'settings' => 'clutterless_about',
				'type'     => 'textarea',        
				'priority' => 101,
			)

		)

	);

}

add_action('customize_register' , 'clutterless_customizer_setup_content');

?>