<?php get_header(); ?>

   <div id="content">

         <div id="post">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('loop'); ?>

            <?php endwhile; else: ?>

            <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>
            
            <div id="post-tags"><?php the_tags('Tags: ', ', ', ' '); ?></div>

            <div id="return"><a href="<?php echo home_url(); ?>">&#8592; Home</a></div>
			<input type="hidden" name="singlePage" id="singlePage" value="true" />
        </div><!-- #post -->

   </div><!-- /#content -->

<?php get_footer(); ?>