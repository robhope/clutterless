<?php
/**
 * 
 * @package fullsingle
 * @since fullsingle 0.0.1
 * @license GPL 2.0
 * 
 */

function fullsingle_customizer_support ( $wp_customize ) {

#-------------------------------------------------------------------------------
# Add Section: Support & Upgrade Prompt
#-------------------------------------------------------------------------------

$wp_customize->add_section( 
  'fullsingle_blog_support_options', 
  array(
    'title'       => 'd) Support & Upgrade',
    'priority'    => 400,
    'capability'  => 'edit_theme_options',
    'description' => '<ul><li><b>Read First:</b> <a href="#">FullSingle Documentation</a></li><li><b>Demo Examples:</b> <a href="#" target="_blank">One</a> | <a href="http://fullsingle.com" target="_blank">Two</a> </li><li><b>Help?</b> <a href="mailto:support@hitldelete.com">support@fullsingle.com</a></li><li class="list-item-pro-theme">(Please note <a href="#" target="_blank">FullSingle Pro</a> theme owners receive priority support.)</li></ul> <span style="font-style: normal"><b><ul><li>- Priority Email Support</li><li>- Remove FullSingle Credit</li><li>- Comments</li><li>- Customization</li></ul><br /> </b> <a href="#" style="display: block; text-align: center; width: 90%; background-color: #2eae2e; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 21px;">Get FullSingle Pro for $15</a><br />(Quick secure payment, 30-day money back guarantee, your upgrade really helps support development)</span>',
    'panel'       => 'fullsingle_blog',
  )
);

  #-------------------------------------------------------------------------------
  # Add Settings: Support & Upgrade Prompt
  #-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'fullsingle_options_theme_customizer_support_links2', array(
      'default'    =>  ' ',
      'transport'  =>  'postMessage',
      'sanitize_callback' => 'fullsingle_options_theme_customizer_support_links2_sanitize',        
    ));

      function fullsingle_options_theme_customizer_support_links2_sanitize( $input ) {
          return striptags($input ) ;
      }

      $wp_customize->add_control( 'fullsingle_options_theme_customizer_support_links2', array(
        'section'   => 'fullsingle_blog_support_options',
        'label'     => ' ',
        'priority'  => 401,
      ));        

}

add_action('customize_register' , 'fullsingle_customizer_support');

?>