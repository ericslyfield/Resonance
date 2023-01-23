<?php
/**
* Blog Page Template File
*
* @package Resonance
*/
?>

<header>
    <?php get_header(); ?>
</header>

<?php if (have_posts()) : 
    while( have_posts() ): the_post(); ?>

<article id="main-content" class="grid breathe">   
    <?php get_template_part( 'template-parts/post/format', get_post_format()); ?>
</article>

<?php endwhile; endif; ?>

<footer class="grid">
    <?php get_footer();?>
</footer>