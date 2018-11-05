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
define('DB_NAME', 'bootstraptowordpress');

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
define('AUTH_KEY',         'ls>E|nhEaKR2,GzVh>T>M3jDU9d|I8Fbob)COBC-i}b:x5q_W#Ah$EZFd&7Em-Ps');
define('SECURE_AUTH_KEY',  '(Q_*3P,_xz0NkKhGfiYJ6c!^IuW?JVDabqtb`[JH*EjB78E|G<V0y~[Z|qYk6 r)');
define('LOGGED_IN_KEY',    'b-6 K BA5]AV:U(|NctCj!$GhG/eY&lO9OP{{PY],!8{l{e|44d`6UeNYd8kq34/');
define('NONCE_KEY',        'M3~fA2dCyR3?wh;uUYv]d4.Ss)~ZY@h-|E59QO,!O<rZ8UWpFVT OCse~<5C(~9_');
define('AUTH_SALT',        '65lImx9We=oXV(alEir_k>$i9zQrU@XB;N}2T1}eqz?HOx.qBUh|_EA,/W[e57_f');
define('SECURE_AUTH_SALT', 'WPB)S1GY!&1QjE%TTBt@5_9!HK<qc7/iz>}zcXAi8t!|y=L[wBMbtS$qdsYj4HW:');
define('LOGGED_IN_SALT',   'zw^|Pi._){ |9+7|P/=GYbP9B,Q>oKgBk17hcN>U&Bi{v)4/if[dM m!/b0.i(y,');
define('NONCE_SALT',       '@uge@j<w{7Qm3x-2#nM-AqFkf^</a7]4A/:~Ro<8@:xG;>oj#R5ruw@<bI-.],oX');

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
