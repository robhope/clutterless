<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.6
 *  @license CCA 3.0
 * 
 */

#-------------------------------------------------------------------------------
# Customizer: Add custom styles
#-------------------------------------------------------------------------------

// Removes Input Boxes, bit of a hack I know ;P
function clutterless_customizer_inline_styles() { ?>
	<style>
	    li#customize-control-clutterless_credit textarea,
		li#customize-control-clutterless_customizer_setup_docs_setting input,
		li#customize-control-clutterless_license.customize-control.customize-control-textarea textarea {
			display: none !important;
		}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'clutterless_customizer_inline_styles', 999 );

?>