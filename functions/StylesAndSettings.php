<?php
/**
 * Plugin Name: Styles and Settings
 * Description: Loads theme-critical support for Javascript and CSS files.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class StylesAndSettings {

    // Protected properties to hold the registered styles and scripts
    protected $styles = [];
    protected $scripts = [];

    public function __construct() { 
        // Hook to enqueue assets
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    // Public method to enqueue styles and scripts
    public function enqueue_assets() {
        // jQuery
        wp_enqueue_script('jquery');

        // Register styles and scripts
        $this->register_styles();
        $this->register_scripts();

        // Enqueue styles and scripts
        $this->enqueue_registered_styles();
        $this->enqueue_registered_scripts();
    }

    // Protected method to register styles
    protected function register_styles() {
        $this->register_style('stylesheet', '/assets/scss/style.css');
        $this->register_style('mediaplayer', '/assets/scss/media.css');
        // $this->register_style('bootstrap-css', '/assets/library/css/bootstrap.min.css');
    }

    // Protected method to register scripts
    protected function register_scripts() {
        $this->register_script('clock', '/assets/js/clock.js');
        // $this->register_script('bootstrap-js', '/assets/library/js/bootstrap/bootstrap.min.js', ['jquery']);
        $this->register_script('scripts', '/assets/js/scripts.js');

        if ( ! is_page('home') ) {
            $this->register_script('addClasses', '/assets/js/addClasses.js');
        }

        // $this->register_script('navigation', '/assets/js/modals.js');
        $this->register_script('audio', '/assets/js/audio.js');
        wp_enqueue_script('wavesurfer', get_template_directory_uri() . '/assets/js/waveform.js', [], null, true);
        // $this->register_script('blotter', '/assets/js/blotter.js');
    }

    // Private method to register a style
    private function register_style($handle, $path) {
        $this->styles[$handle] = get_template_directory_uri() . $path;
        wp_register_style($handle, $this->styles[$handle], [], null, 'all');
    }

    // Private method to register a script
    private function register_script($handle, $path) {
        $this->scripts[$handle] = get_template_directory_uri() . $path;
        wp_register_script($handle, $this->scripts[$handle], [], filemtime(get_template_directory() . $path), true);
    }

    // Private method to enqueue registered styles
    private function enqueue_registered_styles() {
        wp_enqueue_style('stylesheet');
        // wp_enqueue_style('mediaplayer');
        // wp_enqueue_style('bootstrap-css');
    }

    // Private method to enqueue registered scripts
    private function enqueue_registered_scripts() {
        wp_enqueue_script('scripts');
        wp_enqueue_script('addClasses');
        // wp_enqueue_script('navigation');
        // wp_enqueue_script('wavesurfer');
        wp_enqueue_script('blotter');
        // wp_enqueue_script('bootstrap-js');
        // wp_enqueue_script('clock');
        // wp_enqueue_script('audio');
    }
}
