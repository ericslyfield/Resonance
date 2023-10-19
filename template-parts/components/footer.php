<div class="footer courier">
    <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>

                <?php if ( is_active_sidebar( 'footer-zone-one' ) ) : ?>
                    <ul id="footer-zone-one" class="footer__zone-one">
                        <?php dynamic_sidebar( 'footer-zone-one' ); ?>
                    </ul>
                <?php endif; 

                if ( is_active_sidebar( 'footer-zone-two' ) ) : ?>
                    <ul id="footer-zone-two" class="footer__zone-two">
                        <?php dynamic_sidebar( 'footer-zone-two' ); ?>
                    </ul>
                <?php endif; 

                if ( is_active_sidebar( 'footer-zone-three' ) ) : ?>
                    <ul id="footer-zone-three" class="footer__zone-three">
                        <?php dynamic_sidebar( 'footer-zone-three' ); ?>
                    </ul>
                <?php endif; 

                if ( is_active_sidebar( 'footer-zone-four' ) ) : ?>
                    <ul id="footer-zone-four" class="footer__zone-four">
                        <?php dynamic_sidebar( 'footer-zone-four' ); ?>
                    </ul>
                <?php endif; }?>