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
define( 'DB_NAME', 'shoponline' );

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
define( 'AUTH_KEY',         '&t-Gh!VcHM,&TlmXa60|P]5#WnSDSTL$sf0Pax{q [jY2BK?O>5f7An7U6opL%Rk' );
define( 'SECURE_AUTH_KEY',  '30V6KhIHF#J?)a,Wm5Eime2mkYlqC688|nB-4zc2}{gd9!u7P{T<;wg`.ph59&fm' );
define( 'LOGGED_IN_KEY',    'vbaPVWk)#$H4KDf7+M`8ul`[5rY,L..rg-<Y}&G )>,<k}EY,`1R6#HL?iNsWg?;' );
define( 'NONCE_KEY',        '?dnah*K`#d|xN7eJi$J-y,)?cV(aS0*#},`i7ejM:`#_-O4MX7de@ipp8z@m.A2^' );
define( 'AUTH_SALT',        'K>J.O?F8+4jYfnjU9g]iRC4`)t3x|JDE5^vi9kET;!.r]ne> 34c|NO,v7w$X`=Y' );
define( 'SECURE_AUTH_SALT', '/0A]<lt-fSiSj1~0Jz8vwxhG7EvuXV:>2OOml@8?^M,C;Ux:wbiT2{j.O3|=:]_#' );
define( 'LOGGED_IN_SALT',   'F8rT/$T|<>%Nt0:biG8:Zuo~M+1WK~o{=~wQ!ldYhz%H?K6{j=Icqg0fguHrD~e`' );
define( 'NONCE_SALT',       'ay[bM9p)+|Dd;}kWcS44sng:d{{1g]G3V~%FS}gb(rvi9.d1-0OeSyb3i]KcC.o}' );

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
