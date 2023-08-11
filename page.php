<?php
/**
* Page Template File:
* Renders a Static Page Template File
*
* @package Resonance
*/
?>


<?php get_header(); ?>


<main id="main-content" class="grid">
    <?php 
        if ( ! is_page( 'Links' ) ){
            get_template_part( 'template-parts/page/links' );
        } 
        elseif ( ! is_page('About') ){
            get_template_part( 'template-parts/page/about' );
        } 
        else {
            get_template_part( 'template-parts/page/default' );
        };
    ?>
</main>


<?php get_footer();?>
