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
define( 'DB_NAME', 'cska_db' );

/** MySQL database username */
define( 'DB_USER', 'cska_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AyUlygkF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '1*4j0La56, rhcT156oTy{[r0=T,!><NG{H |vZ_N}C>N{:LSu[j9lK#}m-jiXF<' );
define( 'SECURE_AUTH_KEY',  'U4~zs(*h=SI5$Vd/@<18Wq3-(Cvqf8n*.d0! %::}LG7t;ISDt}?UI0p*w-197b}' );
define( 'LOGGED_IN_KEY',    'mN4P:B!JK30%3Yy=pqidr2{W&7D{Bec<#%e e`v8yB2%HW!xz5_xFIxASJBNWw,Y' );
define( 'NONCE_KEY',        'L@pY[~!{2n*sqNa/+h6!YGwflQ:]*cy!-p|E0RdFYR8(g<,wG=eg}s*@j]GC75Bi' );
define( 'AUTH_SALT',        'tET*{A<-Q]Q=Mt;HQ*ka] gL{U$gBWPw<oOh~x/pAqud/Ym6j=5EKDx~%Oy?gq-V' );
define( 'SECURE_AUTH_SALT', '2.!4t2t+XE$ pNR`fR?|Gea9GRZJ%$~q<2b6Eudad}]oDe2B/BJ0Di)f0DG;s%`|' );
define( 'LOGGED_IN_SALT',   ')h4&a-!8nDg9OnC`FC30J&8I~OVo+oB`f]+EdG]dp/hpJfO~S^iQ~iXwRUV~[/s2' );
define( 'NONCE_SALT',       'YhuK8v=]+H8qd&#:B+{%U_>}^<M.yZ]Omvpz9E1lsz5Das:S5-gbTBJ|:`M/gghU' );

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
