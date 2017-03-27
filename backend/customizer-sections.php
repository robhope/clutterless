<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.0.1
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Add, move and remove Sections
#-------------------------------------------------------------------------------

function clutterless_customizer_sections ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Remove Section: Static Front Page
	#-------------------------------------------------------------------------------

	$wp_customize->remove_section( 'static_front_page' );

	#-------------------------------------------------------------------------------
	# Move Section: Site Identity
	#-------------------------------------------------------------------------------

	$wp_customize->get_section ('title_tagline')->panel = 'clutterless_panel_setup';

	#-------------------------------------------------------------------------------
	# Move Section: Additional CSS
	#-------------------------------------------------------------------------------

	$wp_customize->get_section ('custom_css')->panel = 'clutterless_panel_setup';
	$wp_customize->get_section ('custom_css')->priority = 700;

	#-------------------------------------------------------------------------------
	# Add Section: Content
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_content_option', 
	  array(
	    'title'       => 'Content',
	    'priority'    => 500,
	    'capability'  => 'edit_theme_options',
	    'description' => 'All the wise words...',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Add Section: Appearance
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_appearance_option', 
	  array(
	    'title'       => 'Colors',
	    'priority'    => 600,
	    'capability'  => 'edit_theme_options',
	    'description' => 'All the pretty colors...',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Add Section: Documentation
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_documentation_option', 
	  array(
	    'title'       => 'Documentation',
	    'priority'    => 800,
	    'capability'  => 'edit_theme_options',
	    'description' => '<ul>
	    <li><b>Video:</b> <a href="#"> Setup Walkthough</a> (soon)</li>
	    <li><b>Example:</b> <a href="https://demo.onepagelove.com/clutterless" target="_blank">Clutterless Demo</a></li>
	    <li><b>Help?</b> <a href="/wp-admin/customize.php?autofocus[section]=clutterless_customizer_setup_support_option">Clutterless Pro</a> theme owners receive priority email support and additional features.</li>
	    </ul>',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);


	#-------------------------------------------------------------------------------
	# Add Section: Support & Pro Version
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'clutterless_customizer_setup_support_option', 
	  array(
	    'title'       => 'Support & Pro Version 🎉',
	    'priority'    => 900,
	    'capability'  => 'edit_theme_options',
	    'description' => '<h2>Clutterless Pro</h2>
	    <p>Upgrade to <a href="#" target="_blank">Clutterless Pro</a> to remove credit, unlock more features and get priority email support.</p>
	    <span style="font-style: normal">
	    <b>
	    <ul>
	    <li>- Email Support</li>
	    <li>- Remove Clutterless Credit</li>
	    <li>- More Customization</li>
	    <li>- Multilingual Support</li>
	    <li>- Contribute To Development</li>
	    </ul>
	    <br /> 
	    </b> 
	    <a href="https://onepagelove.com/go/newsletter" style="display: block; text-align: center; width: 90%; background-color: #2eae2e; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 21px;">Get Notified when ready</a><br />(Quick secure payment, 30-day money back guarantee, your upgrade really helps support future updates.)
	    </span>',
	    'panel'       => 'clutterless_panel_setup',
	  )
	);

}

add_action('customize_register' , 'clutterless_customizer_sections');

?>