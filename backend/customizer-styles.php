<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.1.1
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Add custom styles
#-------------------------------------------------------------------------------

// Removes Input Boxes, bit of a hack I know ;P
function clutterless_customizer_inline_styles() { ?>
	<style>
	    li#customize-control-clutterless_credit textarea,
		li#customize-control-clutterless_customizer_setup_documentation_setting input,
		li#customize-control-clutterless_customizer_setup_support_setting input {
			display: none !important;
		}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'clutterless_customizer_inline_styles', 999 );

?>