<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Documentation
#-------------------------------------------------------------------------------

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
        'description' => '<span style="font-style: normal">
        <ul>
        <li><b>Video:</b> <a href="https://onepagelove.com/go/clutterless-setup">Clutterless Setup</a></li>
        <li><b>Example:</b> <a href="https://demo.onepagelove.com/clutterless" target="_blank">Clutterless Demo</a></li>
        <li><b>Help?</b> <a href="/wp-admin/customize.php?autofocus[section]=clutterless_customizer_setup_support_option">Visit Support Panel</a></li>
        </ul>
        </span>',        
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_documentation');

?>