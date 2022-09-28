// if all of them are false, overlay is deactivated
// if any of them is true, overlay is activated;

let menu_overlay   = false;
let cart_overlay   = false;
let search_overlay = false;

function menu() {

    
    //deactivate cart if active
    if(cart_overlay) {
        close_cart();
    }
    //deactivate mobiel search if active
    else if (search_overlay) {
        close_search();
    }
    //deactivate menu if active
    else if(menu_overlay) {
        deactivate_itm('.mobile-menu');
        menu_overlay = false;
    }
    //activate menu if unactive
    else {
        activate_itm('.mobile-menu');
        menu_overlay = true;
    }

    overlay();
}

function overlay() {
    let overlay_state = menu_overlay || cart_overlay || search_overlay;

    if(overlay_state) {
        activate_itm('.overlay');
        activate_itm('.menu-btn');

        return true;
    }
    deactivate_itm('.menu-btn');
    deactivate_itm('.overlay');
    return false;
}

function open_search() {
    activate_itm('.mobile-search');
    search_overlay = true;
    overlay();
}

function close_search() {
    deactivate_itm('.mobile-search');
    search_overlay = false;
}

function search() {
    if(search_overlay) {
        close_search();
        overlay();
    }
    else open_search();
}

function open_cart() {
    activate_itm('.mobile-cart');
    cart_overlay = true;
    overlay();
}

function close_cart() {
    deactivate_itm('.mobile-cart');
    cart_overlay = false;
}

function cart() {
    if(cart_overlay) {
        close_cart();
        overlay();
    }
    else open_cart();
}



function preview_menu(target) {
    activate_itm(".menu-itm-preview-box");
    activate_itm(target);
}

function colapse_menu(target) {
    deactivate_itm(".menu-itm-preview-box");
    deactivate_itm(target);
}