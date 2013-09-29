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
define('DB_NAME', 'calsteel');

/** MySQL database username */
define('DB_USER', 'calsteel');

/** MySQL database password */
define('DB_PASSWORD', 'V7sl324U5UgBEnTb8sLw');

/** MySQL hostname */
define('DB_HOST', 'mysql.ocf.berkeley.edu');

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
define('AUTH_KEY',         '@@l<?Uel[{q+R:nSR{/M_D%K;!Dol+A_7f[BQ5Jvwbm(dU66vQ--jC{p {>^-E|d');
define('SECURE_AUTH_KEY',  'gb$!u3F916jh1lY@9H;:he5uFHP,5.K/HkgE+XG+LI`(~#!)]H}w^xFkoR}UDP9w');
define('LOGGED_IN_KEY',    '(95)+_PcAf}Na+ohtTK^sA9pO RtRXt_&tf^*ED`D[}nkC_>(>dku-q-[~+s5OoP');
define('NONCE_KEY',        's;FIG$76--R+E%;Ro Z=K]&^9kK(k+MmNS#CXE|,SCh=0VS-x+:Cd:wzc|E`A/Mz');
define('AUTH_SALT',        '$$mJ?#l|..|GbRf),%+zv=lwq@a^pPuUp2{I&)h@ ;v>>|Sv;||nz+]q4OuQxk]3');
define('SECURE_AUTH_SALT', 'Z<b@||4`8^Z=07|oaB^2O1h{E,y8e(YUa#cm%T!bS$YLE.4arQw]1;|R<i<XY6H`');
define('LOGGED_IN_SALT',   'V6NVA4V8m~-NdyV (dsgFuc+2y=.Q^O{B^;u9;Qc,$@%DFSXO~x@Q.yzrH4KLxa-');
define('NONCE_SALT',       'V)oH;M`DQ!^A`U-qn;@&Ueeb?Gb{bn.Gwdxw,-=={*X< -od|_!@`%Y^C{I`.Wj>');

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
