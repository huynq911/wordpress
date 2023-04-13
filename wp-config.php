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
define( 'DB_NAME', 'lanhodiep' );

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
define( 'AUTH_KEY',         '~rMh5 8;^ 7n?OnpL=|10t9z[HTp(<@a@5;MHK,Kr~L[C=|8LA9|W^y`t(OA_IL@' );
define( 'SECURE_AUTH_KEY',  'fHx7`m#]U,4[3,W]A4MLN=$9FYl&s0=4NjkB7sF<.Ly3LCN/5~AG7EXe a!fQnNA' );
define( 'LOGGED_IN_KEY',    'TS%B[{EV`S.o9tw;h#:=-$f/!5K/@&dd[[#F/`XPn:KIfM/-=cN@)t+O4YGnV>]&' );
define( 'NONCE_KEY',        'Z^qlUrJE}10+eV-Z&4,Xk-$DQ^iMZ,9nU7@1V)wREO2UJ62U`<*ZoNnjLu_&y](Z' );
define( 'AUTH_SALT',        'FId0hE@F=zv5FZl QQ}HP,p@GA7DBx0J0YKb~DHeUsr+=9h9k)}/8zAgy=!F98|J' );
define( 'SECURE_AUTH_SALT', 'y?ER[:ysrX6>]+]SLEraP2@Uqan)1AuM,`ojrK|A8c`HN+n{A|S?RIkv(G<$,iAe' );
define( 'LOGGED_IN_SALT',   'A$`(|oY!~{#l?+2HUu1UoUcrjs&*E>o;|^7ME? @FlA):&_RN`SIH#pz3UMi7FBR' );
define( 'NONCE_SALT',       '3kWD0baA6~,xU6r8g~JuAF$N{9lx89.IPH@VM@!U(z0B_:0[hdBW_5&^,8^%`A3B' );

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
