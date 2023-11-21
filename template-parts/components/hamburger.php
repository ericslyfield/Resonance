<label id="hamburger" class="hamburger">
    <input id="checkbox" type="checkbox" name="checkbox">
</label>
    
<dialog id="modal" class="modal">
    <nav>
        <?php wp_nav_menu(
    
            [ 'theme_location'  => 'mobile-menu',
            'menu_class'        => 'mobile-menu',
            'menu_id'           => 'mobile-menu',
        ]);?>
    </nav>
</dialog> 