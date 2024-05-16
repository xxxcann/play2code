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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Cwnm7M`Z`A0.Z.s-GObkmEXkP.RklgHpR%QxT@DYs9:ByOuQ7F*~fgTP*3-^Q;/{' );
define( 'SECURE_AUTH_KEY',  'hUtY=QMW1gnwA#ZhoU;@$6*Tk}=*9w,13.:5(%9FM*{BQRB4m{10xsP4zs0ri~vy' );
define( 'LOGGED_IN_KEY',    'CT4JY6CrleY{y)oz?aW]M,TL+q_Wr7GOtqMa,Wyz}#NCfXP>n2}DpIinqI>Kujm`' );
define( 'NONCE_KEY',        'L;St)n_/8C@Tz//Tty$.JF;Oo%9`H{42&.L~3L6~uWyKzr^Dh,oCEF1Of>U|n_Oq' );
define( 'AUTH_SALT',        '+i@}4h2#RP~o+pHB,#jUY0]7 <g{w D#@1D2T]|~@A9tY#jq/^0|H.wN~I%t!N]X' );
define( 'SECURE_AUTH_SALT', '?Nwzi(QU,~1(i5nxZK(QU9NL6(3BVnsFX:*C56u<F!08_f1XW.xQwV&Ve>&LAlj[' );
define( 'LOGGED_IN_SALT',   'osJc=4_CXr_ESbDGV5_nT$K0nqB*>-WD>/Ci%9Z-<n5}X2+Ar+97hMC.(muOE6jv' );
define( 'NONCE_SALT',       ')-&d1umBn-De@j2yH^n)+z9EbTv<KMSl7>S%P#CmO>zCdwf_njnthR*y3S54EF{C' );

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
