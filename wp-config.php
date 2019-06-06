<?php
// 1st Changes
// 2nd Changes
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
define( 'DB_NAME', 'fourctron' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VAUwMSly9X98$56`ry?Ug0IkZfxBj7qQ2Y]+;@z-+Y!7AD2?&S4x|CtH~&t/oJKn' );
define( 'SECURE_AUTH_KEY',  '-S#Wt_EJPiJ[5m8ZQaUAO5zqz{x}shHmbpbTfC47Vaq[h@;{v46h{_.<.PoV$B*T' );
define( 'LOGGED_IN_KEY',    'LdH!>khw[JKE[%PbXLgQzXw?wJuZ*]X,FQ*4$?;t(W|7zX^m[M#FV D-}bvnmAw^' );
define( 'NONCE_KEY',        '-W*xCD?kFIkG7&Ik@a|V?P);{^L}R6Lweas3pOIjLm0A<>lm@q(8_l;1#a[`1OhN' );
define( 'AUTH_SALT',        '8sC&rf4~QZ bhfKl(EaSt#z5tA827OJ?|qCYg yywyL(O1.]8K|7,|BR7UG~A%pN' );
define( 'SECURE_AUTH_SALT', 'Eq6xiH@tm2o?R+@/oolj({cG(E7<|BE?)Z.kb0rj}3GqvO1p,|Azw3RaK#&0p9/[' );
define( 'LOGGED_IN_SALT',   '9VlR-k13_`S[9%7[-RM)4s6~%-$PrAv(sZ(ey/t}h]d <QtV|vX)=Q[}R[`tu8; ' );
define( 'NONCE_SALT',       ']si%+0:p%I1G^PToLz=K+Dwx,4zRluMR4lG+A{zdis%NH;PR?q2zi3ko:X15F_{Z' );

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
