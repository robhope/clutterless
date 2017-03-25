<div id="sidebar">
  
        <div id="sidebar-name">
          <span class="sidebar-name-wrap"><?php bloginfo('name'); ?></span>
        </div><!-- #sidebar-name -->
        
        
        <div id="sidebar-inner">
   
                <div id="sidebar-logo">

                      <div class="logo">

                        <div class="logo-image">
                          <?php
                    			$logo = get_option('clutterless_logo');
                    			if ($logo != '') {
                    			?>
                                <a href="<?php print get_home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" width="48" height="48"/></a>
                                
                    			<?php
                    			} else {?>            			
                    			<?php }?>
                    			</div><!-- .logo-image -->
                        <div class="logo-name">
        
                          	<?php $logo_name = get_option('clutterless_logo_name'); if ($logo_name != '') {?>
                            <h1><a href="<?php print get_home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php echo $logo_name; ?>" alt="<?php bloginfo('name'); ?>" height="25"/></a></h1>
                      			<?php
                      			} else {?>
                      			<h1><a href="<?php print get_home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
                      			<?php } ?>
                                                    
                        </div><!-- .logo-name -->
                        <div class="tagline"><?php bloginfo('description'); ?></div><!-- .tagline -->
                        <div class="clear"></div>

                      </div><!-- #logo -->
        
                </div><!-- #sidebar-logo -->
                
                <!-- Mobile dropdown menu button -->
                <div id="sidebar-dropdown">
                     <a href="#" onclick="toggle_visibility('sidebar-mobile-info');"><svg enable-background="new 0 0 24 24" fill="#FFFFFF" height="24px" version="1.1" viewBox="0 0 24 24" width="24px" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><g><g><path d="M23.244,17.009H0.75c-0.413,0-0.75,0.36-0.75,0.801v3.421C0,21.654,0.337,22,0.75,22h22.494c0.414,0,0.75-0.346,0.75-0.77    V17.81C23.994,17.369,23.658,17.009,23.244,17.009z M23.244,9.009H0.75C0.337,9.009,0,9.369,0,9.81v3.421    c0,0.424,0.337,0.769,0.75,0.769h22.494c0.414,0,0.75-0.345,0.75-0.769V9.81C23.994,9.369,23.658,9.009,23.244,9.009z     M23.244,1.009H0.75C0.337,1.009,0,1.369,0,1.81V5.23c0,0.423,0.337,0.769,0.75,0.769h22.494c0.414,0,0.75-0.346,0.75-0.769V1.81    C23.994,1.369,23.658,1.009,23.244,1.009z"/></g></g></svg></a>
                </div><!-- #sidebar-dropdown -->
                
                <div class="clear"></div>
                
                <!-- This is what slides down on mobile menu click -->
                <div id="sidebar-mobile-info">
                             
                              <div id="sidebar-bio">
          
                                      <?php
					          				$clutterless_about = wp_kses_post(get_option( 'clutterless_about', 'Tell your readers why you are blogging and why they should follow you. Some basic code is cool too. You can edit this blog description in Content setup section of the <a href="./wp-admin/customize.php?autofocus[section]=clutterless_customizer_setup_content_option">Theme Customizer</a>.' ));
					 						  echo $clutterless_about;
					      				?>

                              </div><!-- /#sidebar-bio -->
                
                              <div class="clear"></div>
        
                              <div id="sidebar-widgets">
          
                                 <?php dynamic_sidebar( 'clutterless-sidebar-1' ); ?>
          
                              </div><!-- #sidebar-widgets -->
                
                              <div class="clear"></div>

                              <div id="search">
          
                                	  <form id="search-form"  action="<?php print get_site_url(); ?>/" method="post">
                                			<input type="text" id="search-field" name="s" value="<?php  if (is_search()) {esc_attr_e($s);} else {echo ('Search');} ?>" onFocus="this.value=''" />
                        			        <input type="submit" id="search-button" value="" />
                        		        </form>
          
                              </div><!-- #search -->
        
                              <div class="clear"></div>
                
                              <div id="sidebar-credit">
                                <p><a href="https://onepagelove.com/clutterless">Clutterless WordPress Theme</a> <span class="by">by</span> <a href="https://onepagelove.com">One Page Love</a></p>
                              </div><!-- #sidebar-credit -->


                              <div class="clear"></div>
                
                </div><!-- #sidebar-mobile-info -->

        </div><!-- sidebar-inner -->
  
</div><!-- sidebar -->