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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':i{&MQ(X3qDuJA>?C:j9IcB@>hm:k~98DZTgt_ttNflZk/fE(9(oDeG4%Av}V16H' );
define( 'SECURE_AUTH_KEY',  '|*TTUyAG.,)&/Esi0=Y6@RvSzf#8WW?~yw77!$dM#OQK!KY|>C^CM`@+McM2r3<9' );
define( 'LOGGED_IN_KEY',    'i4$odx-e.$VgK/ja}VgY,MaA|vVr|3%#9TAaYT/,: 4$+NqF(<sL6SZ/7=iY{#2b' );
define( 'NONCE_KEY',        'q/CvQ</dap4g3p+o(ys+D@-wWg9cY?)/<lsZSMad?!n3=cdWK7xc2@k#%,|qm%W4' );
define( 'AUTH_SALT',        '79T5p$[??TTMG|omjs{sZC5ifrFf|[&9L~b$O+bjT;1inZQv*zcD5ZIq[=[0zGn&' );
define( 'SECURE_AUTH_SALT', 'E[_H,In#8~Ng`d1:5mKh~rGYA6ERE4~1~dy:eaO3y#I{<T<;I<@B#Ju>3&{{2&M~' );
define( 'LOGGED_IN_SALT',   'NZI$BKw%fZH1./hY^&$DH+f}|RwUAd{RUnPS&NZQSaKL`Gja3%0wW.675Vx#:k^n' );
define( 'NONCE_SALT',       '?pL<2zv0^_i^|(yUf|0`?[6@gJfbZZ{9Q#.geSt?^:tz/G}.._of~z?Rt_~qF5CO' );

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
