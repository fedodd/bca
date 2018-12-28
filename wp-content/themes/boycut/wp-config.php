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
define('DB_NAME', 'bca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'samepass');

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
define('AUTH_KEY',         'SD1.Jjm<DK1}unJOkaL^8{;14~(f]n;Q7ryrv[qt^@}eQC6L)?=Xc<7AVuo>%s*b');
define('SECURE_AUTH_KEY',  '%#YP5z+6CW^IzJ (-}Z5^eYYpzP2lDQ3DWYQS7E{$}7qq_-@}?d^bSwd9JAeG|D[');
define('LOGGED_IN_KEY',    '[)C*)IS%<*k#A[](0G[GtsJ!.B5MuR3mvdyGA{5~<?%Wxu:rBezmMm(8N;@Wz9sm');
define('NONCE_KEY',        'L)A(ltgTD?*Q0Yl-(&KA3 r*5*3`Mvc4Q;Ex^VA:|$Z1*} qqJTjV:&cn?03|oU>');
define('AUTH_SALT',        'ZZ[LT3Cs._YPh PyS#v1Z1}q%P5sV]fiR?F,M1E@e=_&iV5Pz}@#kwwY[-eB<t=#');
define('SECURE_AUTH_SALT', 'bll` lHS,[rB0qyN):61&:dFusb[rC~5sA+BCqh;5;ai@<<j[eibs3D;O0n)T[C_');
define('LOGGED_IN_SALT',   'fQ|j==/rM/Q}$sMvtu@v2e~ba*oSPvzw[oE8nsoGJ8K~Oe:!jw>Fi]_:zu0&.vxJ');
define('NONCE_SALT',       'C^lpKOT~qv~ar?(ccd%mQ] A+1frL6e/]]mw4rRG0?Bj~s1 -1.($d~Xkl8F{nEZ');

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

