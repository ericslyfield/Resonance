<nav id="navigation" class="bold" >

<div id="home" class="home-icon" title="home icon">
    <a href="<?php bloginfo('url'); ?>"><i class="ph-house-bold x-large"></i></a>
</div>
    <a href="javascript:void(0)"><i id="modal-open" class="ph-list-bold toggle x-large"></i></a>
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
 

<dialog id="modal" class="x-large bold hide full-screen centered">

    <a href="javascript:void(0)" id="modal-close">&times;</a>

    <?php wp_nav_menu(
        [ 'theme_location'  => 'mobile-menu',
        'menu_class'        => 'mobile-menu',
        'menu_id'           => 'mobile-menu',
    ]);?>

</dialog> 
