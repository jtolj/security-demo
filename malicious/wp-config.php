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
define('DB_NAME', 'security_malicious');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         '/UoOLsy|<tv<Sc.&UuB&sF>hV-A8:RWH&F6Q`Vn [ukK)w!r9A%?ejO*Ua_:oM?T');
define('SECURE_AUTH_KEY',  '-@B{:~CH`o[dii%B^8Oaz?Y7<8//9{Ga~ZdK0/!)bDldcvRXuLl!`P}2-$3>&XwJ');
define('LOGGED_IN_KEY',    '`.xlM.:&iDxOjHLjf1OZ>xeJX`6nN=*kKctV[Y}>?*9pr!+]TsfJeGO#)<4@Z,-}');
define('NONCE_KEY',        'q0lV|&78>i[_0}a?)^~O)c8ghz5Vb.KBSy_EluFG$>;XIMP/CV9T?=j%!rZ5qb*{');
define('AUTH_SALT',        'G_]r<LXe$TI@4aI,xP^Ym}s{Mr:_ACLy$@$LJcK!5Rg?Q%Ym{8H]EvY1gUv|H+xE');
define('SECURE_AUTH_SALT', '2`>?0F2P}s?.lc{GEz)#afosdf2*|NaBhP{^tuU,&6HRTQt;i{zs2&g/R%l%83!@');
define('LOGGED_IN_SALT',   'Qc(=%N8_!(TuXNcrHzR!]]@8~gkm H(We6qKDI;OOKleW8=QN:,l$[f>Co@bYWae');
define('NONCE_SALT',       ';3Pz?V{}W;jbT`cEs m/oXyW$.}Jt4_>nX6t[9h6Qk0??{dW<KTS:$Q0x7ET9Q#!');

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
