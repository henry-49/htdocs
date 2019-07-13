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
define('DB_NAME', 'wordpress_rsn');

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
define('AUTH_KEY',         'esuF]}m]W2W*J~yJ&=]+}$v,$ @741;yk}-3[OaZN 5~TNK(DoU)eaTO5[U!I|O*');
define('SECURE_AUTH_KEY',  'St<{FXT3td-d_G48;t04o5HctC#dTlCfw(fc&_J*a*w]$K0^E3epFeq* j9T;0e6');
define('LOGGED_IN_KEY',    'I:_-r90(d4Z8hUsW(R:g+NR`8*Jn]/ @z:RcAPEkZ|bD3TU}>GTZS^k?!b6Au-# ');
define('NONCE_KEY',        '3[?IU[xO37t1J:6^Xt=l::UTHsy8<^K*jgR~SCnCD7j?ohi^YGF`8s&!mlbZ]&~e');
define('AUTH_SALT',        'Sqrms<;FgG TwpDs0J@`ZKys#S6r)OkoiybWKZ#}!]}+Z(rNuE[u=WsDI&6.DDIt');
define('SECURE_AUTH_SALT', 't*36*a!BxrJ-b-Sn%^$HCGrOBlo9QAG]s4Xcb4SaKqM>{#,[@=6!;Ves%p~wjRT<');
define('LOGGED_IN_SALT',   '2QOBN[j39F*I2*d~kO<Iv3nn7!b,T_oo<ux#YQ8,%|~X35_ T;_&Fd %>i{4HT{U');
define('NONCE_SALT',       ',~!iTEi`U77]p1;`g[+0Mn8I5nX-i[^`R!uBr%Qv!^ZU:1&x$x;+/!Ej}15(fwdD');

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
