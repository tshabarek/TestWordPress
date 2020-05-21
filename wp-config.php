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
define( 'DB_NAME', 'testwordpress_dp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'w7>di9GqH(y4q+RXS@y DI av:vDAoqm@:`~&_!]S|Gt%{H1Pe,WzvZo7RNkm9%r' );
define( 'SECURE_AUTH_KEY',  'bMy)dhWv#$L>M[nBADs#Ft%G[JJd6&mT>h5fVor]4V?(5n~8g7!AIZcUOK0Oum[_' );
define( 'LOGGED_IN_KEY',    'xd;hY9O,(%RavZfrO7%=kY}}Ad<% 9G zE=xpq),d7=aCfp@hW%tmkKC_qUd7}V3' );
define( 'NONCE_KEY',        'U,vJ]6tT8bMc{?Exq<%X$1^$tn6p} Hl$1b<PSD- ?T/f`f=Awx,I*+tw=koOR;j' );
define( 'AUTH_SALT',        '(IG2[bz4#wy%6 _pG.L]AbF(5 ZG9N!`(r+&u_}jTJ;Z]<TA$z%<^7CS73^;s3g-' );
define( 'SECURE_AUTH_SALT', 'ut%8Hzx`!`p]Y%{Ycj>wzBYZ[RP+m@bEg1d~DrPV:t*w4JR1z@p?5Ni(N{[G().L' );
define( 'LOGGED_IN_SALT',   'K**c#vpc{Dml!agHH,&Vmq=!x;Ve-{VLb>Z8g^OX!Q}DYL^)p}2bc8^Y5Dc#:V7p' );
define( 'NONCE_SALT',       '&DxC<]j8!M#`>:,8ShxT u:[.gXpw_ZVaMM5I7+JItUW-+&ArB.J!?j$A;U81Qs|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
