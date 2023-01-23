<?php
/**
 * Automatically loads files from a folder.
 * This file keeps your functions.php file clean!
 * 
 * Instead of writing into functions.php, use the classes folder 
 * and let each new file represent/manage it's own function.
 * 
 * @since  1.0.0
 * @param  string $class = Name of the class being requested
 */

spl_autoload_register( function( $class ) {
    $file = __DIR__ . '/includes/classes/' . $class . '.php' ;
    if( file_exists( $file ) ){
        require $file;
    }
});