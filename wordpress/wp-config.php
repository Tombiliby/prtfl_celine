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
define('DB_NAME', 'celine-tricart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kiY;M!R`)6^y0--2K$GJa6}qVoMzWDGC^A#LI-G.zo,!i[{Xba_U@[KWjZJ21l9s');
define('SECURE_AUTH_KEY',  'nl-?=7Ej,|]mlvhuk-o/Y2nuu3PLpwfn!!HYjzKDBQ|4!4kH^2C-hK28wvO6U2i^');
define('LOGGED_IN_KEY',    ')gM-{lI,8YS6LH/*Cglo4Bx`]VQtYyES.;bnc7B/He@avlQW;f]O%f&Y0gOQ.wK3');
define('NONCE_KEY',        'LLkL:@S2`;?ui*a+k_H<5EG,NVYl!dX54>k*:BK|(DhC)ntAl<(-}*>VlblX& ;=');
define('AUTH_SALT',        'p^lu&KWPL:jSmPZn{O.eDG8ymtt.82txah{LOS`;5|eD;Efa:F|Zn6nutU$P[6J&');
define('SECURE_AUTH_SALT', '^mcajro}*|(P`Dj,Yqos34V?hv#J|CU#^G1T@m$$P3`#2?p%ie%}h!&>#B-b@}bI');
define('LOGGED_IN_SALT',   'bNI)&cnbnpnb_F1.-5sw1,:gI@Sz]X.`[&Oa(`~.ZE.B.jv@#B^?KC4t~e~hz5wg');
define('NONCE_SALT',       'Y!j}0#U@YP {v0oR=hJ@^c[QS]Sh%(i<3Us,eH5Mx8+~zY(&;] GcWOLnZ+Yc7?Y');

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
