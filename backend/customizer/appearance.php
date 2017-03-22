<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8
 * @license GPL 2.0
 * 
 */

// -------------------------------------------------------------
// Customizer Setup
// -------------------------------------------------------------

add_action( 'customize_register', 'clutterless_options_theme_customizer_register' );
function clutterless_options_theme_customizer_register(WP_Customize_Manager $wp_customize) {
	
// Remove Customizer Section
$wp_customize->remove_section( 'static_front_page' );
$wp_customize->remove_section( 'colors');  

	/* Section for the theme customizer */
	$wp_customize->add_section( 'clutterless_options_theme_customizer_appearance', array(
		'title' => __( 'Appearance', 'clutterless' ),
		'priority' => 100
	) );
	
	/* Body Background Color */	
	$wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_body_background]', array(
		'default' => '#F8F8F8'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_body_background', array(
		'label'    => __( 'Body Background', 'clutterless' ),
		'section'  => 'clutterless_options_theme_customizer_appearance',
		'settings' => 'clutterless_options_theme_customizer[clutterless_body_background]',
		'priority' => 1,
	) ) );

	/* Sidebar Background Color */
	$wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_sidebar_color]', array(
		'default' => '#18BCEB'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_sidebar_color', array(
		'label'    => __( 'Sidebar Color', 'clutterless' ),
		'section'  => 'clutterless_options_theme_customizer_appearance',
		'settings' => 'clutterless_options_theme_customizer[clutterless_sidebar_color]',
		'priority' => 2,
	) ) );

	
	/* Sidebar Link Color */
	$wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_sidebar_link_color]', array(
		'default' => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_sidebar_link_color', array(
		'label'    => __( 'Sidebar Text Color', 'clutterless' ),
		'section'  => 'clutterless_options_theme_customizer_appearance',
		'settings' => 'clutterless_options_theme_customizer[clutterless_sidebar_link_color]',
		'priority' => 3,
		) ) );
	
	
	/* Content Text Color */
	$wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_text_color]', array(
		'default' => '#666666'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_text_color', array(
		'label'    => __( 'Content Text Color', 'clutterless' ),
		'section'  => 'clutterless_options_theme_customizer_appearance',
		'settings' => 'clutterless_options_theme_customizer[clutterless_content_text_color]',
		'priority' => 4,
	) ) );
	
	
	/* Content Text Shadow */
	$wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_text_shadow]', array(
		'default' => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_text_shadow', array(
		'label'    => __( 'Content Text Shadow', 'clutterless' ),
		'section'  => 'clutterless_options_theme_customizer_appearance',
		'settings' => 'clutterless_options_theme_customizer[clutterless_content_text_shadow]',
		'priority' => 5,
	) ) );
	
  /* Content Post Title */
  $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_title]', array(
  	'default' => '#333333'
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_title', array(
  	'label'    => __( 'Content Post Title', 'clutterless' ),
  	'section'  => 'clutterless_options_theme_customizer_appearance',
  	'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_title]',
  	'priority' => 6,
  ) ) );
  
  /* Content Post Headings */
  $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_headings]', array(
  	'default' => '#444444'
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_headings', array(
  	'label'    => __( 'Content Post Headings', 'clutterless' ),
  	'section'  => 'clutterless_options_theme_customizer_appearance',
  	'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_headings]',
  	'priority' => 7,
  ) ) );
  
  /* Content Post Date */
  $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_date]', array(
  	'default' => '#999999'
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_date', array(
  	'label'    => __( 'Content Post Date & Back Home Link', 'clutterless' ),
  	'section'  => 'clutterless_options_theme_customizer_appearance',
  	'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_date]',
  	'priority' => 8,
  ) ) );
  
  /* Content Post Links */
  $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_links]', array(
  	'default' => '#333333'
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_links', array(
  	'label'    => __( 'Content Post Links', 'clutterless' ),
  	'section'  => 'clutterless_options_theme_customizer_appearance',
  	'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_links]',
  	'priority' => 9,
  ) ) );
  
  /* Content Post Links Hover */
  $wp_customize->add_setting( 'clutterless_options_theme_customizer[clutterless_content_post_links_hover]', array(
  	'default' => '#18BCEB'
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clutterless_options_theme_customizer_content_post_links_hover', array(
  	'label'    => __( 'Content Post Links Hover', 'clutterless' ),
  	'section'  => 'clutterless_options_theme_customizer_appearance',
  	'settings' => 'clutterless_options_theme_customizer[clutterless_content_post_links_hover]',
  	'priority' => 10,
  ) ) );  
}


// -------------------------------------------------------------
// Customizer styles
// -------------------------------------------------------------


add_action('wp_head', 'clutterless_customizer_styles');
function clutterless_customizer_styles(){
	$color = get_theme_mod('clutterless_options_theme_customizer');
	$color = wp_parse_args($color, array(
		'clutterless_body_background' => '#F8F8F8',
		'clutterless_sidebar_color' => '#18BCEB',
		'clutterless_sidebar_link_color' => '#FFFFFF',
		'clutterless_content_text_shadow' => '#FFFFFF',
		'clutterless_content_post_title' => '#333333',
		'clutterless_content_post_headings' => '#444444',
		'clutterless_content_post_date' => '#999999',
		'clutterless_content_post_links' => '#444444',
		'clutterless_content_post_links_hover' => '#18BCEB',		
	));
	
	?>
	<!-- Embedded WP Customizer Code Start-->
	<style>
		body
		{background: <?php echo $color['clutterless_body_background']; ?>;}
		#sidebar-name .sidebar-name-wrap,#sidebar-inner
		{background: <?php echo $color['clutterless_sidebar_color']; ?> !important;}
		#sidebar,#sidebar a,#sidebar-inner #search #search-form #search-field
		{color:<?php echo $color['clutterless_sidebar_link_color']; ?>;}
		#content
		{color: <?php echo $color['clutterless_content_text_color']; ?>; text-shadow: 0 1px 0 <?php echo $color['clutterless_content_text_shadow']; ?>;}
		#content .post-title h2, #content .post-title h2 a
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
	<!-- Embedded WP Customizer Code End -->
	<?php
}