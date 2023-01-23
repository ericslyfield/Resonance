<?php
/**
* Header Template
*
* @package Resonance
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://unpkg.com/wavesurfer.js"></script>

    <?php wp_head(); ?>
</head>

<?php get_template_part( 'template-parts/header/header' )?>

<body <?php body_class(); ?> >

<?php 
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>


