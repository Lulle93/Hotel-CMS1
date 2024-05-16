<?php
/*
Plugin Name:  Wordpress Boostrap 5 Navbar
Description:  A plugin that prints Wordpress menus as Bootstrap 5 navbars.
Version:      1.0
Author:       Thomas Boulund Meng Hansen
*/

function hotel_auto_title() {
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "hotel_auto_title");

function hotel_load_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");

    if(is_search()) {
        wp_enqueue_style("search", get_template_directory_uri() . "/css/search.css");
    }

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "hotel_load_resources");

function hotel_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "hotel_disable_gutenberg");

// function demo_register_menus() {
//     register_nav_menus(array(
//         "main-menu" => "Main Menu Location",
//         "footer-meu" => "Footer Menu Location"
//     ));
// }
// add_action("init", "demo_register_menus");