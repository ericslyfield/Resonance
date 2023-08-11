<?php
/**
* Front Page Template File:
* Renders a Dynamic Front Page Template File
*
* @package Resonace
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

<main id="landing-content" class="#">
    <?php get_template_part( 'template-parts/page/front-page' )?>
</main>


<?php get_footer();?>