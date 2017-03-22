<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="archive-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<div class="archive-date"><?php echo the_time(get_option('date_format')) ?></div>
	<div class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

</div><!-- .archive-post -->

<?php endwhile; ?>

<?php endif ?>







