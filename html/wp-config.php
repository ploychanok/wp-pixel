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
define( 'DB_NAME', 'wp-pixel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'buzzwoo' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N,I>KsHA=c?$p,qWz]Y12u:L9n+e?-1jQhYrXs1*o&GnPQjJurSR7]2E/Qgq&esp' );
define( 'SECURE_AUTH_KEY',  'WuYJ~4X*UEtBcv|[kG4)$A~={/{+YpFD(tvi&ju?U/28An@>f3EcQvB`SGqF;Z=8' );
define( 'LOGGED_IN_KEY',    'c1^<hOB.nr%9N`-4z%%2.R?%Y89x(B?F(~OGH2.sx%[~9W[<~I.w0_Q-,h^Z8STN' );
define( 'NONCE_KEY',        'yoUdRRix~t9psYcrc(2IDDPp/rdV_gqhQYk0 ~Duo64IQ:36,VProJI)`R{U3W_z' );
define( 'AUTH_SALT',        'G%gS&lbWH#ct8=EzG6E2L-^@iw7|GEb?UUjJ$@%8~@)d6QGG_v-?Vh#~ov0`o+gb' );
define( 'SECURE_AUTH_SALT', '?%;<`C{>x%vwTpF?yR~KLw</P5I?(fxOmhMn:G/9S(~Y[Us0;5aK7Ytm(}.RfO@;' );
define( 'LOGGED_IN_SALT',   '/Abv;pr=H6]ufJtr6;mE{U?/o[fc,ER_f$pjIA@p`Jj.;rex>?z1%3+f-@4MrWxC' );
define( 'NONCE_SALT',       '{lsSP5 xcUXR`25|)aH<&d-H;oKO&ttu9c=BZ]XU|ql@x`=qD5j#)l|`5DP=9pDS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
