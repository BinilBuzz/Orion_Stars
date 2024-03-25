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
define( 'DB_NAME', 'orionstars' );

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
define( 'AUTH_KEY',         'Q},.v,*_fxR{Fg]BY2w1#J=*}3$2i^By}0x?jmu96t5n.Mw`;Z.M3hiO_0j]0H=V' );
define( 'SECURE_AUTH_KEY',  'N]-bt^rWG~DE>9OJf!Uu78ky#g;}g/~bnX/J7~b OB@Si49b0P3U&?7[$`}ee8_1' );
define( 'LOGGED_IN_KEY',    '1K_M[C>eRtS{ObPtNl;x$yIl+}{VV<D {xn.*_X.G2Bif:U/*XSv29?4g-jGa}|_' );
define( 'NONCE_KEY',        'jJ&pZt%{`>3OV;y}HZf* xR0]~v0<ej7M-k0W3n>;d`(F;_wpI,^jD*B}`Y%{?bb' );
define( 'AUTH_SALT',        'O?{uBD<>(ZDs&o>pSTX1+SfC71n<gLxLkB&(SlYjEp(x|m DGwB_(8*OEL.Ytk(m' );
define( 'SECURE_AUTH_SALT', '(#1NjhU[2^l,V[ban^>.KlkY2kYiRq.d,o-Dd$Gb-;!lC3])Fb^6;_u@-j,NsND3' );
define( 'LOGGED_IN_SALT',   'Y1~^o6M7Uju-0`eLU/Oai^O$02;gfZgI7;b#4eSUm<fI{8C*[S9ky)Jls-|qFL.$' );
define( 'NONCE_SALT',       '.)UM1:w5o31mBV0>3aB@MLXb6ye5GCPSni*HF4,xi[w&/K^tQ|>0O4p`66^JQV_=' );

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
