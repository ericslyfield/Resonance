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

?>

