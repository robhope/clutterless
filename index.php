<?php get_header(); ?>

         <div id="post">

           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('loop'); ?>

            <?php endwhile; else: ?>

           <p>Sorry, no posts matched your criteria.</p>

           <?php endif; ?>

            <div class="navigation"></div><!-- AJAX navigation -->
            
          </div><!-- #post -->

<?php get_footer(); ?>