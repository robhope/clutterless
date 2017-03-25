<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.9.0
 * @license CC BY 3.0
 * 
 */

function clutterless_customizer_setup_support ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Settings: Support & Pro Prompt
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'clutterless_customizer_setup_support_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'clutterless_customizer_setup_support_setting_sanitize',        
    ));

    function clutterless_customizer_setup_support_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'clutterless_customizer_setup_support_setting', array(
        'section'   => 'clutterless_customizer_setup_support_option',
        'label'     => ' ',
        'priority'  => 901,
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_support');

?>