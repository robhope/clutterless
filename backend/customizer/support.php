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
    'description' => '<h2>Clutterless Pro 🎉</h2>
    <p>Upgrade to <a href="#" target="_blank">Clutterless Pro</a> to remove credit, unlock more features and get prioity email support.</p>
    <span style="font-style: normal">
    <b>
    <ul>
    <li>- Email Support</li>
    <li>- Remove Clutterless Credit</li>
    <li>- More Customization</li>
    <li>- Contribute To Development</li>
    </ul><br /> 
    </b> 
    <a href="#" style="display: block; text-align: center; width: 90%; background-color: #2eae2e; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 21px;">Get Clutterless Pro for $9</a><br />(Quick secure payment, 30-day money back guarantee, your upgrade really helps support future updates.)
    </span>',
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