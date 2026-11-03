<?php
// Theme setup: titles, thumbnails, menus, HTML5 markup.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption']);
    register_nav_menu('primary', 'Primary menu');
    add_image_size('rdr2-card', 600, 320, true);
});

// Styles + western fonts.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('rdr2-fonts', 'https://fonts.googleapis.com/css2?family=Rye&family=Special+Elite&display=swap', [], null);
    wp_enqueue_style('rdr2-style', get_stylesheet_uri(), ['rdr2-fonts'], wp_get_theme()->get('Version'));
});

// Shorter excerpts for the cards.
add_filter('excerpt_length', fn() => 25);
add_filter('excerpt_more', fn() => '…');

// Fallback menu when none is assigned: home + all pages.
function rdr2_menu() {
    wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => fn() => print('<ul><li><a href="' . esc_url(home_url('/')) . '">Home</a></li>' . wp_list_pages(['title_li' => '', 'echo' => 0]) . '</ul>'),
    ]);
}
