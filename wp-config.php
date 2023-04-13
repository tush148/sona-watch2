<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sona-watch2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ozk_*^VZl3JEi$nt;HH<E4{gK/woMsQl9bg1 ]L+3g,cqy;`b.{$Xi~0io0Md,j*' );
define( 'SECURE_AUTH_KEY',  'pRh3Z[&RyOvu-hjix+v:oxU21q%#Q>f 7p0U&dwaMe/&7h*[BZNfbIxM!t4X9G%L' );
define( 'LOGGED_IN_KEY',    'AU{Kx`gdlvF9^Ak{I$a?u|]mUXnEhC[aG)-myk3CH-=7[*M[>O`SY-1e_u*[TS.D' );
define( 'NONCE_KEY',        '-[j4{pxzKiPFu2pe`1;*78Hap[i$O&Gmu$y:yyb*}y~qvM]DMQW-gNcli5G`[Uv?' );
define( 'AUTH_SALT',        '}f4vLH!6%{G|i+`<1LhoZzH v,`:L#d:h(lF6^*bxLnBI@SGTw(}?kh*8&^/v2;c' );
define( 'SECURE_AUTH_SALT', '`5?sE3{WKXO!mLdUfx-{sK6hG)64Bi_X?w,z3EyTMdV}x_Go0&%GZb[pt~U8NB)z' );
define( 'LOGGED_IN_SALT',   'iXM-/UOQs(G!rp^bDLz&m1lHBflN7npTZs[^v&Xr3qU]K9wYWe+fBKO[L}4v!~z{' );
define( 'NONCE_SALT',       '|7HZWA~z,wU)HWXMP2`?a[r#DGd}#/>sVC_SY@ tY]I0PpAB.yL1)yla7V^km%GA' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
