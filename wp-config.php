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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcm_shriram' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?Ew-$LW/d;PHlS2leK2Q%;f%i+:0W!1y/s8[ ^+kO*?R@cN]&e;,22@t]kB({[o;' );
define( 'SECURE_AUTH_KEY',  '[zT4sL^+OSUX8I?l(UPQK7nJ8BJu^Oe{gx%{G{H94<R.mM/y37nUvPxBHz!LBkHJ' );
define( 'LOGGED_IN_KEY',    '#Qucc#Ss^Wd<QpYGD;NuzRSG9DQ?0Y+)@+EXqsaVeIYtMuUTMiqrEb/1Vm&I74nY' );
define( 'NONCE_KEY',        'q>JP0?1x*m[qv4PxnwVCJ_i`ws<|1P =>he0;_qTk{d-3iYxnp0 w-)P!++d&$)+' );
define( 'AUTH_SALT',        '5+GS}O@5k:5b%$1<1NcFbS4=*%lQ4U]i#e|B)0N/m{D`f%ppWAEhq 8W=NlnDa?B' );
define( 'SECURE_AUTH_SALT', ' kOhSrYthk!i+:d6:h8j@bd<yB4Y7)$T ]/APjF_.I~m1!01;sm1~d[N6iQMO)1I' );
define( 'LOGGED_IN_SALT',   'ReB{Q3.._N1m@]eR.=p7TM=ZYGdxyYU.w%F4$8,;}R~ab 7Z0;Y5;&;ZF^izxa~)' );
define( 'NONCE_SALT',       'D{sp6tkS00r9<u$GTDt:f(9%LwT _IzO0l1ux9!heBQ&1vNm%2jTN0.J0MfNY*e`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dcm_';

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
