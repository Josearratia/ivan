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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-woodmart' );

/** MySQL database username */
define( 'DB_USER', 'ivan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rodriguez12' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dsw@U_8K*$Eq^-Sv]l9}54t-%EZ*p4AOXY|Q`nGR7!mp&4G.<`K0PWv&(h,kCz<V' );
define( 'SECURE_AUTH_KEY',  'u_$_95^%G^iX2vTa=j*;% 0i,0zOFae<po3Un$s&sE<kQn.juBtut~~jb=R,Tu@0' );
define( 'LOGGED_IN_KEY',    '<2/K4[}dS{@3^xIc,Xv$#U C?  Sow?nl~tEnbNO*E*[:Qa,G%zML?X_b[3(04n}' );
define( 'NONCE_KEY',        ']WDQ*9!8f ekZhzV=wl@^qbdN_P+rDn~tJQ+7,EGc;U#h4F6Z=f=UgXir{Dmj4Zh' );
define( 'AUTH_SALT',        '_aZ*gZ54.]wR`@BFJCqRumIAbL6TYO@Y**5$yrLM&b/*s+ :E(R*nexi4{IbtI*&' );
define( 'SECURE_AUTH_SALT', '$i@C3!~T,i0_VKf:wq@(M|D]yF8r5Q4#Z]Ro$yz>#!lsAn[ :U&{7}WiH4;~9P5]' );
define( 'LOGGED_IN_SALT',   'wXsj#07|*zfPl6aHq_crUmu1bDrHP{!@i!ccE ^i?=CVe1k[6{e`ATa~7}T8KFpV' );
define( 'NONCE_SALT',       'B)uF3CvNCG:gBu=*Qp^fb3o8WQkk`ZeP42Wyc>vHFWqGeU-J:$&H0/]&]M+w6e|u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wm_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
