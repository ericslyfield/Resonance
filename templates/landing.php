<?php
/**
 * Template Name: Landing Page (Standard)
 * Template Post Type: post, page
 *
 * @package Resonance
 */
 get_header();
?>

<?php 
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<main class="grid container bg-medium">

<?php

echo '<nav class="global-nav">';
block_template_part( 'header' );
echo '</nav>';


get_template_part( 'parts/components/hero' );
get_template_part( 'parts/components/post-list' );

block_template_part( 'footer' );
get_template_part( 'parts/components/credits' );
?>

</main>

<?php get_footer();?>   

</body>
</html>

