<?php
/**
* Theme Functions
*
* @package Resonance
*/

require( 'autoloader.php' );

$Styling = new Styling;
$Options = new Options;
$Sidebars = new Sidebars;

if (is_page( 'Contact' )){
    require_once( 'assets/ajax/filter.php' );
};

function my_theme_styles() {
    wp_enqueue_style( 'dashicons' );
    }

add_theme_support( 'widgets' );


function resonance_footer_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Footer - Zone 1', 'Resonance' ),
        'id'            => 'footer-zone-one',
        'before_widget' => '<div id="%1$s" class="footer-menu-zone-one %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-menu__area-one-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer - Zone 2', 'Resonance' ),
        'id'            => 'footer-zone-two',
        'before_widget' => '<div id="%1$s" class="footer-menu-zone-two %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-menu__area-two-title">',
        'after_title'   => '</h3>',
    ) );

    };
    add_action( 'widgets_init', 'resonance_footer_sidebar' ); // Calls Sidebar Function


?>

