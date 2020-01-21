<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'casamento' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '!.00150889OOx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define('WP_HOME','http://example.com');
// define('WP_SITEURL','http://example.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I*=6s)>I!J}u;oJL;E@3^:h@Hb+i6t~%^;%&FAcd{&2/epGs2(muy~^3E:,<qC6s' );
define( 'SECURE_AUTH_KEY',  '<WI*oANu;ZPlota3*O2ZhQA~5y8$Lg,+gy{b)SkyGa{&!E b`YG+[}~iBW0Rsb?9' );
define( 'LOGGED_IN_KEY',    'Xl&il-c>V1>-QLY}#S=+|=55^XxzHfi^To)?Lb5EQSwc5yY@~UhJI8vg3m:HcGQ?' );
define( 'NONCE_KEY',        '&^q{PIPi^~jN( 5=JN2kE[-R9fhyZ2!W@C0EZI= AFEKAKZ?KRYhv6|jFRA~Q^|@' );
define( 'AUTH_SALT',        '>;-_<+2y1l8VY1Z+Yf6a(h^dveJ:2/?&OX}6wcZ5fLkgHJ]u;}.BBA!TK/WBN%(1' );
define( 'SECURE_AUTH_SALT', '+B(u} CtU,_y>0fnbO1klVxh_Is;[3!>zZ9fOpXHx;rB=#I6T_~1mQ.k%de+36dL' );
define( 'LOGGED_IN_SALT',   '%V//[>L*y]8Oo2O}c49^K#CqX=5Xa8j;Vj`pP<+soOL<x^DcdE/:SGA!LG.w$0J#' );
define( 'NONCE_SALT',       'T>u2eTeZKZ`7}9HdI8@C3chap&Hypm;YUa^px}2ZApILT(}_t{1M-mPP8XN@dI5-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
