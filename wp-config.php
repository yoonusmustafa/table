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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fwl' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>E}E$lHCJWu<w@6bwRQFhiRi7]*fTtI`biqV{K>]Bnn>DbSd*yO)t^/Knlg3;cKM');
	define('SECURE_AUTH_KEY',  '=7w0;E6eUb/%?.Vlnl&P9ZKk#MJ|Cu.jAC@W2<Y09E2@#9o HA&ssrl/d!Li~+QA');
	define('LOGGED_IN_KEY',    'i8YRc+HUeD|RfTMdXY<R,`6tf4t6h*r?Ucm^jDtTO$w%wsl1f[<B|?r%7{w8+Ph/');
	define('NONCE_KEY',        'CZCQ,L+E~}9`vuSu7~{M$#h5$D#vw-]vBA_|Q}mng[(V8eq`=sr~[UZ&ZI!,CYua');
	define('AUTH_SALT',        ':G<WioQBLR465d` 5d+c6TOU)==F7|)41Mk5b?FB4}`Hqi a>:RttsW mc5:gZbm');
	define('SECURE_AUTH_SALT', ',rnhl,,lCck76eFP6_{~1|Sv2Y,#2g3Mhn?QuV[vnFzH|X@|UB!K.krep^<!^aWf');
	define('LOGGED_IN_SALT',   '6vV?Hv =*&uJt:Bux >(4m#xpdMxk*ajnxIdb5iI;%&U9v@o2NXLD%;/c&S-l1PV');
	define('NONCE_SALT',       '&-uv%pN9+70h_Q/n1+-gu`ljuw_}0Sz#+X2/V10n44Fp0$ioILntU<1#F.w6<0i$');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
