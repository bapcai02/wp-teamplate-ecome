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
define( 'DB_NAME', 'ecommerce-solution' );

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
define( 'AUTH_KEY',         'JHE~hHZteJSF`Rf}hhV|N6a$$yP^Rga4<ch3K:NusXH,.TK0/Nz0gR-l`<md#6lF' );
define( 'SECURE_AUTH_KEY',  'ijA3#N!_y8lpO69^q/*VYytz(?`@&/->o=mF2/~2Ky_5xV2pd@F@?bO#$PRs~USl' );
define( 'LOGGED_IN_KEY',    'sDR(l4@nCI?l_D9kVLOx-769-6b(vq^4J4VwnKW7hf%WnP>p%%n#sMSF4Ml2DH0t' );
define( 'NONCE_KEY',        'g+XR+*1]-3EPVu$&SdG]_}mYrZ3)RvsA`k1[y=KK:,w^Ni$I p{Ne$&UUlT1_$^g' );
define( 'AUTH_SALT',        'WSo>cQd0&;-^th.RC.=$<#{0QE` 8b#v?h-1=qTaq0S`d.?QIT4X[l?wIZJyfT8R' );
define( 'SECURE_AUTH_SALT', '=Ns@m4~]T7QQR^B9wf/1a`wThQQR8CYh!5@[L=zESUn-j?Pt?.e*r+cP=i#ag%z}' );
define( 'LOGGED_IN_SALT',   '*@Rw>.PN@3ENB%[?5-OI!G.HDEs0c){!CwV;DZ:#bi+(n0|cAwmz6Qgtxk-?_H{z' );
define( 'NONCE_SALT',       '6{_I+iUIkzM`,3NN{eCG<$_j/?1Do@G?uz_*b2Z0vx5Gn!FpT9J,~c85eCh*}3}A' );

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
