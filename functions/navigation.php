<?php
class navigationToggle{
    function navigationToggle(){

    wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . 'https://cdn3.wpbeginner.com/js/navigation.js', array('jquery'), '20160909', true );
    }
}
