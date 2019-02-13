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
define('DB_NAME', 'mySelf');

/** MySQL database username */
define('DB_USER', 'furhaslocal');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '1T2+4%a7*%[o ;i=(<(*]b=l_~GVX)yineg_Q&v:u^h_`<ojH~T*YiCghzYz<h3*');
define('SECURE_AUTH_KEY',  '#U[>+Zj N+BGZ;!^doyH@?4iZO&#C3EiOZ-/IJ4K}dzV+#xz_7xr8+nZmkiD_5fE');
define('LOGGED_IN_KEY',    'S$`$e+k^D %@,G)18o@?nofgc_Y8qqy:1*c_RjINPxaUV izafRPJWsCYxU/G Ab');
define('NONCE_KEY',        '/ CR<bxLftb=v;L5sBdvHCnO}aM>{b[z~e@a{j8>;-dH6S-_e:!pl:.I$-]gq kR');
define('AUTH_SALT',        's=3l^{_DB.+bD+c-4vXCVMDM9|DTFAW*WKI(>OZaerpZ]baVmeHLQ$lqEp;&[e)T');
define('SECURE_AUTH_SALT', '_q}I**b7tZ*^&;n-I{T)Y[e.6}eKXXsoZHRQwaRDK`x!CP9M=UR0kH/ON`aW&4)-');
define('LOGGED_IN_SALT',   '88vj7q<+:|[uGPv6~SFmA9 dmmMC5=bjTsz`A_MItN.~Qk3.R6Uq}iP.B}7pzLot');
define('NONCE_SALT',       '&RnLOhTlgc0p;XjnYr%Yj^7x^4g8#1We_hrbg0u5--~MXI+_WKiTP:$dd^[Hf*8|');

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
