<?php
class Styling {
    public function __construct(){ 

        // jQuery
        wp_enqueue_scripts( 'jquery' );
    
        // wp_deregister_style( 'dashicons' ); 

        // Register Styles

        // CSS Stylesheet
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/scss/style.css', [], null, 'all' );

        // Media Player
        wp_register_style('mediaplayer', get_template_directory_uri() . '/assets/scss/media.css', [], null, 'all' );

        // Bootstrap (CSS)
        // wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [], null, 'all' );
        
        //Register Scripts

        // Live Clock
        wp_register_script( 'clock', get_template_directory_uri() . '/assets/js/clock.js', [], filemtime( get_template_directory() . '/assets/js/clock.js' ));

        // Bootstrap (JS)
        // wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap/bootstrap.min.js', [ 'jquery' ], false, true);

        // Scripts.js (Assets)
        wp_register_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], filemtime( get_template_directory() . '/assets/js/scripts.js' ));
        
        if ( ! is_page('home') ):
        wp_register_script( 'addClasses', get_template_directory_uri() . '/assets/js/addClasses.js', [], filemtime( get_template_directory() . '/assets/js/addClasses.js' ));
        endif;

        // Modals (Assets)
        // wp_register_script( 'navigation', get_template_directory_uri() . '/assets/js/modals.js', [], filemtime( get_template_directory() . '/assets/js/modals.js' ));
        
        // Audio (Assets)
        wp_register_script( 'audio', get_template_directory_uri() . '/assets/js/audio.js', [], filemtime( get_template_directory() . '/assets/js/audio.js' ));

        // Wavesurfer
	    wp_enqueue_script('wavesurfer', get_template_directory_uri() . '/assets/js/waveform.js', '', 2, true);

        // Blotter
        wp_register_script( 'blotter', get_template_directory_uri() . '/assets/js/blotter.js', [], filemtime( get_template_directory() . '/assets/js/blotter.js' ));

      

        // Enqueue Styles
        wp_enqueue_style( 'stylesheet' );
        // wp_enqueue_style( 'mediaplayer' );
        // wp_enqueue_style( 'bootstrap-css' );  
        
        
        //Enqueue Scripts
        
        // wp_enqueue_script( 'scripts' );
        wp_enqueue_script( 'addClasses' );
        wp_enqueue_script( 'navigation' );
        wp_enqueue_script( 'wavesurfer' );
        // wp_enqueue_script( 'modals' );
        wp_enqueue_script( 'blotter' );
        // wp_enqueue_script( 'bootstrap-js' );
        // wp_enqueue_script( 'clock' );
        // wp_enqueue_script( 'audio' );
        }
}