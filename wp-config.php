<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ibadah_themeforest' );

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
define( 'AUTH_KEY',         '`#<,XpJ)bl^~klaG,vJ`5j(ZA}#Qj{4^Y(1}oKsOLKmj?9$l5.7_a[[mV7x1TC#!' );
define( 'SECURE_AUTH_KEY',  '[]E{lkIk$_PpQE!o[r^r<+mBMa:a1SLj8Ik>=My5`2h3d!Ot]~BGq8GzQVCQH~-F' );
define( 'LOGGED_IN_KEY',    ':SUx9@$%El^u[@dW*W%[5HeR@Qnj~Zu8CtZ>(1jRLdr2VdAS|IclpOit@h8>-r(z' );
define( 'NONCE_KEY',        'sY2;1{w6l+22NUH5>]pg|c]@{J4#D`p7d{_J7h^GZc?y/nB.M$4JRtLJVM^YC9rX' );
define( 'AUTH_SALT',        'D f71!Iz7J`h<.jmi+k+9?z/&>WC,:9Oakckh?RteP29:QtCWmfKC zXzNg?.*f+' );
define( 'SECURE_AUTH_SALT', 'DdFs;L`i@/pD}*h&@~?n2,<Xp_gjf&Xbj3?pC,fXOg>.g(rivE:nOploN$HCW;@`' );
define( 'LOGGED_IN_SALT',   'a6~|g!u-JR^uawpOoJLl)3KmU~5V&9/pm*#vBL>2#:_d/WoVT]&VNPJ%O<}-UvO@' );
define( 'NONCE_SALT',       'bJh~nYfOZi{xFm65I!*=$Vk`R|=#H5L`$H2t0^dD$}O`-rPt;r7yYAb,1Q2OQts[' );

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
