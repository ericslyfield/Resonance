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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/blotter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/channelSplitMaterial.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('background'); ?> >

<?php
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>