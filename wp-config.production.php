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


$protocol = "http://";
if( isset($_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != "off" ) {
  $protocol = "https://";
}

define('WP_SITEURL', $protocol . $_SERVER['HTTP_HOST']);
define('WP_HOME', $protocol . $_SERVER['HTTP_HOST']);

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'XXXXXX_prod');

/** MySQL database username */
define('DB_USER', 'XXXXXX');

/** MySQL database password */
define('DB_PASSWORD', 'XXXXXX');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' HJg1Zr%&SNyY%XY8XU|IoaYR`L:a+;rv|kf`I-S>E4?GeiWx~Px XPqfsaV9@)7');
define('SECURE_AUTH_KEY',  'kMyQQ&cKSw><Xo?Q;TIi9$AU@~|c%`qq%<`^4mDJ4|jhw<E<i(CBpq=zE{Dn/Z$o');
define('LOGGED_IN_KEY',    ';a`)-Mz2FCAd%04AkM|&7YF+ &4pgl8MiPt4YL/%_1{m7vm}/Q#(58Sq1>h7tK`#');
define('NONCE_KEY',        '#M;yD}!(2u~$ppxUT&]=qim+F`2w13 .jA]{Uz-A%C#L=7+eW@kMGAm29F_7Eks*');
define('AUTH_SALT',        'peu@?V/vX3,`?h-(@LW8<L!NV}:])&d#XM`1XX5]P;%J[82z/6|&bV>3eo(8KlxV');
define('SECURE_AUTH_SALT', '{|jPk 1`@C*-DlnY1)~[*t9l0xidgm0/_WX2PDIPg2k]3Z Y*hsxM!/s^;&EB)|y');
define('LOGGED_IN_SALT',   '[<4I1[:R| f@LA-lGv:ZL J<ncwNkvgRD@I/rk2O:Rl |1>.R9+/+e^_W?[#5qK=');
define('NONCE_SALT',       'iy gJOL!d7iHb(7=n}r4bO]xrI4S_d*wY_?-vRaI-F2Z0s}CNUUVP-y)z3q!rbaW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
