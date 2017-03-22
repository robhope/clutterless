<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.3
 * @license GPL 2.0
 * 
 */

function clutterless_customizer_setup_documentation ( $wp_customize ) {

#-------------------------------------------------------------------------------
# Add Section: Documentation
#-------------------------------------------------------------------------------

$wp_customize->add_section( 
  'clutterless_customizer_setup_documentation_option', 
  array(
    'title'       => 'Documentation',
    'priority'    => 700,
    'capability'  => 'edit_theme_options',
    'description' => '<ul>
    <li><b>Read First:</b> <a href="#">Clutterless Documentation</a></li>
    <li><b>Example:</b> <a href="#" target="_blank">Clutterless Demo</a></li>
    <li><b>Help?</b> <a href="/wp-admin/customize.php?autofocus[section]=clutterless_customizer_setup_support_option">Clutterless Pro</a> theme owners receive priority email support and additional features 🎉</li>
    </ul>',
    'panel'       => 'clutterless_panel_setup',
  )
);

	#-------------------------------------------------------------------------------
	# Add Settings: Documentation
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'clutterless_customizer_setup_documentation_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'clutterless_customizer_setup_documentation_setting_sanitize',        
    ));

    function clutterless_customizer_setup_ocumentation_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'clutterless_customizer_setup_documentation_setting', array(
        'section'   => 'clutterless_customizer_setup_documentation_option',
        'label'     => ' ',
        'priority'  => 701,
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_documentation');

?>