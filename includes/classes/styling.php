<?php
class Styling {
    public function Styling(){ 
        
        wp_register_style( 'phosphor-icons', 'https://unpkg.com/phosphor-icons' );
        // wp_deregister_style( 'dashicons' ); 

        // Enqueue AJAX
        wp_register_script( 'ajax', get_template_directory_uri() . '/assets/ajax/ajax.js', [ 'jquery' ], false, true);

        // Localize AJAX
        wp_localize_script('ajax', 'wp_ajax',
        array('ajax_url' => admin_url('admin-ajax.php')));

        // Register Styles
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/scss/style.css', [], null, 'all' );
        wp_register_style('mediaplayer', get_template_directory_uri() . '/assets/scss/media.css', [], null, 'all' );
        // wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [], null, 'all' );
        
        //Register Scripts
        wp_register_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobilemenu.js', [], filemtime( get_template_directory() . '/assets/js/mobilemenu.js' ));
        wp_register_script( 'clock', get_template_directory_uri() . '/assets/js/clock.js', [], filemtime( get_template_directory() . '/assets/js/clock.js' ));
        wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', [ 'jquery' ], false, true);
        wp_register_script( 'blotter', get_template_directory_uri() . '/assets/library/js/blotter.min.js', [ 'jquery' ], false, true);
        wp_register_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], filemtime( get_template_directory() . '/assets/js/scripts.js' ));
        wp_register_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', [], filemtime( get_template_directory() . '/assets/js/navigation.js' ));
        wp_register_script( 'audio', get_template_directory_uri() . '/assets/js/audio.js', [], filemtime( get_template_directory() . '/assets/js/audio.js' ));
        
        // Wavesurfer
	    wp_enqueue_script('wavesurfer', get_template_directory_uri() . '/assets/js/wavesurfer.js', '', 2, true);

        //Enqueue Scripts

        // wp_enqueue_script( 'navigation' );
        // wp_enqueue_script( 'ajax' );
        wp_enqueue_script( 'wavesurfer' );
        wp_enqueue_script( 'mobile-menu' );
        // wp_enqueue_script( 'bootstrap-js' );
        // wp_enqueue_script( 'clock' );
        // wp_enqueue_script( 'blotter' );
        wp_enqueue_script( 'scripts' );
        // wp_enqueue_script( 'audio' );

        // Enqueue Styles
        wp_enqueue_style( 'stylesheet' );
        wp_enqueue_style( 'phosphor-icons' );
        // wp_enqueue_style( 'mediaplayer' );
        // wp_enqueue_style( 'bootstrap-css' );
        }
}