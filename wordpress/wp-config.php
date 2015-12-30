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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's6S@5j(eliY2<m4l+A=^c^^Yw-EI;vjONOp|=>bU|ZX4=-iAqifdr]D+m$(N~,$0');
define('SECURE_AUTH_KEY',  'B/zm|@cJ=e$Rz&vmNLHdGrA{b27ssf|1]8|[$-{%g6H&+eo[OEjz-nV8B|(rz^w?');
define('LOGGED_IN_KEY',    'c*CNBnK6]-5p!.ML/88izci)Lk< >q!C!~9P9.:S8+TtG+37cBU(5p^x-F7.(gNS');
define('NONCE_KEY',        'v@!Y&wr--_|j+2$0aMRWTk:u&^e1bMqrShlZh:c4) ~T/0q)28w |-[o06|1_J`{');
define('AUTH_SALT',        '9-xT+H>DqH418qYeEhP>S5ACXcTt12UZMYAqv]yN9yPeB)$=4oLlCt),K,U26|(3');
define('SECURE_AUTH_SALT', 'I{c7p8Fm_Ose,.T5^%{,sS;=(U]4w3R!>3hY/p2 oC82qKahH/|v!.|D=A!gSn-?');
define('LOGGED_IN_SALT',   'BJQ@BLR^*w-GV6(P>aW=~fsR&-af9EJ7Y8@X/>jJO+~>&exdT|(u-491l0kQJQ`;');
define('NONCE_SALT',       'R&?Cmw%u~P{s6[zS3$FdgNN(.1)5r;mBM%v_Rx40F#QSn<}BvuCO|(^P]_FrtUf^');

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
