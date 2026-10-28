<?php
// functions.php wordt door WordPress automatisch geladen.

// Zet de thema-opties aan.
function rdr2_setup() {
    add_theme_support( 'title-tag' );        // WordPress maakt zelf de <title>
    register_nav_menu( 'hoofdmenu', 'Hoofdmenu' ); // Plek voor het menu
}
add_action( 'after_setup_theme', 'rdr2_setup' );

// Laad style.css in.
function rdr2_styles() {
    wp_enqueue_style( 'rdr2-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'rdr2_styles' );
