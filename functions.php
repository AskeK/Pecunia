<?php
/* Theme Name: Pecunia Optimus Theme */

add_action('init', 'initsettings');
function initsettings() {
    show_admin_bar( false );

    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');

    register_nav_menus(array(
        'main-menu' => 'Hovedmenu',
    ));
}

// Custom types
get_functions_part(array(
    'coworkers',
), 'custom-types');

// Kirki
get_functions_part(array(
    'config',
    'visualsection',
    'contactinfo'
), 'kirki');

// get_functions_part([$filnavn],[$undermappe]);
function smamo_include_functions_part_if_exists($fetch, $in = false){
    if ($in){$fetch = $in . '/' . $fetch;}
    $fetch = get_template_directory() . '/functions/' . $fetch . '.php';
    if(file_exists($fetch)){include_once $fetch;}
}

function get_functions_part($fetch, $in = false){
    if(is_array($fetch)){foreach($fetch as $p){smamo_include_functions_part_if_exists($p,$in);}}
    else{smamo_include_functions_part_if_exists($fetch,$in);}
}


// Notices
global $pagenow;
if ( $pagenow == 'edit.php' ) {
    function custom_admin_notice() { echo '<div class="tip"><p>Tip: Rækkefølgen af sider og medarbejdere kan ændres ved at "hive" i elementerne</p></div>'; }
    add_action( 'admin_notices', 'custom_admin_notice' );
}
