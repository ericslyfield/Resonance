<?php
/**
* The Header Template
*
* @package Resonance
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <script src="https://unpkg.com/wavesurfer.js@6.6"></script>
    <script async src="https://unpkg.com/phosphor-icons"></script>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >

<?php
    
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };
?>

<?php /* get_template_part( 'template-parts/header/header' ) */ ?>

<header id="navigation" class="bold" >

<div class="site-branding home-icon custom-logo" title="home icon">
			<?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description || ! is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $site_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


    <a href="javascript:void(0)"><i id="modal-open" class="ph-list-bold toggle x-large"></i></a>
</header> <!-- # -->

<!-- --> 

<dialog id="modal" class="x-large bold hide full-screen centered">

    <a href="javascript:void(0)" id="modal-close">&times;</a>

    <?php wp_nav_menu(
        [ 'theme_location'  => 'mobile-menu',
        'menu_class'        => 'mobile-menu',
        'menu_id'           => 'mobile-menu',
    ]);?>

</dialog> 
