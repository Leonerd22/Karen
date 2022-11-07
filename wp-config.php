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
define( 'DB_NAME', 'October' );

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
define( 'AUTH_KEY',         'r*wAVtMm~?!A!(qGbN=@H6a?S<^^Cd@O|5(&H}o?f6J8UxfP=9w;e|;@=gS(xhNf' );
define( 'SECURE_AUTH_KEY',  '!B]yoKPjvP(pO)y!1gbT@d~?IM|er!`[:<}Tv]qrbmD&!<}G_}D(jQy7DAl,KsC$' );
define( 'LOGGED_IN_KEY',    'KpSR|p!PEaK[` mBt;Q1#LzRcZD.oa{YT+?9Y(gxK+#Re9=MA.II)rt`% =dENa$' );
define( 'NONCE_KEY',        'laj}Rk>k1:al-z%|_lxRR: ^M7/c}Q)i0c700giDjdV&k/fBtEx|zY@H*E/M`-CB' );
define( 'AUTH_SALT',        'iQf?Q4iIdS>FS&DGLcmGxy$Hjd5MMFja-L-b9!srk5%p O1sxea3aeR[sQ6SrQWo' );
define( 'SECURE_AUTH_SALT', ';uy|W}jRvOAI!.+^d*A7*[WCBZ5y,vhZ%*QqKG:Gg&(HajG27}}]jq@;d.7vVHzn' );
define( 'LOGGED_IN_SALT',   'I]WD ZP0v!)N9cq$lT3S|z9JBd ak6WqDlCvB#)tphm~~DrmNNd+K~?k{@xg8h^Y' );
define( 'NONCE_SALT',       'gT<.Vlwi;1/L)k:Tu*{Kc5,SCF+2kTXikt^CnKXb/9-}A8o]zdilh-O34a,n!W2)' );

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
