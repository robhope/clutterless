<?php
/**
 * 
 * @package clutterless
 * @since clutterless 2.6
 *  @license CCA 3.0
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
	$clutterless_logo = (get_option( 'clutterless_logo' )) ? get_option( 'clutterless_logo' ) : 
	"Default.";

	$wp_customize->add_setting( 'clutterless_logo',
		array(
			'default' => '',
			'sanitize_callback' => 'clutterless_logo_sanitize',        
		)
	);

	# Sanitize: Logo
	function clutterless_logo_sanitize( $input ) {
		return esc_url_raw( $input );
	}

	# Control: Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clutterless_logo', array(
				'label'    => 'Sidebar Logo',
				'section'  => 'clutterless_customizer_setup_content_option',
				'description'  => 'This sits in the sidebar next to your site name. Recommended size is 200px x 200px for Retina optimization.',           
				'settings' => 'clutterless_logo',
				'priority' => 101,
			)

		)

	);


	#-------------------------------------------------------------------------------
	# Add Setting: About
	#-------------------------------------------------------------------------------  

	# Option: About
	$clutterless_about = (get_option( 'clutterless_about' )) ? get_option( 'clutterless_about' ) : 
	"Tell your readers why you are blogging and why they should follow you. Some basic code is cool too.";

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
				'label'    => 'Sidebar About',
				'section'  => 'clutterless_customizer_setup_content_option',
				'description'  => 'This sits in the sidebar under your site name.',           
				'settings' => 'clutterless_about',
				'type'     => 'textarea',        
				'priority' => 102,
			)

		)

	);

    #-------------------------------------------------------------------------------
    # Add Setting: Credit - now included in free version, promoting license
    #-------------------------------------------------------------------------------  

    # Option: Credit Pro
    $clutterless_credit = (get_option( 'clutterless_credit_pro_free' )) ? get_option( 'clutterless_credit_pro_free' ) : 
    "©2017 All Rights Reserved.";
    $wp_customize->add_setting( 'clutterless_credit_pro_free',
        array(
            'default' => '<a href="https://onepagelove.com/clutterless">Clutterless WordPress Theme</a> <span class="by">by</span> <a href="https://onepagelove.com">One Page Love</a>',
            'type'    => 'option',
            'sanitize_callback' => 'clutterless_credit_pro_free_sanitize',        
        )
    );

    # Sanitize: Credit Pro
    function clutterless_credit_pro_free_sanitize( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }

    # Control: Credit Pro
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clutterless_credit_pro_free', array(
                'label'    => 'Sidebar Credit',
                'section'  => 'clutterless_customizer_setup_content_option',
                'description'  => 'This sits at the bottom of the sidebar. You need to edit and save the text below at least once to activate the setting.',           
                'settings' => 'clutterless_credit_pro_free',
                'type'     => 'textarea',        
                'priority' => 104,
            )

        )

    );      

    #-------------------------------------------------------------------------------
    # Add Setting: License Notice
    #-------------------------------------------------------------------------------  

    # Option: License
    $clutterless_credit = (get_option( 'clutterless_license' )) ? get_option( 'clutterless_license' ) : 
    "©2017 All Rights Reserved.";
    $wp_customize->add_setting( 'clutterless_license',
        array(
            'default' => '<a href="https://onepagelove.com/clutterless">Clutterless WordPress Theme</a> <span class="by">by</span> <a href="https://onepagelove.com">One Page Love</a>',
            'type'    => 'option',
            'sanitize_callback' => 'clutterless_license_sanitize',        
        )
    );

    # Sanitize: License
    function clutterless_license_sanitize( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }

    # Control: License
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clutterless_license', array(
                'label'    => '',
                'section'  => 'clutterless_customizer_setup_content_option',
                'description'  => '<span style="font-style: normal">
		        <h2>Want to remove the above credit to One Page Love?</h2>
		        <p>This WordPress theme holds a <a href="https://creativecommons.org/licenses/by/3.0/">CCA 3.0 License</a> - meaning you can do whatever you want (even commercially) but you need to keep the sidebar credit linking back to One Page Love. To remove the credit simply buy a license on the template download page:</p>
		        </b> 
		        <a href="https://onepagelove.com/clutterless" style="display: block; text-align: center; width: 90%; background-color: #57c557; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 4px; border-bottom: 2px solid #2eae2e">Buy a license for $5</a><br />
		        <ul style="color: #666666; font-style: italic; font-size: 12px; line-height: 16px;">
		        <li>- Quick secure Stripe or PayPal payment</li>
		        <li>- Really helps support future updates</li>
		        </ul>
		        </span>',           
                'settings' => 'clutterless_license',
                'type'     => 'textarea',        
                'priority' => 105,
            )

        )

    );  

}

add_action('customize_register' , 'clutterless_customizer_setup_content');

?>