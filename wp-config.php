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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         'UlLL)Zt?#:.lEq>MGS,oy40.9/X#gFvc#x-~|56If2n<Zy:wE1W~rY_JeVf.M-=Q' );
define( 'SECURE_AUTH_KEY',  'X7#]<s%-_zkt`)XFWTKzupIQ)Ia[K&=j}:6Jy9NobGbf8}=#p4H`jTvI_(E=@%E[' );
define( 'LOGGED_IN_KEY',    'pO=G$r$m67_P)LuvqdlQ(k-rt&`ag?k$PPiFswb]1LI:g%(Ru*^1r$=VJ-3Q&ZD?' );
define( 'NONCE_KEY',        'GA^8x9|*dOu)p{Uai+&%fTdCY8i?x&%1oBp(VY{v5-}(/ud`peE6}+20z>_CG(Zv' );
define( 'AUTH_SALT',        'k*3 !9Do+Sp}vN2ybH6r-F;&u(3#]XXg(.}A,6 l.a&}(QIr%zy,8n4d:|ZsG*F3' );
define( 'SECURE_AUTH_SALT', '[d/c{H%@P0&wVjhq)B/Y4<0(hh7K2>I/u:@&&KJ-XBh&<G5to^j$ E:78L@AI~:o' );
define( 'LOGGED_IN_SALT',   '3O_m-u7(O*-P`&FQ%NCv=V_1vu0W{0?d$H7;M^3(>x;TtFI= )6uf20^]wm/!Y/w' );
define( 'NONCE_SALT',       'k8ouuaN34V<IO4LM>oj4O1R,I^K@RMe2Z2[=A}hnbgM7ot=4<F4}|S|Y_n~}m66[' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
