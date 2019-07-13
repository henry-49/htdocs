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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'bkNSU-lz2B<}G)g3X8VGa.)$9:F~pZxL~k}-}l]M&5{6Go&|Bv6CN];5rpo.;IUU');
define('SECURE_AUTH_KEY',  'mMQf1F#hK|>>)!qRSv=B0UhxQ?`v8U-|lwcFe,I4zv,e[u=zWY1RIu4)1BZ0<n${');
define('LOGGED_IN_KEY',    'ZzyWCbjPP?|CuE<,P2dX :^n1R4: LRw6--x_mj9:k#]Xh&<OCm/!N-lcn6C2-]O');
define('NONCE_KEY',        'Y2v!p0xDk-Xwa}mW;?ccP@eL7y@d}<gPcGs~*Sm+pQ<Z2`h<c.Cz=y=J(ND)9c7e');
define('AUTH_SALT',        '}dJ,6zdq?m?m52#~bTBcAqHe~yL6RlAFtNamL1TDKBku3kMmx`S*yzeb:S(eD3mh');
define('SECURE_AUTH_SALT', '><w!~O;C1e>xX~/N{EA8,oieh7;1edgLCX6&l>^!-lbSd`,a@0kvC8J0bm|%#_?0');
define('LOGGED_IN_SALT',   'ml&tRXk+B7,)zz-!! r[8`e&{^&Tbc2 ]m+,PJ9G5vy:2r,oZ{k`d ,?fI5-a=)d');
define('NONCE_SALT',       'kJ;6vcQbqMgxS{ShVLl`OUIx}L)1v,u(jO0]q0<*9ogH7,66kil%%z9[Kn 6N=Zk');

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
