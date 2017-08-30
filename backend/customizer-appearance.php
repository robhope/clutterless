<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.5.7
 *  @license CCA 3.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Appearance
#-------------------------------------------------------------------------------

function clutterless_customizer_setup_appearance ( $wp_customize ) {

    #-------------------------------------------------------------------------------
    # Add Setting: Body Background Color  
    #-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_body_background]', array(
        'default' => '#F8F8F8',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_body_background', array(
        'label'    => __( 'Body Background', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_body_background]',
        'priority' => 601,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Sidebar Background Color 
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_sidebar_color]', array(
        'default' => '#FF6666',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_sidebar_color', array(
        'label'    => __( 'Sidebar Color', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_sidebar_color]',
        'priority' => 602,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Sidebar Link Color  
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_sidebar_link_color]', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_sidebar_link_color', array(
        'label'    => __( 'Sidebar Text Color', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_sidebar_link_color]',
        'priority' => 603,
        ) ) );
    
    #-------------------------------------------------------------------------------
    # Add Setting: Content Text Color
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_text_color]', array(
        'default' => '#666666',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_text_color', array(
        'label'    => __( 'Content Text Color', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_text_color]',
        'priority' => 604,
    ) ) );
   
    #-------------------------------------------------------------------------------
    # Add Setting: Content Post Title
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_title]', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_title', array(
        'label'    => __( 'Content Post Title', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_title]',
        'priority' => 606,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Content Post Headings
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_headings]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_headings', array(
        'label'    => __( 'Content Post Headings', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_headings]',
        'priority' => 607,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Content Post Date
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_date]', array(
        'default' => '#999999',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_date', array(
        'label'    => __( 'Content Post Date & Back Home Link', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_date]',
        'priority' => 608,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Content Post Links
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_links]', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_links', array(
        'label'    => __( 'Content Post Links', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_links]',
        'priority' => 609,
    ) ) );

    #-------------------------------------------------------------------------------
    # Add Setting: Content Post Links Hover  
    #-------------------------------------------------------------------------------  

    $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_links_hover]', array(
        'default' => '#FF6666',
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_links_hover', array(
        'label'    => __( 'Content Post Links Hover', 'clutterless' ),
        'section'  => 'clutterless_customizer_setup_appearance_option',
        'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_links_hover]',
        'priority' => 610,
    ) ) );  

}

add_action('customize_register' , 'clutterless_customizer_setup_appearance');


#-------------------------------------------------------------------------------
# Add styles to site head
#-------------------------------------------------------------------------------  

function clutterless_customizer_styles(){

    $color = get_theme_mod('clutterless_options_theme_customizer');
    $color = wp_parse_args($color, array(
        'clutterless_body_background' => '#F8F8F8',
        'clutterless_sidebar_color' => '#FF6666',
        'clutterless_sidebar_link_color' => '#FFFFFF',
        'clutterless_content_text_color' => '#666666',
        'clutterless_content_post_title' => '#333333',
        'clutterless_content_post_headings' => '#444444',
        'clutterless_content_post_date' => '#999999',
        'clutterless_content_post_links' => '#444444',
        'clutterless_content_post_links_hover' => '#FF6666',        
    ));
    
    ?>
    <!-- Customizer Styles Start-->
    <style>
        body
        {background: <?php echo $color['clutterless_body_background']; ?>;}
        #sidebar-name .sidebar-name-wrap,#sidebar-inner
        {background: <?php echo $color['clutterless_sidebar_color']; ?> !important;}
        #sidebar, #sidebar a, #search-field::-webkit-input-placeholder, #search-field 
        {color:<?php echo $color['clutterless_sidebar_link_color']; ?>;}
        #content, body.search-results #search-field::placeholder
        {color: <?php echo $color['clutterless_content_text_color']; ?>;}
        #content .post-title h1, #content .post-title h1 a, #content .post-title h2
        {color: <?php echo $color['clutterless_content_post_title']; ?>;}
        #content  .post-content h2,#content  .post-content h3,#content  .post-content h4
        {color: <?php echo $color['clutterless_content_post_headings']; ?>;}
        #content  .post-date, #content  .post-date a, .return a
        {color: <?php echo $color['clutterless_content_post_date']; ?>;}
        #content .post-content a
        {color: <?php echo $color['clutterless_content_post_links']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links']; ?>;}
        #content .post-content a:hover
        {color: <?php echo $color['clutterless_content_post_links_hover']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links_hover']; ?>;}
    </style>
    <!-- Embedded Styles End -->
    <?php
}

add_action('wp_head', 'clutterless_customizer_styles');

?>