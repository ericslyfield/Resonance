<?php
/**
* Theme Functions
*
* @package Resonance
*/

require( 'autoloader.php' );

if (is_page( 'Contact' )){
    require_once( 'assets/ajax/filter.php' );
};

$Options = new Options;
$Styling = new Styling;

// Wavesurfer Tests (Working...)
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wrap_audio_in_waveform( $block_content, $block ) {
	if ( $block['blockName'] === 'core/audio' ) {
		$content = '<div id="wp-block-audio" class="wp-block-audio">';
		$content .= $block;
		$content .= '</div>';
		return $content;
	}
	
    return $block_content;
}

add_filter('render_block', 'wrap_audio_in_waveform', 10, 2);

// CORS



?>

