<?php
/**
 * Template Name: Landing Page (Standard)
 * Template Post Type: post, page
 *
 * @package Resonance
 */
 get_header();
?>

<?php 
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<main class="grid container">

<div id="blotter-text">Bloop BLOOP!</div>
<div id="blotter-container"></div>



</body>
</html>

<?php
// get_template_part( 'parts/components/header' );
echo '<nav class="global-nav">';
block_template_part( 'header' );
echo '</nav>';

get_template_part( 'parts/components/hero' ); 
get_template_part( 'parts/components/post-list' );
// get_template_part( 'parts/components/footer' );
// get_template_part( 'parts/components/credits' );
block_template_part( 'footer' );
?>

</main>

<?php get_footer();?>   