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
define('DB_NAME', 'fusion-arte');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '~9[Zq7WbKn`Y_pqt[[J8>DhBTAue(vnpxP&pT,P3g;a6zQBaq|?vZ-39N6H<S,B.');
define('SECURE_AUTH_KEY',  '!V-BN6Zt{-Hd:PK#@mI$B8Sdz]m1EZHf kIJ.![X?$*Ls8<@k$nXZ3`@Bwg?:{>i');
define('LOGGED_IN_KEY',    '@j~uHrJ[ [o0QZmnvI%T5HW5)93DWo+n?;P`&u;:42l*W7Y7ffDocV)XUi}w7rCC');
define('NONCE_KEY',        'N{pYo@D>8_(T?AakZ;]-|.5C[ q bsk6|HFP9megQxT(x4yVCV^LIJ$QAw|.X %P');
define('AUTH_SALT',        '!F{-UtW$Pay]/:@kdrFmaorIS&@`jl/n1_:,%4j(DKcnbi?hQe&~nAeB6V.`.)/;');
define('SECURE_AUTH_SALT', ',;Z.m<TDG6XFms$Gr v<`?K?zA!|^EBT 8a-!ce4U6lSlX6m]w0VIPGM.hWBN`-U');
define('LOGGED_IN_SALT',   '=p.r<VN-<Q96*Z,_e)v%~Pnr>=i[T5U?+(,-d/q&<79@IO!F7zq_QEe;Zns8&!:N');
define('NONCE_SALT',       '|5u4I_T8~w[L6=?[&-2<O`n-,uglPXH>z%rF3?x??Of{F0q_xD,C[0a(z^U`j@VY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
