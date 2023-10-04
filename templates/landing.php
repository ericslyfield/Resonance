<?php
/**
 * Template Name: Landing (Standard)
 * Template Post Type: post, page
 *
 * @package Resonance
 */
 get_header();
?>

<body <?php body_class(); ?> >

<?php 
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<main id="landing" class="grid container">
        <?php get_template_part( 'template-parts/page/landing' )?>
</main>

<?php get_footer();?>