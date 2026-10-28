<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // WordPress zet hier de CSS en de <title> neer ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>

        <?php wp_nav_menu( array( 'theme_location' => 'hoofdmenu' ) ); // het menu ?>
    </div>
</header>
