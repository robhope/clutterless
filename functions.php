<?php

// Clutterless functions.php index:

// 00. Defining 
// 01. AJAX Loading Archive Posts
// 02. Set number of archive & search results
// 03. Exclude pages from search results
// 04. Enable sidebar
// 05. Theme Recommendations & Options
// 06. Theme Customizer
// 07. Enqueue Scripts and Styles
// 08. Theme Update System

// -------------------------------------------------------------
// 00. Defining
// -------------------------------------------------------------

// Theme Version
define( 'CLUTTERLESS_THEME_VERSION' , '1.7' );

// Content Width
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 600;

// -------------------------------------------------------------
// 01. AJAX Loading Archive Posts
// -------------------------------------------------------------

function clutterless_pbd_alp_init() {
 	global $wp_query;

 	// Add code to index pages.
 	/*if( !is_singular() ) {*/	
 		// Queue JS and CSS
 		wp_enqueue_script(
 			'pbd-alp-load-posts',
 			get_template_directory_uri().'/js/load-posts.js',
 			array('jquery'),
 			'1.0',
 			true
 		);

 		// What page are we on? And what is the pages limit?
 		$max = $wp_query->max_num_pages;
 		$paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

 		// Add some parameters for the JS.
 		wp_localize_script(
 			'pbd-alp-load-posts',
 			'pbd_alp',
 			array(
 				'startPage' => $paged,
 				'maxPages' => $max,
 				'nextLink' => next_posts($max, false)
 			)
 		);
 /*	}*/
 }

 add_action('template_redirect', 'clutterless_pbd_alp_init');

// -------------------------------------------------------------
// 02. Set number of archive & search results
// -------------------------------------------------------------

add_filter('pre_get_posts', 'clutterless_change_wp_search_size'); // Hook our custom function onto the request filter
function clutterless_change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
	    $query->query_vars['posts_per_page'] = 100; // Change 100 to the number of posts you would like to show
	return $query; // Return our modified query variables
}

add_filter('pre_get_posts', 'clutterless_change_wp_archive_size'); // Hook our custom function onto the request filter
function clutterless_change_wp_archive_size($query) {
	if ( $query->is_archive ) // Make sure it is a search page
	    $query->query_vars['posts_per_page'] = 100; // Change 100 to the number of posts you would like to show
	return $query; // Return our modified query variables
}

// -------------------------------------------------------------
// 03. Exclude pages from search results
// -------------------------------------------------------------

add_filter('pre_get_posts','clutterless_mySearchFilter');
function clutterless_mySearchFilter($query) {
	 if ($query->is_search) {
	    $query->set('post_type', 'post');
	 }
	 return $query;
}

 // -------------------------------------------------------------
 // 04. Enable Widgets
 // -------------------------------------------------------------

add_action('widgets_init', 'clutterless_register_sidebars');
function clutterless_register_sidebars(){
	register_sidebar(array(
		'name' 			=> 'Sidebar Widgets',
		'id'            => 'clutterless-sidebar-1',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<span class="sidebar-widget-title">',
		'after_title' 	=> '</span>',
	));
}


// -------------------------------------------------------------
// 05. Theme Recommendations & Options
// -------------------------------------------------------------

  add_action('admin_menu', 'clutterless_options_menu');

  function clutterless_options_menu() {
  	add_theme_page("Clutterless Options", "Clutterless Options", 'edit_themes', basename(__FILE__), 'clutterless_options_page');
  }


 function clutterless_options_page()
 {
 	if (@$_POST['update_themeoptions'] == 'true' ) {clutterless_themeoptions_update(); }
 	?>
 	<div class="wrap">

 	    <h2>Clutterless Theme Options</h2>
 	    <?php
 	    if (@$_POST['action'] == 'save') {
 	    ?>
 	    <div style="border-radius: 2px; height: 20px; width: 360px; background-color: #d8fcc4; text-align:center; padding:5px;">
 	    Nice one! Theme options updated.
 	    </div>
 	    <?php } ?>

 	    <form method="POST" action="">
 	        <input type="hidden" name="update_themeoptions" value="true" />

 	        <p>Simply fill out as much as you can below, hit 'Update Options' at the bottom and you are winning!</p>
 	        <p>Problems? Visit the <a href="https://onepagetemplates.com/" target="_blank" title="See Clutterless Documentation">Clutterless Documentation</a> online.</p>
 	        <br />

 	        <h3>Image/Emblem/Icon</h3>
 	        <p><i>Full URL, recommended 96px x 96px</i></p>
 	        <p><input type="text" name="logo" id="logo" size="40" value="<?php echo get_option('clutterless_logo'); ?>" /></p>
 	        <br />

 	        <h3>Logo</h3>
 	        <p><i>Full URL, recommended 50px high and within 400px wide</i></p>
 	        <p><input type="text" name="logo_name" id="logo_name" size="40" value="<?php echo get_option('clutterless_logo_name'); ?>" /></p>
 	        <br />

 	        <h3>About/Bio</h3>
 	        <p><i>Why not keep it short 'n sweet...</i></p>
 			<p><textarea name="bio" id="bio" cols="40" rows="5" value="<?php echo get_option('clutterless_bio'); ?>" /><?php $clutterless_bio_stripped = get_option('clutterless_bio');echo stripslashes($clutterless_bio_stripped);?></textarea></p>
            <br />	
            <h3>Content Load With AJAX</h3>
 	        <p><i>Tip! Disable AJAX to enable comments</i></p>
 			<p><label for="ajaxifyDisable" style="margin-right: 5px;">Enable</label>
 			   <input type="radio" name="ajaxify"  style="margin-right: 20px;" value="0" id="ajaxifyDisable" <?php if(get_option('clutterless_ajaxify')==0){?> checked="checked" <?php } ?>/>
 			   <label for="ajaxify" style="margin-right: 5px;">Disable </label> 
 			   <input type="radio" name="ajaxify" value="1" id="ajaxify" <?php if(get_option('clutterless_ajaxify')==1){?> checked="checked" <?php } ?> />
      </p>
 			<br />	

 	    <input type="hidden" name="action" value="save" />
 	    <p><input type="submit" name="search" value="Update Options" class="button" /></p>
 	  </form>

 	 </div> <!-- #wrap -->

 	 <?php
 } 

 function clutterless_themeoptions_update(){
 	update_option('clutterless_logo', $_POST['logo']);
 	update_option('clutterless_logo_name', $_POST['logo_name']);
 	update_option('clutterless_bio', $_POST['bio']);
	update_option('clutterless_ajaxify', $_POST['ajaxify']);
 }
 
// -------------------------------------------------------------
// 06. Theme Customizer
// ------------------------------------------------------------- 
 
add_action( 'customize_register', 'clutterless_options_theme_customizer_register' );
function clutterless_options_theme_customizer_register(WP_Customize_Manager $wp_customize) {
	
// Remove Customizer Section
$wp_customize->remove_section( 'static_front_page' );
$wp_customize->remove_section( 'colors');  

	/* Section for the theme customizer */
	$wp_customize->add_section( 'clutterless_options_theme_customizer_appearance', array(
		'title' => __( 'Appearance', 'clutterless_options_theme_customizer' ),
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
// 07. Enqueue Scripts and Styles
// -------------------------------------------------------------
add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}
add_action('wp_enqueue_scripts', 'clutterless_enqueue_scripts');
function clutterless_enqueue_scripts(){	
	// Clutterless Stylesheet	
	wp_enqueue_style( 'clutterless', get_stylesheet_uri(), array(), CLUTTERLESS_THEME_VERSION );

	// Clutterless Google Fonts
	wp_enqueue_style('google-webfonts-nc', 'http://fonts.googleapis.com/css?family=News+Cycle:400');
	wp_enqueue_style('google-webfonts-mw', 'http://fonts.googleapis.com/css?family=Merriweather:700');
	
	// jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	
	// Clutterless Scripts
	wp_enqueue_script('fitvids', get_template_directory_uri().'/js/jquery.fitvids.min.js');
	wp_enqueue_script('clutterless-fitvids', get_template_directory_uri().'/js/clutterless-fitvids.js');
	wp_enqueue_script('clutterless-css-browser-selector', get_template_directory_uri().'/js/css-browser-selector.js');
	wp_enqueue_script('clutterless-ipad-slider', get_template_directory_uri().'/js/ipad-slider.js');
	wp_enqueue_script('clutterless-dropdown', get_template_directory_uri().'/js/dropdown.js');
				
	$url = get_stylesheet_directory_uri() . '/js/';
	if(get_option('clutterless_ajaxify')=='0')
	{
		wp_enqueue_script( 'hash-change', "{$url}jquery.ba-hashchange.min.js", array('jquery'), '', true);
		wp_enqueue_script( 'ajax-theme', "{$url}ajax.js", array( 'hash-change' ), '', true);
		$wnm_custom = array( 'template_url' => get_bloginfo('template_url'),'file_url' =>get_current_template() );
		wp_localize_script( 'ajax-theme', 'clutterless', $wnm_custom );
	}
	
	// Add your scripts below
	
	// Add your scriptsabove
}


// Favicon
add_action('wp_head', 'clutterless_favicon');
function clutterless_favicon(){
	$favicon = get_option('clutterless_favicon');
	if ($favicon != '') {
        ?><link rel="shortcut icon" href="<?php echo $favicon; ?>" /><?php
	}
}

// Customizer Styles
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
		#content  .post-date, #content  .post-date a, #return a
		{color: <?php echo $color['clutterless_content_post_date']; ?>;}
		#content .post-content a
		{color: <?php echo $color['clutterless_content_post_links']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links']; ?>;}
		#content .post-content a:hover
		{color: <?php echo $color['clutterless_content_post_links_hover']; ?>;  border-bottom: 1px dotted <?php echo $color['clutterless_content_post_links_hover']; ?>;}
	</style>
	<!-- Embedded WP Customizer Code End -->
	<?php
}

// -------------------------------------------------------------
// 08. Theme Update System
// -------------------------------------------------------------

require_once( dirname( __FILE__ ) . '/incl/theme-update-checker.php'  );
require_once( dirname( __FILE__ ) . '/incl/theme-update-settings.php' );

?>