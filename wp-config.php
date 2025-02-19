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
define( 'AUTH_KEY',          ':gEB=(0SJk/i&CBj9Lqh2`Vi)<T o0Ia{@*pS&][gO$d@*U5b^>);M{)kgrk^7w%' );
define( 'SECURE_AUTH_KEY',   'f}YJdS%dyZad~_*lz/Sq%A(m?bZ0#svB[`gR.zqe&[W5W.lq|%~#,u}7^le)%[6F' );
define( 'LOGGED_IN_KEY',     'o+(M<)>I5kboy)kPOaD{5<UQ[:T:cQC03Z&#;Xm^,q9v|LO(<YT<6s@l37 n`oit' );
define( 'NONCE_KEY',         's4JPk3cPb}*BQ&?yev0y7t>u UYW`syJ3_xylz+(qrPQclG$18Kqgo.;mBu9TGh>' );
define( 'AUTH_SALT',         'gitTwr-sjZ*{5?I@99dwU6c&V.NVT(#RVDFq8)K>TbjxAN`@ +uX<tQ=24;Z$7Io' );
define( 'SECURE_AUTH_SALT',  '@N_.HPJ_tIp)[4wP!7PZf4%!qSB/<uCAu}Az.*%!#yQZ{liMS(*DW~wJ)CU$@WUw' );
define( 'LOGGED_IN_SALT',    'r0y>h|b2VgKAcE:7(%cyp}zPAYR8d3e<klH`kx77v1Ge#m8`z%OBoCerB?=&V|J:' );
define( 'NONCE_SALT',        'z!*A=fM*rt$5F>3!iNjxq&x,}>Ho?b$y@Nx]@3<?Zyc4D>Gw7GF,bnY>KEiwTXDq' );
define( 'WP_CACHE_KEY_SALT', 's1?%jX,.Yg4&~~tDK#y17o`5%_2s!Ar;9zH3)h?)%8j~2+JOR?)!>u/dyum0.GN(' );


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
