<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.5.7
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Theme definitions
# ------------------------------------------------------------------------

define( 'clutterless_theme_version' , '2.5.7' );  		# Theme version
if ( ! isset( $content_width ) ) $content_width = 600;  # Content Width

# ------------------------------------------------------------------------
# Theme incudes
# ------------------------------------------------------------------------

require_once( get_template_directory() . '/backend/functions-ajax-archives.php'		); 	# AJAX loading archives
require_once( get_template_directory() . '/backend/functions-archive-results.php'	); 	# Set number of archive & search results
require_once( get_template_directory() . '/backend/functions-widgets.php'			); 	# Widgets
require_once( get_template_directory() . '/backend/functions-clean-up.php'			); 	# WordPress Head Clean-up
require_once( get_template_directory() . '/backend/functions-indent-head.php'		); 	# Ultra Geeky wp_head indentation
require_once( get_template_directory() . '/backend/functions-enqueue.php'			); 	# Enqueue Scripts and Styles
require_once( get_template_directory() . '/backend/functions-customizer.php'		); 	# Theme Customizer
require_once( get_template_directory() . '/backend/functions-update-system.php'		); 	# Theme Update System
