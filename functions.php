<?php
/**
* Theme Functions
*
* @package Resonance
*/

require_once 'autoloader.php';

new StylesAndSettings;
new Options;

function include_contact_ajax() {
    if (is_page( 'Contact' )){
        require_once( 'assets/ajax/filter.php' );
    };
}
add_action('wp', 'include_contact_ajax');

function my_theme_styles() {
    wp_enqueue_style( 'dashicons' );
    }

// Enables Widget / Sidebar Support

add_theme_support( 'widgets' );


function resonance_footer_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Footer - Zone 1', 'Resonance' ),
        'id'            => 'footer-zone-one',
        'before_widget' => '<div id="%1$s" class="footer-zone-one %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer__zone-one-title">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer - Zone 2', 'Resonance' ),
        'id'            => 'footer-zone-two',
        'before_widget' => '<div id="%1$s" class="footer-zone-two %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer__zone-two-title">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer - Zone 3', 'Resonance' ),
        'id'            => 'footer-zone-three',
        'before_widget' => '<div id="%1$s" class="footer-zone-three %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer__zone-three-title">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer - Zone 4', 'Resonance' ),
        'id'            => 'footer-zone-four',
        'before_widget' => '<div id="%1$s" class="footer-zone-four %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer__zone-four-title">',
        'after_title'   => '</div>',
    ) );

    };
    add_action( 'widgets_init', 'resonance_footer_sidebar' ); // Calls Sidebar Function

    // Register Block Template Support for Classic Themes

// Register Block Template Support for Classic Themes
function theme_setup() {
    add_theme_support('block-template-parts');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'theme_setup');


?>

