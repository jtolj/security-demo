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
define('DB_NAME', 'security_innocent');

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
define('AUTH_KEY',         'Ke`s#pN~^N9u4*Ju8]rn+f $b@1a3J& qU9c+7FR5K={HjPH/2Sef@60LPr73xJg');
define('SECURE_AUTH_KEY',  'MIC;xjrcL,Ja=teE(3xF0F4CCf[<TQMk-|MP]6[h<PZ.T#D/CU.=hyv=+CA!>]U;');
define('LOGGED_IN_KEY',    'lC/&kN;})L+-0c9c)J *`HrhoZi ,vskvzIHD~r^_`shT $:gy16X8![)echa|ke');
define('NONCE_KEY',        ',DxJQZ,A8nN49 uHMtelHypt]a* i,<Y$]UA4Ao.zcyIH*#>|Rn/ntu&V w(@:;z');
define('AUTH_SALT',        '%W=`FDBxqaHiO{2YgI$*]zf5wIK.SACi:I];zRovt&yyO*w(q@@PbA1)m-1>PYk$');
define('SECURE_AUTH_SALT', 'Upfz0{dnvS)C`EZ<NYQGee*n$9Mse4x&-u!j}QJ W?_IZWC;L}PlI[pAiOOzreei');
define('LOGGED_IN_SALT',   'phhxb3zt/N~M($<Gs10=rMV>59V1~Db&y{>/#9q9uuSiBB9-,:Rzx#L}sM<Pnh[%');
define('NONCE_SALT',       'U#9EM4/u8=Os)9,&A~z67Q5%#r0 F>hU2DOJ6Ln/>(&+nG$f(6CXFM%]CTeV<0Q;');

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
