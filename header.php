<?php
/**
 * Default theme header
 *
 * Displays the <head> section as well as the opening tag for the body
 * 
 * @package clutterless
 * @since clutterless 1.8.2
 * @license GPL 2.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title><?php bloginfo('name'); ?></title>
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php indented_wp_head(); ?>

</head>

<body <?php body_class(); ?> >

  <?php get_sidebar(); ?>

  <div id="ipad-click"><div id="content">
	