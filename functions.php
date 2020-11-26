<?php
function is_menu_active($item)
{
    if(strpos($item->url, get_site_url() . $_SERVER['REQUEST_URI']) !== false){
        return true;
    }
    return false;
}

function have_menu($menu_name)
{
    return get_menu_items($menu_name) ? true : false;
}

function get_menu_items($menu_name)
{
    $menu = wp_get_nav_menu_object( get_nav_menu_locations()[ $menu_name ] );
    return wp_get_nav_menu_items( $menu->term_id, [ 'order' => 'DESC' ] );
}

function wpb_custom_new_menu() {
    register_nav_menu('navbar-menu',__( 'My Navbar Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );
add_action( 'init', 'have_menu' );
add_action( 'init', 'get_menu_items' );
add_action( 'init', 'is_menu_active' );