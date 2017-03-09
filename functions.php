<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.3
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Theme definitions
# ------------------------------------------------------------------------

define( 'clutterless_theme_version' , '1.8.3' );  		# Theme version
if ( ! isset( $content_width ) ) $content_width = 600;  # Content Width

# ------------------------------------------------------------------------
# Theme incudes
# ------------------------------------------------------------------------

require_once( get_template_directory() . '/backend/functions/ajax-archives.php'		); 	# AJAX loading archives
require_once( get_template_directory() . '/backend/functions/widgets.php'			); 	# Set number of archive & search results
require_once( get_template_directory() . '/backend/functions/widgets.php'			); 	# Widgets
require_once( get_template_directory() . '/backend/functions/clean-up.php'			); 	# WordPress Clean-up
require_once( get_template_directory() . '/backend/functions/indent-head.php'		); 	# Ultra geeky wp_head indentation
require_once( get_template_directory() . '/backend/functions/update-system.php'		); 	# Theme Update System
require_once( get_template_directory() . '/backend/functions/options.php'			); 	# Theme Recommendations and Options
require_once( get_template_directory() . '/backend/functions/enqueue.php'			); 	# Enqueue Scripts and Styles
require_once( get_template_directory() . '/backend/functions/customizer.php'		); 	# Theme Customizer
