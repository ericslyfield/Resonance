<label id="hamburger" class="hamburger" alt="hamburger menu" for="menu-checkbox">
    <input type="checkbox" id="menu-checkbox" name="menu-checkbox">
    <div class="reader-only">Menu<div>
</label>
    
<dialog id="modal" class="modal glass">
    <nav>
        <?php wp_nav_menu(
    
            [ 'theme_location'  => 'mobile-menu',
            'menu_class'        => 'mobile-menu',
            'menu_id'           => 'mobile-menu',
        ]);?>
    </nav>
</dialog> 