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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_linda' );

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
define( 'AUTH_KEY',         '?^-jcI`|/v@~/zhA7`D-r<G$k4t?)W]=qHy>,92|K6VDW|Vo?6Gc*ysgK{8}E 8&' );
define( 'SECURE_AUTH_KEY',  '(M C^DH$9}oNgJH;Swu3{LIBwz#CE%cO)m,.vRIXq|A_{x~ZjFie8=i`(!XSEGuw' );
define( 'LOGGED_IN_KEY',    '??<iA];z,mrWe{*JR!)qQ}%x5Qt2G2|x_LMgG6-a:*;fOgzf>mwr)(@N*5=z/714' );
define( 'NONCE_KEY',        '?e{{CaJ`u~^7c7z^vsLY;<W`*T6S3@sqb;E!Il`GKN;5b;.DWLHkmrFv.AAxk hb' );
define( 'AUTH_SALT',        'uiyy`tKar1LEdD)>Z#bKt!5oG<E~d5ev^4^TPt@3NL1Xr&|q&pHbjCl.n7${7/7p' );
define( 'SECURE_AUTH_SALT', ';]NR;yiG|Lj$}XKTwC1d09PqkBzY:a$0R*1_dz5AX(u/N[s^bUR&5l7@10Rs8K:,' );
define( 'LOGGED_IN_SALT',   'Z@NGI-&?Z7,Y!EM.Bf:t}PQ$.EAE9bf2xtFH*&EuPh>s;jx~4H*$MKAA/H{DK6X]' );
define( 'NONCE_SALT',       ' fSqL8Z9/EAo{.~W=Q30hxgsR1*%|:vp%hcaTAQ~{A;Zs!7rl!>I}%<7%JepAq~&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
