<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_umkm' );

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
define( 'AUTH_KEY',         '4(!/7-X0fJ%}^FBwZM{y(m?r.3U^/b8?.HBl4 7~*>-o]IB<^zKf5#u +B+k3&0E' );
define( 'SECURE_AUTH_KEY',  '[T!e({T~gE2)1K,fCR$z/@jkYOs}YWYl@/.M&(<j,Vf^%O|g92/W$i_}Psf6r /{' );
define( 'LOGGED_IN_KEY',    '!o:Gzj5$8Si=iO.dH[s8ZD>LUBi+JF%q0?]3U|,Xy6hi0Hbkl=VFd@LN=k>Ju,|q' );
define( 'NONCE_KEY',        '0tc%>wpi:4B*z97hhbw!lt&-<$!@Vp+km/):*ARAdL;>`XX;|Xz;!c#c-W%zx8bV' );
define( 'AUTH_SALT',        '_s:fAg)L:X}a!Yr`$C>osm(}(Q-zkeE )&@O`-)KhOHxL0V1%E^*8u?E3#V?V`%U' );
define( 'SECURE_AUTH_SALT', ';pB4$cLV+ZdZ_~xL+6)%>%FCwNLXK3Vm;CQ+Ao.CmF50&r#v<E(m?|lX`T>p4+uB' );
define( 'LOGGED_IN_SALT',   '[Gnzuq<zG+zv^yD1(-N$U G7wD4JY<=:bFM0Kp;>4aK`,.=pB#[n3Xddmzs*F677' );
define( 'NONCE_SALT',       'Lv&:/1;Tq5fHp2m4B}?B1[od-XJtVh>QXEsbO%R%6tdCU?@*ZlCXb9>Z-wAQj/$N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
