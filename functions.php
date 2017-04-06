<?php
add_action('init', 'initsettings');
function initsettings() {
    show_admin_bar( false );

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => 'Hovedmenu',
    ));
}


