<?php

function resonance_customizer_function( $wp_customize ){
    $wp_customize->add_panel(),

}

add_action( 'customize_register', 'resonance_customizer_function' )