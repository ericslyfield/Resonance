<div class="container">
<header id="navigation" class="navigation bg-medium gothic bold" >

                <div class="site-branding home-icon custom-logo" title="Home Icon">
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
        ?>
		</div>
    
        
        <a href="javascript:void(0)"><i><span id="modal-open" class="dashicons dashicons-menu-alt3"></span></i></a>
    </header>
</div>

<dialog id="modal" class="modal x-large bold hide full-screen centered">

    <a href="javascript:void(0)" id="modal-close">&times;</a>

    <?php wp_nav_menu(
        [ 'theme_location'  => 'mobile-menu',
        'menu_class'        => 'mobile-menu',
        'menu_id'           => 'mobile-menu',
    ]);?>

</dialog> 
