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
define('AUTH_KEY',         'JWY|%6Vcfv-$!wq|}7`@uO}-gxR#qv$4^3~RI[8s0Sij_giBG $tkP|SKI>.ufNr');
define('SECURE_AUTH_KEY',  'U?~xDOA7kw0/=;s5w5$Fr%i%pOhkYO%C*--)E}tpF!PZygq52ysA+)FU4b@SMy.>');
define('LOGGED_IN_KEY',    'o_1R<N[]|WcQ-01GAnE1H-io!C2he;;W=/HnHY=x6l6-{JvWT-2w9Dvmi-DOK *;');
define('NONCE_KEY',        'C7]ZF8 92$(<w xg^j8HZ^L3#MGLC9,LsZwJ*SsTGCMKO/X1#GthAj*D`O%zx8i6');
define('AUTH_SALT',        '~8Zae<;]KPCv_E,^=la^wszC0b~)oQdi@~Mo&kC{/=-gyWvJk:K&1`Q9{z-iU# o');
define('SECURE_AUTH_SALT', '6s~/D1goYYkWV2b~JBMo@?=zwQ{1buTB`-Ez(Q-zsS-}-2|9uXn]Yi*[}.$T-1fk');
define('LOGGED_IN_SALT',   '{+$4tU_CU!i45&%d?.DFMo[)}+,F#K5N3c$mKJbMk,5Rml~[mMQ{9C-qdFltUpEp');
define('NONCE_SALT',       '>I84pR@Kc1$;$sch,BK@o|$9f_25%M2S^`[HQ6vHw/6</}BXSu1Y0rw6Cm^g}z61');

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
