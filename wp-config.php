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
define( 'DB_NAME', 'hotel_mang' );

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
define( 'AUTH_KEY',         'oJwS~D/R>K-<ue[0T3u^$(.E^dKK:wj;?>r11qn/z.oA6_OIy~Okt*yL:fgL [H1' );
define( 'SECURE_AUTH_KEY',  '?R%?@}^WzYP7vCBV9#kJb^#(Z.yfsjEZ?HUCR%;9b-(t%jE#me3o`FJfY:o(H$`;' );
define( 'LOGGED_IN_KEY',    '42?980n_pSGNdf[Ll-1U>H7gO-Yio0}&IUQMROB*9vPyXrp:+N]tHx$_y4!0WrO(' );
define( 'NONCE_KEY',        '9~5/%OX90QA(rlu;p>Zx;%Z}|}k5tdfb[N>DGlT+}1qu ekrbz@J.n6KYSy7Fa(5' );
define( 'AUTH_SALT',        '0[NMW!&sg7N_%;m/.IE,ON4m/LkGba&(onBO?oh@!l#X<af($a]l&U04kNszKhK^' );
define( 'SECURE_AUTH_SALT', 'T^upzY0(t8Km>H,#XE*)hTzJ55C|#Ap4[MD73^vwNFkPvS[k:j9VMELr1rC:*)&<' );
define( 'LOGGED_IN_SALT',   'S//H7[!F12gId=)LHO9(6BM!nm)aCA>%oBD*2dP`GeD<yG058XLrY,Zzbcfg(%vg' );
define( 'NONCE_SALT',       'IPpV*if8Nl@oonGb@,@~NFTm-vYVqWp+xL_~1T{3]!$xf 3e?a4&]I!>VZ8m/::3' );

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
