<?php
/*
Template Name: Archive
*/
get_header(); ?>

<div id="search-page">

   <div id="content">
     
         <div id="post">

             <div class="post">

               <div class="post-title">

                 <h2><?php the_title(); ?></h2> 

               </div><!-- .post-title -->

               <div id="search-results">

                 <?php $my_100_query = new WP_Query('posts_per_page=100'); ?>

                 <?php while ( $my_100_query->have_posts() ) {
                 	$my_100_query->the_post();
                 ?>

           		  <div class="archive-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                     <div class="archive-date"><?php echo the_time('j F Y') ?></div><!-- .archive-date -->
                     <div class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div><!-- .archive-title -->

                 </div><!-- .archive-post -->

                 <?php 
                 } ?>

                 <?php wp_reset_query(); // reset main query ?>
                 
                 <div class="clear"></div>    

               </div><!-- #search-results -->

             </div><!-- /.post -->

          <div id="return"><a href="<?php echo home_url(); ?>">&#8592; Home</a></div>

          </div><!-- #post -->

   </div><!-- /#content -->
   
</div><!-- /#search-page -->   

<?php get_footer(); ?>