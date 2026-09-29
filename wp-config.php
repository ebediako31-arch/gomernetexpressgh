<?php
define( 'WP_CACHE', true ); // xSpeed owner:a71771bda5104141df59636461601f44
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gomernetexpressgh' );

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
define( 'AUTH_KEY',         '$m Lzwh;(^CmE6qT4aK+D@Z:Y>4n>:kvS|>5YN~v)?prIsmHdnaj+U]tFV<K7{GW' );
define( 'SECURE_AUTH_KEY',  '3=PJIUPxl141G4j)k=;`4uiEy{0XWzi4a:k~bySI]kdJ5YjLgn(;0G5Ea$/x7@5x' );
define( 'LOGGED_IN_KEY',    'WO_mO0m{*PkF{_Ik;jzI&Gb<nf@_olg|xzj=/IfX^v{/Vs=F.P3[RraNN^r[thUz' );
define( 'NONCE_KEY',        ',.}Wi?G~=[.*[3UcyUL}J*B#&k}]dfo/~J-i8U+H8tdLcpbOI`|i8UnQw?<0m:i-' );
define( 'AUTH_SALT',        '95=qEOcKc@[OK5eL1&p95@ofwPdI25+twdRWsZr:l$*C(t>LBbY$[_]#}M6hmN6O' );
define( 'SECURE_AUTH_SALT', 'Ys9se?<U{l3C)@I%BrMWm{h8-U{*25/-=MQ{$fh!]NLijtro]^d1EeC07^`<8(uK' );
define( 'LOGGED_IN_SALT',   '`Qa:)OE;;<0Zzkb=||6^(fS z$z*$Y:6Ba&=D+??k]!7NqoLqF(Pj.<XX/S)}~4|' );
define( 'NONCE_SALT',       ' YMf!xr:b8=0L_VcjB#%UbTa<$bZQay}01Pyge:&K>Ua~ d]AAjPh45Ua~Pc~!=b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';