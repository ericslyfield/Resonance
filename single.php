<?php

/**
* Single Page Template File:
* Renders a Static Page Template File
*
* @package Resonance
*/

?>

<?php get_header(); ?>
<main id="main-content" class="grid">
    <article>
        <?php get_template_part( 'template-parts/page/single' )?>
    
    </article>
</main>

<footer class="grid">
    <?php get_footer();?>
</footer>