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
define( 'DB_NAME', 'aroma' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'bHioKupqxE7ndkroMpuk' );

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
define( 'AUTH_KEY',          '{!;w{T[Rb9wcOT%Omv]pxG+VZ@f(k6`RW?0@mni3m0!hQzC${K(+*-X%cs4CicAN' );
define( 'SECURE_AUTH_KEY',   '3pT{5aM9RK}: j%2D:`y1LZP anvr/K?L8L}&%;WVUY9w!42}/b!~^<=&+AJgB(R' );
define( 'LOGGED_IN_KEY',     'J]S`{(N:h@Pd.P~q.4}h5}~{)a2c<ln{1f.20nRjk|Sx32swid`/EHGTsRoD=xG6' );
define( 'NONCE_KEY',         '!5A #Lw!<yIcWaS5G3N]L6y[)goF+y.B*gv+a6flFovS,x>8@r.<V_$%kP}E!UPs' );
define( 'AUTH_SALT',         'bxFZR}U;Is}($;]GcbXT}2eNYl^#gYj8>Z=Rh%`lpS#,+lDbIlS`` msM: /]NM-' );
define( 'SECURE_AUTH_SALT',  'i y5^<,uu&F8)Ot`_@U5ut5Hw9hJ|KD>*_VSqd+hMC*RF}Qsq5IbL,/NqXI>$!(X' );
define( 'LOGGED_IN_SALT',    's(eLFeDOdfDI,%:8(zFJF(f@@y+P&Oq;22E^hthr&!F=<tP5a<QAl8<M.^gcJ&r9' );
define( 'NONCE_SALT',        'O04B](AyW){m4xvfgI%fc7)&(/{+y;S!BA9e+14f)~4#3G-(HQXs/i=}d62p}T(r' );
define( 'WP_CACHE_KEY_SALT', '@SSJOEq*[.xPzMyQ)F?S?7q~CVLW8$9bJC z(zfH^g^:5zd@*R:0]4~jtuYhAa#-' );


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
