<?php get_header(); global $paged; ?>
<div id="content">

         <div id="post">


<div id="search-page">
  
        <div id="search-header">

              <div id="search-term">
                <?php printf( __( '%d %s' ), $wp_query->found_posts, _n( 'search result', 'search results', $wp_query->found_posts), get_search_query() ); ?> for <?php echo ' &quot;'.wp_specialchars($s).'&quot;'; ?>
              </div><!-- #search-term -->    
    
              <div id="search">
                	  <form id="search-form"  action="<?php print get_site_url(); ?>/" method="get">
                			<input type="text" id="search-field" name="s" value="<?php  if (is_search()) {esc_attr_e($s);} else {echo ('Search');} ?>" onFocus="this.value=''" />
          		        <input type="submit" id="search-button" value="" />
          	        </form>
              </div><!-- #search -->
    
              <div class="clear"></div>

        </div><!-- #search-header -->
  
        <div id="search-results">
          
          <?php get_template_part('loop-search'); ?>  
          
          <div class="clear"></div>    
             
        </div><!-- #search-results -->
  
</div><!-- #search-page -->
    
</div>
</div>
<?php get_footer(); ?>