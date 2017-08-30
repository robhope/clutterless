<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.6
 *  @license CCA 3.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Documentation
#-------------------------------------------------------------------------------

function clutterless_customizer_setup_docs ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Settings: Documentation
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'clutterless_customizer_setup_docs_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'clutterless_customizer_setup_docs_setting_sanitize',        
    ));

    function clutterless_customizer_setup_docs_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'clutterless_customizer_setup_docs_setting', array(
        'section'   => 'clutterless_customizer_setup_docs_option',
        'label'     => ' ',
        'priority'  => 801,
        'description' => '<span style="font-style: normal">
        <ul>
        <li><b>Video:</b> <a href="https://onepagelove.com/go/clutterless-setup">Clutterless Setup</a></li>
        <li><b>Example:</b> <a href="https://demo.onepagelove.com/clutterless" target="_blank">Clutterless Demo</a></li>
        <li><b>PSD:</b> <a href="https://onepagelove.com/download/clutterless-psd/">Download</a></li>
        <li><b>Child Theme:</b> <a href="https://onepagelove.com/download/clutterless-child-theme/">Download</a></li>        
        <li><b>Help?</b> <a href="https://twitter.com/robhope">@robhope</a></li>
        </ul>
        <br /> 
        <h2>Want to remove the sidebar credit to One Page Love?</h2>
        <p>This WordPress theme holds a <a href="https://creativecommons.org/licenses/by/3.0/">CCA 3.0 License</a> - meaning you can do whatever you want (even commercially) but you need to keep the sidebar credit linking back to One Page Love. To remove the credit simply buy a license on the template download page:</p>
        </b> 
        <a href="https://onepagelove.com/clutterless" style="display: block; text-align: center; width: 90%; background-color: #57c557; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 4px; border-bottom: 2px solid #2eae2e">Buy a license for $5</a><br />
        <ul style="color: #666666; font-style: italic; font-size: 12px; line-height: 16px;">
        <li>- Quick secure Stripe or PayPal payment</li>
        <li>- Really helps support future updates</li>
        </ul>
        </span>',        
    ));        

}

add_action('customize_register' , 'clutterless_customizer_setup_docs');

?>