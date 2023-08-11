<?php if ( has_post_thumbnail() ): ?>
    <div class="thumbnail"> <?php the_post_thumbnail('large'); ?> </div>
<?php endif; ?>

<?php the_content();

get_template_part( 'template-parts/components/post-list' );
