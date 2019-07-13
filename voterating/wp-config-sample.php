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
define('DB_NAME', 'voterating');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ',3,CiG/#d-57#M9w)>saZ_Wa}co$lL/&U@(vkYF~$+ZK_x+=0Z.NxK,gQq8U+#/w');
define('SECURE_AUTH_KEY',  '!{Fa(/*X+_9S;|>>4M=7QiVr)0K<su]|:X|sKVUw F1|%)G`wRZ:96`=-lDB8_.u');
define('LOGGED_IN_KEY',    'qpI]yFj.2>eZ+Tm1(A`|`v[NPSI4!i1GII{],rIR?oaY^?}?$^F7]^U(w[4vI=dg');
define('NONCE_KEY',        '$sc]+RF>%:]|>I8)!F%G9#<+2)lSCu<z]~<I/774w,F?d /B*FhJ=,rNZZ}N4pj*');
define('AUTH_SALT',        '=kEql>e9M|2|hN(rR3]x}UdDTiAj{m2ZP9G+-X=z,q>aMX nE*NK)->y^8=%f{+p');
define('SECURE_AUTH_SALT', 'dktRgq<r!{KGu[4U$NAF&M!UHi1QknlU=+>+23It_QIb(pN,,f0F_|+,6&4Ax.Qa');
define('LOGGED_IN_SALT',   'd8B$Y~L4u+M.j5qB2:`<:jAR>NY1q%0)ZDzCtDMu/uAaG;B5|-f.Km`% ;@zVMn+');
define('NONCE_SALT',       'U]#6sv@4w2Qs> zB+ap8K()4eTOl7I>anYly:*yRB)5{T|,QPDZRMCkI-hs:/fY_');

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
