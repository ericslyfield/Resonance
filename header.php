<?php
/**
* The Header Template
*
* @package Resonance
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" src="https://unpkg.com/wavesurfer.js@6.6"></link>
    <link rel="stylesheet" async src="https://unpkg.com/phosphor-icons"></link>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<?php get_template_part( 'template-parts/components/header' ); ?>