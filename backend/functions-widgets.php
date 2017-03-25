<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.0.0
 * @license CC BY 3.0
 * 
 */

#-------------------------------------------------------------
# Enable Widgets
#-------------------------------------------------------------

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
