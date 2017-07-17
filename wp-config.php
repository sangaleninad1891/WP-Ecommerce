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
define('DB_NAME', 'wp-ecom-shopisle');

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
define('AUTH_KEY',         'YB^X)4!wEpu;8Ev_:W)`h^ i(&!2WAnDZH;M$UsUSK@#F+{j_0=6z;c&@*-Bf)5G');
define('SECURE_AUTH_KEY',  'mbS?4KQ[p*9GS[6@FW~5~R2zX4yCM02hGpnU7Qs%1L70rBa vKMQHN4$GEemQH~F');
define('LOGGED_IN_KEY',    'QiwILQ@_yx1@rW|P.0n8zgt_;+tRJWgcPW`MZahjnyt#>:>qK37HR4#5*XlOvHon');
define('NONCE_KEY',        'zm[ az{x|hSv@T%]`,N|8~HzB#>#,UaRQ+obpB[DH3eLIg~Z(a{=#9:Iq`^G7a8#');
define('AUTH_SALT',        'OVb{=:ZGp$@4p=:S*C>(sG9r W0m@L1`T@Ih)kV4KBJ8t`)+uP9E(bl_]1I$>?j ');
define('SECURE_AUTH_SALT', '3NmjCjICTlCp4rYDA>tBg/*}qeH7hXY`*ay3yPx={D1~ v.D^Nj$#C0Sph0(F6N#');
define('LOGGED_IN_SALT',   ';es4~BXTUK;INrKhj~}ohXx~eK1<Sz/yW%9XY2*3@qvDGqUIxbAyNp*=3~#;`.,!');
define('NONCE_SALT',       'G*2q0nTWpH,uk(LtoZH82 Sb<WuBjp*1o95G(Rsr/9ye-DCJi$8BA82~qYT,J(wH');

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
