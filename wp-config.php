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
define( 'DB_NAME', 'db_escuelaCocina' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S6aRj2~?SQPN{K]9C_CV6tkr~nm$VLlR[<CMjN-eL1~ESDK@pUq*BXxe<Ek~~Bo}' );
define( 'SECURE_AUTH_KEY',  '_w@jWbupT%Shx/ 0;uDNH&H7$}To*%(0l=wQ^X>{BOXVk{V#!LX>myi #C)%OC a' );
define( 'LOGGED_IN_KEY',    'QtrD].X_%`O4wbeSrYbt;8z_LpiVIa2oNdZ4bWxd! VCv5K7VsT|&6~ArfPbhN9c' );
define( 'NONCE_KEY',        '.}nQTNVF=zQ_q+[wo>Y8Muq}8IJ~=6o<Pj2h6)+h:+14Ro18QZqnsY91E/X4.gmB' );
define( 'AUTH_SALT',        '5eOa:?k[{DQ/ [gK@O8XX{DAmXWh#xpe&LeWuDUKp;_HzU0|379|`_kmYVm-_*ej' );
define( 'SECURE_AUTH_SALT', '*V]khIIk+O1pv*4;Zu}OrD:Z]!_kvU]_a e}FL,L1I=1@qBn ?860[.-7`kZ+f4&' );
define( 'LOGGED_IN_SALT',   'x_f1nS^g7vw{ziiv+THSPFsC1{)R-ve:geS@o5R:no=6DiT){<l_[>nw `uv6)F}' );
define( 'NONCE_SALT',       'I>#1{`7:05>YY<iIAs9cb43vaps)m)Vl!a^pq?cwx@AJ{x4n2%s_X9K3:Ew)J+%Y' );

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
