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
define('DB_NAME', 'wordpress_divi');

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
define('AUTH_KEY',         'jste.eL<_Vsw^cX(RmGHQ]*<H0e9J>z>?mk,ocu2,.1n#RU).0k9HROJi0WW>2(_');
define('SECURE_AUTH_KEY',  '2I(;Au,a.g$.0!hI.Tfc])}MxOsnxYuP^i5j$>ypg;!Mi#=kNJv<GW}hZ1WyVX%S');
define('LOGGED_IN_KEY',    '~+m`2(lu@qS49Y^xPurW;(g<1e~729exI|FfQLmAT-,-jitez/i4~(XyQU)wo-~X');
define('NONCE_KEY',        'V*a)t5^CDZ+mo(SBF&;rd>jU$,em7)zA,,926 HxLHx-XkYTa(ca- <|_U?UAXh6');
define('AUTH_SALT',        'zo<>2(COw|[c1] z{ApH<ApN8c]-?$#fg31/;e$n$ZEo~n$gfJ[*5:@kOc#rka4^');
define('SECURE_AUTH_SALT', ']iYqB*`XK^7oHAXY!TsnYF0mo^{7d^6b07K%D{lJ!Q<|p$3b>C_MWa;MXczan%Vi');
define('LOGGED_IN_SALT',   '8&%HuEVY-2V0btdus>I6j(;Q7EjA9jQfQ@vX~i{sB`>-Lfb;|>jzJU{,q7s/FJ;D');
define('NONCE_SALT',       'MX3sf,O&Lx4X--l^rHw3#zx{f,+Kac8r`K7[Zh?7a{^+^9Mf6nx3d:8|(JS6]8TR');

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
