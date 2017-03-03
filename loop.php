<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-date">

    <a href="<?php the_permalink(); ?>"><?php echo the_time('j F Y') ?></a>

  </div><!-- .post-date -->

  <div class="post-title">

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 

  </div><!-- .post-title -->

  <div class="post-content">

      <?php the_content();?>

  </div><!-- .post-content -->

</div><!-- /.post -->