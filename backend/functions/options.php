<?php
/**
 *
 * @package clutterless
 * @since clutterless 1.8.1
 * @license CC BY 3.0
 * 
 */

// -------------------------------------------------------------
// Theme Options
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

 	        <h3>Image/Emblem/Icon</h3>
 	        <p><i>Full URL, recommended 96px x 96px</i></p>
 	        <p><input type="text" name="logo" id="logo" size="40" value="<?php echo get_option('clutterless_logo'); ?>" /></p>
 	        <br />

 	        <h3>Logo</h3>
 	        <p><i>Full URL, recommended 50px high and within 400px wide</i></p>
 	        <p><input type="text" name="logo_name" id="logo_name" size="40" value="<?php echo get_option('clutterless_logo_name'); ?>" /></p>
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
 }