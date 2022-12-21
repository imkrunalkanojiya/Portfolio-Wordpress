<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'krunalka_wp528' );

/** Database username */
define( 'DB_USER', 'krunalka_wp528' );

/** Database password */
define( 'DB_PASSWORD', '5p.)i38ii.S2' );

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
define( 'AUTH_KEY',         'n3izs1yu1vjpmn41lakooezqfxbihu8xcdu9inw20jy5ruhpjz5dyngjtl0xslsm' );
define( 'SECURE_AUTH_KEY',  'rrn1fe4gxomrseyeop2wghdzedwjtjrjahpjs1z4j4cwxrbrfgs56pvzn9206xau' );
define( 'LOGGED_IN_KEY',    'xj1wdxdprf5fj0q0dezzpdjuqu7fkrq9l3p9pwfco545uj9enceev6ef2qaaxmqo' );
define( 'NONCE_KEY',        'voqgliuuhk2scepoabfiog3mmxicwje661uyy0kxes8o6z37sxqwlcbnmpvwt8pk' );
define( 'AUTH_SALT',        '3cj3dojibjwq6riqg7ekjmovs7hmhhwlypstebqvbsvsxwhbjktbs0vwfwqg5aqk' );
define( 'SECURE_AUTH_SALT', 'ci7d5xvoeu9mcsr5umrcehfkobzs95o1baf2kjizrakzry0bmzf5c80cf6mdi1nk' );
define( 'LOGGED_IN_SALT',   'qwixmebla8cq0iucujts4moufm1pln0kdahavkcnqtvzxkvqrira3sddep8z52xc' );
define( 'NONCE_SALT',       'rhaxiyh5cb0eaa59ec60pildmoagkc1jlmvmq6zlqnkiroixofjielggczu00f8g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxx_';

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
