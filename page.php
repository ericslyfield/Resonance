<?php
/**
* Page Template File:
* Renders a Static Page Template File
*
* @package Resonance
*/
?>

<header> 
    <?php get_header(); ?>
</header>

<main id="main-content" class="grid">
    <?php 
        if ( is_page( 'Links' ) ){
            get_template_part( 'template-parts/page/links' );
        } 
        elseif ( is_page('About') ){
            get_template_part( 'template-parts/page/about' );
        } 
        else {
            get_template_part( 'template-parts/page/default' );
        };
    ?>
</main>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>