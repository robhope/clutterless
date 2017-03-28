<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.1.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Support
#-------------------------------------------------------------------------------

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
        'description' => '<span style="font-style: normal">
        <h2>Clutterless Pro</h2>
        <p>Upgrade to <a href="https://onepagelove.com/go/clutterless-upgrade" target="_blank">Clutterless Pro</a> to easily remove the One Page Love credit, unlock more features and get priority email support.</p>
        <b>
        <ul>
        <li>- Email Support</li>
        <li>- Option to remove OPL Credit</li>
        <li>- More Customization</li>
        <li>- HTML + PSD versions (soon)</li>
        <li>- Contribute To Development</li>
        </ul>
        <br /> 
        </b> 
        <a href="https://onepagelove.com/go/clutterless-upgrade" style="display: block; text-align: center; width: 90%; background-color: #57c557; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 4px; border-bottom: 2px solid #2eae2e">Upgrade to Pro for only $9</a><br />
        <ul style="color: #666666; font-style: italic; font-size: 12px; line-height: 16px;">
        <li>- Quick secure Stripe or PayPal payment</li>
        <li>- 30-day money back guarantee</li>
        <li>- Really helps support future updates</li>
        </ul>
        </span>',        
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_support');

?>