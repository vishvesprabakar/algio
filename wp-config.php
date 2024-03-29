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
define( 'DB_NAME', 'algio' );

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
define( 'AUTH_KEY',         'yNqo1?/Wb^XROj@p5<euZg7!`BLEm]$NMy*(WnCz=y#BckN*Er/qni(N1I2Jb/c{' );
define( 'SECURE_AUTH_KEY',  '7smoY=8=5U.~@ I v)iUd6_g0Z]$Kv93G-IR]ZoV<m5}]z$J!xdBV*}*i-zAC@Xc' );
define( 'LOGGED_IN_KEY',    'Cy)i~uTz(zZ[;tAX*#96,~V(L7S0p30~V_q>]3@1z{(8>8&:I_/O,e~a-|m5N$sz' );
define( 'NONCE_KEY',        '?<:NN)}}U5JfMEEc/9jeecVe&|A4N_Y<lM=W`X]HhwI$,6yFR9Z1J* e(L%{wo5q' );
define( 'AUTH_SALT',        'c3l_@et|h#]$jWt2z?,Zn]G]d,l&3J]ptw_LEZ?`j|Z[aMem;ejOYPUev.4*wDmx' );
define( 'SECURE_AUTH_SALT', 'N*SC1)lHVtW1^M)3DUTS;dj.:#We0bfjGy9z#&kp7sA>lY><HFn,cpV24uK!z?Xv' );
define( 'LOGGED_IN_SALT',   'OMGQ}37|$:!FK;I_SfYLsQpaWey8D818T*]q>`vI3tr_;0GRTSH0CqU.)}^.jbM[' );
define( 'NONCE_SALT',       '.Un,&K<~92X|:dQ@,E$8{G$t38UOA3@8E-Do%7Jq^=)YTE}?)G8YMN7vhryclIMH' );

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
