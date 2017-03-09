<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.3
 * @license GPL 2.0
 * 
 */

function clutterless_customizer_setup_support ( $wp_customize ) {

#-------------------------------------------------------------------------------
# Add Section: Support & Pro Prompt
#-------------------------------------------------------------------------------

$wp_customize->add_section( 
  'clutterless_customizer_setup_support_option', 
  array(
    'title'       => 'Support & Pro Version',
    'priority'    => 800,
    'capability'  => 'edit_theme_options',
    'description' => '<ul><li><b>Read First:</b> <a href="#">FullSingle Documentation</a></li><li><b>Demo Examples:</b> <a href="#" target="_blank">One</a> | <a href="http://fullsingle.com" target="_blank">Two</a> </li><li><b>Help?</b> <a href="mailto:support@hitldelete.com">support@fullsingle.com</a></li><li class="list-item-pro-theme">(Please note <a href="#" target="_blank">FullSingle Pro</a> theme owners receive priority support.)</li></ul> <span style="font-style: normal"><b><ul><li>- Priority Email Support</li><li>- Remove FullSingle Credit</li><li>- Comments</li><li>- Customization</li></ul><br /> </b> <a href="#" style="display: block; text-align: center; width: 90%; background-color: #2eae2e; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 21px;">Get FullSingle Pro for $15</a><br />(Quick secure payment, 30-day money back guarantee, your upgrade really helps support development)</span>',
    'panel'       => 'clutterless_panel_setup',
  )
);

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
        'priority'  => 801,
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_support');

?>