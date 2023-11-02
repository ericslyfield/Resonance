<header id="navigation" class="navigation bg-medium gothic bold" >

	<?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
			if ( is_front_page() ) :
				?>
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>

                <dialog id="modal" class="modal x-large bold hide full-screen centered">
                <nav class="nav-menu">
                    <?php wp_nav_menu(
                        ['theme_location'  => 'header-menu',
                        'menu_class'       => 'header-menu',
                        'menu_id'          => 'header-menu',
                    ]);?>
                </nav>
                </dialog> 
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php

			endif;
        ?>

         <span id="modal-open" class="dashicons dashicons-menu-alt3">
         <?php get_template_part( 'template-parts/components/hamburger' ); ?>
         </span>


</header>


