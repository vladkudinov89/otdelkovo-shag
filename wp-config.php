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
define('DB_NAME', 'wp-database-test');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'asutpdp3');

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
define('AUTH_KEY',         '7iX>PiMOW}pHfrE1ea H;CN;X$jh_u.!;ZD7 F,ifuP)d?+jp0kbf}enWo{JE2la');
define('SECURE_AUTH_KEY',  '}U.v#9*DSFZJo|1+S3s)vBQX)N^MhNc{4KZWCnt6gz=8+2,9<eoC0v+yV:~UG^86');
define('LOGGED_IN_KEY',    '8yXWwv}ic]n(8w2^b{ Nf;ni`wH3>(Q4gds!.[-?^B==sF:||S9h4ZYZ|r Dw6+R');
define('NONCE_KEY',        ';Kx>5,GCasyqnX)b4mx{-pM.xB4}qE8|bvj!M2NC.9)zK0dYml)!QDTT-P5~,sGD');
define('AUTH_SALT',        '#O*i=;^WF)wQ!dTg AjIlk-y5qR;0rulp;l%.ByjJiht*+X=OlQOmxcgwmVAMM]^');
define('SECURE_AUTH_SALT', 'a0q.A.5HE&*aw,QPQpSp&.F*@%YXQ(*`wbgW@n9B `Uy6RgI>l+rMr3RI2edJ<bx');
define('LOGGED_IN_SALT',   '}|n%<>n&L:J,}<)i/=m^AE%5G_vK/KwzGgJ=Z,Z/}2sb{L&Qp@#G&y>}6IrWjE0W');
define('NONCE_SALT',       ',4,00%*f)6lbn7mJ!hGoKP %sze!j!>=-8j`S0@up;}A J{Zr(OPIT(Y3/V.WpTZ');

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
