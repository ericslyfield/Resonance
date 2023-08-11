<?php
/**
* Blog Page Template File
*
* @package Resonance
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : 
    while( have_posts() ): the_post(); ?>

    <article id="blog-content">   
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/post/format', get_post_format()); ?>
        </div>
    </article>

<?php endwhile; endif; ?>


<?php get_footer();?>



