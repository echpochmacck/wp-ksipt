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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySql-8.0' );

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
define( 'AUTH_KEY',         'D3jy|9PO4BI`lxr~HH#}HLW|AMhud(h=CDamHD(7{FK-|[]2[lf5++4n<~RCK_DK' );
define( 'SECURE_AUTH_KEY',  'Y;m%29w P@k~0zRDy_?{=T/|&I<Y>{}aTK9_OP)5B$?{_0lz92ss}i#e86HD(n[H' );
define( 'LOGGED_IN_KEY',    '.vqyj(mJwA.R*9*qARkkZ+<=jro?T0/v+9g:DfMSRe%ahY=vy].X9.X)o3WjPyaa' );
define( 'NONCE_KEY',        'T?Q#M8r$8S``gc~<5S=NP1:XRD(.645FCOGE+[q,odO+G$H|`h=Uy{J:r_[6xe2r' );
define( 'AUTH_SALT',        'WT,:+-,lzSS5bE9o<kRHM=,&Aq`Gep@-4e_v+7@0l_B:86xv[Qu*8<u1u^`wS9?c' );
define( 'SECURE_AUTH_SALT', 'r]`!/b2~)9-K&AlBt.0m-;y}@<0%T9Ig33wxT(0DX%lvt+h`iWVwtV#v&K`Uj{3c' );
define( 'LOGGED_IN_SALT',   '6zRYfYkQ_dVLRbYU.2G6Gj^D- F?i&V|r0e-^cpD$y5Ox4VKx,K7N}$N#tg3xqT/' );
define( 'NONCE_SALT',       '3&fZA%I~ZfLwf~SI`}Bq?j{WxRdqWQOd[Zjcxw)7_uY&,4f5/ <SuZy&*%}H~@dy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
