<?php
/**
 * Template Name: Landing Page (Standard)
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

<main id="landing-page" class="grid container">

<?php
// get_template_part( 'parts/components/header' );
get_template_part( 'parts/components/hero' ); 
get_template_part( 'parts/components/post-list' );
// get_template_part( 'parts/components/footer' );
get_template_part( 'parts/components/credits' );

?>

</main>

<?php get_footer();?>   