<?php
/**
* Theme Functions
*
* @package Resonance
*/

require( 'autoloader.php' );

$Options = new Options;
$Styling = new Styling;

if (is_page( 'Contact' )){
    require_once( 'assets/ajax/filter.php' );
};

function my_theme_styles() {
    wp_enqueue_style( 'dashicons' );
    }

?>

