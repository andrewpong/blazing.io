<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blazingAv1MDp6u9');

/** MySQL database username */
define('DB_USER', 'awp');

/** MySQL database password */
define('DB_PASSWORD', 'Jq6aCZ*g7iYyzqi%TS*pYq*z');

/** MySQL hostname */
define('DB_HOST', 'roqrwcdzws.database.windows.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'L]a8yUB^j`_{P2eN?UVcfd3k)r{B,E<LhbAtX`$K5;2<B7,LZ@e<vmIU$K;0i4^?');
define('SECURE_AUTH_KEY',  '#_Z_8GY[w(znEy>[6utsHw< FC@DAjbjyvQhcqW=bH2akw8KVlWC_CE$[+2-C90[');
define('LOGGED_IN_KEY',    'TCmyz`Jj(I_}bV:FN}R<`(bRcOwv??<%RzoH<.3=,qm/ao_U@sEqn;e(:MOi29j2');
define('NONCE_KEY',        'RgN|V`Xy=R%JYgxX=2BLAPj)]V&,:+W<IQ{ixBOx`>?uzG~#o~..1EZsp}~Ef> E');
define('AUTH_SALT',        'CoOyJ><9dja:m;W]]VlRz&9% ;6^~61{E>q#4CHtj4Xjy=Y/1X!zJ,R.lQ.S{~Mi');
define('SECURE_AUTH_SALT', 'rHa(IoNthB^Mbe=*W_0wM87P6Senb>q(YS-5ftz))S{;Wtw~P E MXLVe0+)]`;}');
define('LOGGED_IN_SALT',   'c30qEso*bv!KB?SyNB_.j5hxE3_M]`z7%dqX8aX2/Cw(YvC(/~cr}?nTgQKY.x}*');
define('NONCE_SALT',       'eEQ=+DvSplW=5t)%ZE#1C/E88?xdg[kIRoOB,AoCzdH<rJeYnNF/_H.U>&PJcfN/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
