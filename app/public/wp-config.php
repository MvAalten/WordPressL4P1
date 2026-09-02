<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`;ifS;# Dg^-c3oBfLv9e6IfF`=.K0y6ZPrBLs:9*UugI<R@jW26w%|!2+`FjFqA' );
define( 'SECURE_AUTH_KEY',   '1N?fSMHZP#fV,DK/C6f|V&QAD>H&ED_S{L7{dxB,19`O*$E8=Pj5/HlosK0bqkE0' );
define( 'LOGGED_IN_KEY',     'KB5P#<~0:7QKCy w!a.q6,$tQ/9kR.&;${(8:j|#gx=V)0okc=i*?js~<]pDm{xZ' );
define( 'NONCE_KEY',         'e>$V&<=K0Q0VSl[x-.6$&Rnjc{Pk7983}+mF-oLv>J9x<w8U9c7`7ofXz1(Uv[|O' );
define( 'AUTH_SALT',         'h:P7&h^+=/:J:1O_Tbs9&goENMGmm6t 0-aCz=Pna%zmZ!,%JH#FN 18ir2L[Gd#' );
define( 'SECURE_AUTH_SALT',  ')$>0!6i||MTjLWn9LO7{!1?n{?6 b&#KPJ_j%#q!4901mfU5Yruo1U;?VwYYAS E' );
define( 'LOGGED_IN_SALT',    '8ee9yfmX/tWPBlE8P8>b4#B{l7=dha}Mv2%nh?sPL3skK9@V)qq)Z)Vm[hDqgMQ,' );
define( 'NONCE_SALT',        '8KW4w{]o8TH@Et}A}V+iu_m%rA0JZVdhi2FNu0hzMFm19R(.BtMYHEcN_Lp@Q>$b' );
define( 'WP_CACHE_KEY_SALT', 'ckr=xwZ&U>R/Mn9zrtlLF]xWfv6}@&du^U<uc(oF>4yNT?NhxY)zC-J1LWt:Ms4Z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
