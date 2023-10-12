<div class="footer courier">
    <?php

    if ( has_nav_menu( 'footer-menu' ) ) {
        ?>
            <div class="footer__zone-one">
    
                <div class="footer__zone-one-title">
                    <?php echo 'Title Of the Footer'; ?>
                </div>
    
                <?php
                wp_nav_menu(
                    [ 'theme_location'  => 'footer-menu-zone-one',
                    'menu_class'        => 'footer-menu-zone-one',
                    'menu_id'           => 'footer-menu-zone-one',
                ]); /* Footer Menu - Zone 1*/ 
             
            echo '</div>'; /* Category */ 
        } else echo '<div>poop</div>';

        dynamic_sidebar('footer-zone-one'); // Footer Sidebar Zone 1
        dynamic_sidebar('footer-zone-two'); // Footer Sidebar Zone 2
    

          echo '<div class="footer__zone-two">';
          wp_nav_menu(
            [ 'theme_location'  => 'footer-menu',
            'menu_class'        => 'footer-menu',
            'menu_id'           => 'footer-menu',
         ]); /* Footer */ 
          echo '</div>'; /* Category */ 


          echo '<div class="footer__zone-three">';
          wp_nav_menu(
            [ 'theme_location'  => 'footer-menu',
            'menu_class'        => 'footer-menu',
            'menu_id'           => 'footer-menu',
         ]); /* Footer */ 
          echo '</div>'; /* Category */ 

          echo '<div class="footer__zone-four">';
          wp_nav_menu(
            [ 'theme_location'  => 'footer-menu',
            'menu_class'        => 'footer-menu',
            'menu_id'           => 'footer-menu',
         ]); /* Footer */ 
          echo '</div>'; /* Category */ 

    echo '</div>';
?>