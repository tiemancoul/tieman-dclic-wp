<?php
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\tieman\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'ssy' );

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
define( 'AUTH_KEY',         'z*MI5]^N0M@3ISDtMkZ~|ccE$[.rEW% 3#=RdM>C~NfD4HFPC^<e$o4zoK,fYz2u' );
define( 'SECURE_AUTH_KEY',  'fPc!]%j{<+E/d9g9iYy zh4/1EUF0#MrP;{QZJ~N3J7IZ$_}5tc8lNtf07Z iY=C' );
define( 'LOGGED_IN_KEY',    'xKYvLudl,ln ?daVzzwm*7Wg8il]A;5H4d6Rwl5mF8Y+lH/sI#HL_%`B_?sBJUNj' );
define( 'NONCE_KEY',        'Wa}!E~a=$spz>`(27#qvBq`!K2!Wkaid>n~U@LNxA9oX7GrSzb]^e5B/t>H8Pl+0' );
define( 'AUTH_SALT',        '>%9ui:?c:U5P>#;~1C6cTX5<xv&OrPezc9Cg&>W8zEx[``Ii|L9951c5Ix]u)GkP' );
define( 'SECURE_AUTH_SALT', 'OWL}8JcK4bcM.G{O6jjWm9.ez.#w9TG*.D-q|(w^Yjb9JZz Pi:$OMAzq ?*7s).' );
define( 'LOGGED_IN_SALT',   '^4D6.[$iugj#dE13+RJ_5.&[i$KV4]IFd*`3,M=iG2UQG+k 4ScTBsl9JHRi0y(U' );
define( 'NONCE_SALT',       'M$9zK]glS+<KrLeG3V)VT0k*Y2nDD0AN%n]W9;3:,:K(pE5cDfro0gkTQ<y)9r_?' );

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
$table_prefix = 'tc_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
