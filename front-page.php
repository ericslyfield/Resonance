<?php
/**
* Front Page Template File:
* Renders a Dynamic Front Page Template File
*
* @package Resonace
*/
?>

<header>
    <?php get_header(); ?>
</header>

<body <?php body_class(); ?> >

<?php 
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<main id="main-content" class="grid">
    <?php get_template_part( 'template-parts/page/landing' )?>
</main>

<footer>
    <?php get_footer();?>
</footer>