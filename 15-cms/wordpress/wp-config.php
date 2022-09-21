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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'lA&Y{EAk@62-g%AlpOe71dT^QJsILRAeKX|8W*e;c!&}NF?lEKe}L@:{r<g[&dmQ' );
define( 'SECURE_AUTH_KEY',  'r{@`yr/B4_xIvBzI$KXK-K%5(_Cx_6nEE($An3b(?6V7HPY)yk}ngVt[s;32I.%1' );
define( 'LOGGED_IN_KEY',    ';9anyu;uuF:NM,&x=UevUwI&$~g~>Oh2=%#R4#}C&0xF/s%?0/y}Pfrees0O0lc}' );
define( 'NONCE_KEY',        '/dCi7ob)2D//=grF2wVO0P*Sv~.Mz;g9RI~AV;34{v?[m$PK%GN#UaW,AXg4C&e}' );
define( 'AUTH_SALT',        '$g!Pr *0S8X7o}JcFKm+w-;`CHOs&C]lv!:U3AVJ(j3-oIP&zM|FvYU[3L[5U3mQ' );
define( 'SECURE_AUTH_SALT', 'Rokh?~/<3/2:ljXf-;T,jWjl)@Tx$ET[tW`{w%&naO7?$D8*Y&Ve(,za!; `U7lV' );
define( 'LOGGED_IN_SALT',   'B:yCg>!pp:!|K2Mp4.5M3N(r+rug;G-dvN1S,M-7:;ktky|&Zc14+mLE);<+/a;k' );
define( 'NONCE_SALT',       'e;NmZ@|`)7;;~o1W_XB6{8uDT;: Sy:`73(Y9//9|3!Y.UZ!{AR]-`)>#E0qg?=_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
