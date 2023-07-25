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
define( 'DB_NAME', 'hob_db' );

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
define( 'AUTH_KEY',         'PiO538^tW(-hpGR0LLScJQFbXH|mP)W.X2WT;XboT+Jg,+h0L)MgjX+^8n4L8]h(' );
define( 'SECURE_AUTH_KEY',  'EGFMJk)hU5,Fb ~b:46RRkSL,@{_~zXkk.Z@o3W,DI+Gq{Zsm&|5w9{G5Er.Thy~' );
define( 'LOGGED_IN_KEY',    'Vuf[9|N<-|D+5J53;,JO7eJY1M;`e^S7h<[msE@o[6aPdU:Hu1(3i(wSUb@.$h*J' );
define( 'NONCE_KEY',        'lBQIupg^1QY%JCD]k^3e=._?Z_v~4`G.N*B5T2]=GdevTV^5^,JE? xhQ?(mO5B%' );
define( 'AUTH_SALT',        ':scFZ1)+7wTe,q.;8CNj4iYy96ODZ]S:r[&P^+kn:1rxNiZJ%k;l5BjL#?K)~Tq-' );
define( 'SECURE_AUTH_SALT', 'v@yd:5-{L8oj1M+o)` :1(GI*L,6G=UE8(R5,7=f(M|7]iH`A^sY$WzV2OJ40%~^' );
define( 'LOGGED_IN_SALT',   'C}VPyg3u9retl<j%YZ4c9}6/yF]M2aNZbbX1[ne`,Dg7DWE9S-u(-.Lm>Q^zf)*V' );
define( 'NONCE_SALT',       '_D4Nee4S&ySaqz%C{]zMpDK6}iz)Ox:n:GTs9/#R2;BYAI<6P0tDj)^xq{v@!YWn' );

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
