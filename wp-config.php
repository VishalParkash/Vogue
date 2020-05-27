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
define( 'DB_NAME', 'vogue_wp' );

/** MySQL database username */
define( 'DB_USER', 'development' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Milli@123' );

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
define( 'AUTH_KEY',         '>-`N`6Yq}D}Qz!fOgm8zYa;>k)Mtv[6DBnkeKlueA-E0(b,&i72DcT0]p:L`jD,R' );
define( 'SECURE_AUTH_KEY',  '3+OGZL[V +2X*_?c4n,gk-b>znQ_Ta=*y3 x|30LJS=l]C-qv(~ejqMGXHy37LCf' );
define( 'LOGGED_IN_KEY',    'Qda!>-hWdAtQwDsZuhK:YNoFSToi+0T.[;1.):zdX=4wjY*} Xn!_@f$:ER]&Nz|' );
define( 'NONCE_KEY',        'bi)r(dKh-,0:,|]i71J>x.|t-0Cvw@}Fx,g_!O4 LflS(e]O&M3iV9lKKkucH:z~' );
define( 'AUTH_SALT',        'sV#@<Xnu*|:S&R$VK!<q[O1LGV>>5t[E?QZ>+)MW^[ SP5M:J_!V[<Y=q;,m2eJs' );
define( 'SECURE_AUTH_SALT', 'e5N`vw[NQTS>#qg#622!]cs$.ZwX(66Zv5Mj+^h }n&@C@%aR?%)4/JG}@M]3jJ:' );
define( 'LOGGED_IN_SALT',   ',Ge&6FQ%jWqJ/+hzs?g7%i{Hn8<5L?Bb)_uGyoKW~a]HDOB!#Fcv2n@_oz}xi%3q' );
define( 'NONCE_SALT',       'xFvHD,jk@VD_BWW;i<W-Zx*(g`E?hL!8`:`xqNyU zXEK9AyZ2(~eN3{dI:EBa|}' );

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
