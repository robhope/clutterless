<?php get_header(); ?>

   <div id="content">
     
         <div id="post">

           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

             <div class="post">

               <div class="post-title">

                 <h2><?php the_title(); ?></h2> 

               </div><!-- .post-title -->

               <div class="post-content">

                   <?php the_content();?>

               </div><!-- .post-content -->

             </div><!-- /.post -->

            <?php endwhile; else: ?>

           <p>Sorry, no posts matched your criteria.</p>

           <?php endif; ?>
           
          <div id="return"><a href="<?php echo home_url(); ?>">&#8592; Home</a></div>

          </div><!-- #post -->

   </div><!-- /#content -->

<?php get_footer(); ?>