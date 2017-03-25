<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.8
 * @license CC BY 3.0
 * 
 */

function clutterless_customizer_setup_documentation ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Settings: Documentation
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'clutterless_customizer_setup_documentation_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'clutterless_customizer_setup_documentation_setting_sanitize',        
    ));

    function clutterless_customizer_setup_documentation_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'clutterless_customizer_setup_documentation_setting', array(
        'section'   => 'clutterless_customizer_setup_documentation_option',
        'label'     => ' ',
        'priority'  => 801,
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_documentation');

?>