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
define( 'AUTH_KEY',          'e#?)n(J%IIw{TF@fzLzqTQ<ke,{4sGk++,$J6gPf$h:F08|JvM!WOW4T#mP71VC8' );
define( 'SECURE_AUTH_KEY',   '2/ofEOpL:Q&De-H#@~r #qbA?I20C*O#ef,-4{&*Klu6mjfqT9Vce=OTorV,T;}z' );
define( 'LOGGED_IN_KEY',     'uv%oj1g(.,/!UU&dVSvQg;.*{orLQTJ=f!JsKDB~&I/tJTho.LZ>x~G4Ko93-v5U' );
define( 'NONCE_KEY',         'dbpd<q|+h?i%T<GbSq,Knbkk;)dy*7wln;HY<oW<)ykf?Qp-tj;@zT}BlRC,T(vQ' );
define( 'AUTH_SALT',         'T?CU?$^vj|s>39o+s~rLXJtVADhac]S[]>I!j6H3-!oF-e;kg>E@W^[cp:i $2V)' );
define( 'SECURE_AUTH_SALT',  'GX[&F=E+|vEzQ(b(U-`9[le@d%y+Vor50H)$ofM/7|8_:5(wTd0TY 1yws:W_9L[' );
define( 'LOGGED_IN_SALT',    'Fb#z3r]s:$kAS>pE;y3-Dbev>4YVgNo,w)Fk@PsrFo*w_~lPQZ1su:PMGrX(2JPv' );
define( 'NONCE_SALT',        '6w[] H7>IgspEOpwE0Lg!bzd/87>+a<e^BO;^.!EkmP=VQ1p+mnp9F)j]` I#jPI' );
define( 'WP_CACHE_KEY_SALT', ')7I j~|9g7:sae/hmXZ2|be=)#V=:P#PwfGJC//1E|`E]~LoGCdxGpE$}xga0JND' );


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

/*
define( 'WP_HOME', ‘http://mylocalts.local/wp-login.php?redirect_to=http%3A%2F%2Fmylocalts.local%2Fwp-admin%2F&reauth=1’ ); 
define( 'WP_SITEURL', ‘http://mylocalts.local/’ ); 
*/