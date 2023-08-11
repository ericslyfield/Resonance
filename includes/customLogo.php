<?php

class customLogo{
    public function __construct(){
        function resonance_custom_logo_setup() {
            $defaults = array(
                'height'               => 50,
                'width'                => 50,
                'flex-height'          => false,
                'flex-width'           => false,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => true, 
            );
        add_theme_support( 'custom-logo', $defaults );
        }

        add_action( 'after_setup_theme', 'resonance_custom_logo_setup' );
    }
}
?>