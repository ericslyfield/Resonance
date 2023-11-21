<header id="navigation" class="navigation gothic bold" >

	<?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } /* Logo... If one exists */

			if ( is_front_page() ) :
	?>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>

            <?php get_template_part( 'template-parts/components/hamburger' ); ?>

			<?php

			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php

			endif;
    ?>


</header>


