( function() {
    var nav = document.getElementById( 'site-menu' ), button, menu;
    if ( ! nav ) {
        return;
    }
 
    button = nav.getElementsByTagName( 'button' )[0];
    menu   = nav.getElementsByTagName( 'ul' )[0];
    if ( ! button ) {
        return;
    }
 
    // Hide button if menu is missing or empty.
    if ( ! menu || ! menu.childNodes.length ) {
        button.style.display = 'none';
        return;
    }
 
    button.onclick = function() {
        if ( -1 === menu.className.indexOf( 'site-menu' ) ) {
            menu.className = 'nav-menu';
        }
 
        if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
            button.className = button.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
} )(jQuery);