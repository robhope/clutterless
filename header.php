<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta charset = "UTF-8" />
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	
	<!-- IE stylesheet -->
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri(); ?>/styles/ie.css" /><![endif]-->
	
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="<?php if(get_option('clutterless_ajaxify', '1')=='0') {echo ('ajax-on'); } else {echo ('ajax-off');};?>">

  <?php get_sidebar(); ?>

  <div id="ipad-click"><div id="content">
	