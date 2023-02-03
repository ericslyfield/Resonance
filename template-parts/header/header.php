<nav id="navigation" class="bold" >

<div id="home" class="home-icon" title="home icon">
    <a href="<?php bloginfo('url'); ?>"><i class="ph-house-bold x-large"></i></a>
</div>
    <a href="javascript:void(0)"><i id="toggle" class="ph-list-bold toggle x-large" onclick="showMenu()"></i></a>
</nav>

<div id="floating-menu">
    <ul>
        <li>
            <?php wp_nav_menu(
                [ 'theme_location'  => 'header-menu',
                'menu_class'        => 'header-menu',
                ]);?>             
        </li>
    </ul>
</div>


<dialog id="modal-menu" class="x-large bold" style="display: none;">

    <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>

    <?php wp_nav_menu(
        [ 'theme_location'  => 'mobile-menu',
        'menu_class'        => 'mobile-menu',
        'menu_id'           => 'mobile-menu',
    ]);?>

</dialog> 
