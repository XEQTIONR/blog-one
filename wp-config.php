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
define('DB_NAME', 'blog_db');

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
define('AUTH_KEY',         'V, y%7,C+E-fplziaA{NS3MPBfYc?qspA8uon4]R |NXKO>CTS[k[O9<SZdG;G|y');
define('SECURE_AUTH_KEY',  '#(Djk2s!}R*MYlX$u?A0nmJ(#4SVc7YvMn 921s]f;TbuEC}zqvU*EC8#Z/8FT l');
define('LOGGED_IN_KEY',    'dO ]UMFKzf05H[pE1${/UgPAL$izEJV1Rr9P55u^Ah9z=W9QL&,gy33):l,3/]vC');
define('NONCE_KEY',        '?2KTM-B&DrYY:KpO.Xx[$}t8V7;X#sB3<G2YAxUKM~;,x~Bhz)Ory:^l&GzhKiNj');
define('AUTH_SALT',        '}Y*,*Ckq0)y i1W&3m7h.}(pyAtdeJQ[gykH;5LJ@:8OY t>#$lTr!_:3l]*ym|q');
define('SECURE_AUTH_SALT', 'PX{+~/ p]Adx~~ggP+K<1BC/w;>I!HwyPq{u<_D0U,Dl-2C{Jq_>$nk;BYZb^h=K');
define('LOGGED_IN_SALT',   'a&BO=k[AQlQ*bQ@1.YGZn_D#O4:]W?-I#U+TM0iAji Z0l,S]TATf%HwcCVNcV0S');
define('NONCE_SALT',       '01j?:fprFsS/lBxP:u:cBjgCG`fmKFo90%Y@?XGpNG3,u}2;L@y+541dfXd#R0T1');

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
