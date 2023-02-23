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
define( 'DB_NAME', 'mob' );

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
define( 'AUTH_KEY',         'L:0]i?T_IaDKtc;E[W&I5O=*?Y+</soFn[.2%K&B1k>LGzi:Jgo!.|t}WBCUZ_C/' );
define( 'SECURE_AUTH_KEY',  'C6(iVO!k8Gm#&|Zhtfq]ibbB=@%Yeib,=hSsqkQ=n./?P@f>n:}+x//d_#tf; Ny' );
define( 'LOGGED_IN_KEY',    'z2s_n0N/{&BRZHqz1ON|KANu,Z8M%<>$^a0(97Z`@4>rtg<A3siN8T$3v{TRUAj&' );
define( 'NONCE_KEY',        'S`*R75XMj;g$5K`ei}rRNFwt0E~hr/R,oR&v3v|}VEkw*-N0<m&qAx*S2~qv@V6m' );
define( 'AUTH_SALT',        '@tJukma:vbJ<3nW5_fXe;KdpqjlJ>LOGwzlAG_:}ViRz>=COm15I`$]`a].LfK6*' );
define( 'SECURE_AUTH_SALT', 'l^xr:tlj/iS?cBv.AN;cZCJ|X>!k@D{LlW3N]sh^6hoEe;So--[N~(gmt?G|Z`fj' );
define( 'LOGGED_IN_SALT',   'R_]lR3LUr-M+XroJbg?#U5(PzJw]3KO9 3x4tMZWvb^QYCZai{9}mQy:ioG2cReI' );
define( 'NONCE_SALT',       'rlG%_)TbS=6mpK&-y{e2UE=,X[]^wGmvuJ>tRdnKVN+?`5x|@Vf~%Pi!-S0F.$)1' );

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
