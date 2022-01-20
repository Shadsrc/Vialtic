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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wpvialtic' );

/** MySQL database username */
define( 'DB_USER', 'admindb_wpvialtic' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Userstagetec6' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '_mp|th61J=zK~mTo{QeBXaJC1bqDg}-;AAwrE49`yH;xf_IjPhp7.Vhq^gb$@z8p' );
define( 'SECURE_AUTH_KEY',  '#+5`7jN3]**nStH>U~e}F>n5XOC5TJ*MM4GQ3Dc2/*~NP.VP>(w)MZnMbRZptgHG' );
define( 'LOGGED_IN_KEY',    '=Krr6>>C<hDz,J|74J8!K7I@Y)gnRaMCk}^s]5Z<sH,Ho>JT>]K8ka<RzFfp1[c^' );
define( 'NONCE_KEY',        'I01b|Kk:s)slf}q{>3S&ER+P=v^HzUd8IN8?az+Y~g3$Kc}<y>x0}v?u(aA_.633' );
define( 'AUTH_SALT',        'k2X]qzSH.BSxTo^6!!|1zhKvl2v@Fbib21}L)^/_2rqIIahrvb>W`kW#Z,tOJ)S_' );
define( 'SECURE_AUTH_SALT', ',r3RUgm0nx3jBDw6PJoPG6SPM(Eg6OBi9:=;hN(Yr+&|~U2j%9EG;*Fi-s3}r<@D' );
define( 'LOGGED_IN_SALT',   'x}tN|BV:H?ZEj@nIHfK5%t@O]%7OFyXtWwYwTe.Z{YI%[3I6ctOEuC!/bI2)U.-5' );
define( 'NONCE_SALT',       'wgV@=g/2E[GL~t1@*&A,=jfV9]~ST$?m2(hU /gL)$n`+E:5L `dxe0(~gtq7fvr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
