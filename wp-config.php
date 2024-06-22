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
define( 'DB_NAME', 'dha' );

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
define( 'AUTH_KEY',         'c]D_&K>S4bp49$J`J tx0}R[az,i*KeM15&a./sb0[x1Fya$w-AX{.l~+66E8?@U' );
define( 'SECURE_AUTH_KEY',  ';m)&h_9.T[3<eW:?M`PiCI/tW5YJ}JC/zp3^mZ74,cu}$2jTqe#>FVG._%|,bh:0' );
define( 'LOGGED_IN_KEY',    '6Gf-cZ8 R2yYd7G1B;zs(Y2iTS<o)7b,d-eFP_7G>6&!{MbM_c]n6h0fNP>d12ve' );
define( 'NONCE_KEY',        'O&lOx0`L<pu4MX)EGZ&a)JY j1T{q*M+=05Dz>>!I0Gl/Wnwg!^_TCjm@Fh;7rB6' );
define( 'AUTH_SALT',        'SoR#JK^E9gvV4IoQpToW?5BNGT,k0?YEo,<:QVcro95r6sS$-=u]}+jXg*&_$qFE' );
define( 'SECURE_AUTH_SALT', ':b{)QQz` L2H}&)),.uY1D2}v`(hNW#@_Q7Z(>;cCQ!PgDt_>hgo/2hE8_Gwg/7T' );
define( 'LOGGED_IN_SALT',   '~:}$nbT4cdffDjI)zGwn:mll=;2+<xIF1Z<-P`]T$ ^k!XDvlG7GCNbg/Re_BS3O' );
define( 'NONCE_SALT',       'U0|=RE00G*90f=YYJmdvvFSnj^d&^;nMbz0B)n&N{R41Lf _84MYI:,hcj`f9ZE2' );

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
