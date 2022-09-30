<?php add_action('wp_enqueue_scripts', 'jaluzi_scripts');

function jaluzi_scripts () {
    wp_enqueue_style('jaluzi_style', get_stylesheet_uri() );
    wp_enqueue_style('jaluzi_media', get_template_directory_uri() . '/assets/css/media.css' );
    wp_enqueue_style('animate-style', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,700&family=Roboto+Slab:wght@400;500;600;700&display=swap"' );
    wp_enqueue_script('jaluzi-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}


add_theme_support('custom-logo');
add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes ($atts, $item, $args) {
    if($args -> menu === 'Main'){
        $atts['class'] = 'header__subheader-text';
    }

    return $atts;
}
?>