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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\TestWordPress\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         '+~(eiG1PEml.vqYk2a;%MWjwn?G $OVN0z|o/$CyvFs3HD$0=#$K<hWki3v/_Di5' );
define( 'SECURE_AUTH_KEY',  'sM{?CR<798mjDU8CY,g(X[eetNwsv1cRdB]Isg[^U}UPy+G#T.OyaW<ywGiesqy]' );
define( 'LOGGED_IN_KEY',    'd!Q>[@XJ21B/ho{Ez,F)UFs|RvEXZ9:-iRsi*/~zC>*_;Y<ys:l$pQOu^&AML@yi' );
define( 'NONCE_KEY',        'v.m=*Br%IUn ~)U<K7M`TsZX<JoQ[+AU$K#`5I9U_7b;UhD`n.w?DC J m*f!<{u' );
define( 'AUTH_SALT',        'J;;;!h%QZ?!],.S5j=EFBu,($G+dB2y<g;X?|EkCT{@ (clD<YgE4ja&uL:g[ ).' );
define( 'SECURE_AUTH_SALT', 'RxVOngrXyF3@D.Fu-l}vyFTkj8N(};yRa27qF`*h:D$?$9sHR7w{~zNSYhOaZHEs' );
define( 'LOGGED_IN_SALT',   '-2p{v5ezZ9yHSbBj44CR|Bh+F>>L#Q+:LE+91~N;?i#-kcsCW/|Y+uK5Pj1(^FUg' );
define( 'NONCE_SALT',       'r]2/#CLr=SCEIK]of[_hcI}D#?#i([,[A]n[@!ZP$XhJe`xAX`RQ|SaVk]fLIzEh' );

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
