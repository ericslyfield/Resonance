<?php if (have_posts()) : 
	while( have_posts()): the_post(); ?>

		<?php the_content(); ?>

		<div id="thumb" class="thumbnail links-thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>

    </div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>