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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp.loc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K 8,JL{340Hqr$rhH*bCC|nJ?-zl>Ib|%r -FW3~2zOIrZ)Ekz3B;v)[tkxd!DtY' );
define( 'SECURE_AUTH_KEY',  '2ne3Jz@#n_e/FZZo25S7e>wyYhFSyQ,-V`;&!@J5/ b1/2lh`08@#7veq3Q,+Sdr' );
define( 'LOGGED_IN_KEY',    '~j/OQ}EM65>O@e>2#3tDm^u}{TDta|Avk^E`=&J!e5*pbRBr9iA+bDz|`6gYsZA+' );
define( 'NONCE_KEY',        'd)`W-W_m;%_XEF&8U}YkG}BX>P^esA`nD.u >bAWUN$nL2J-P#R_/._ZRfgb0pgE' );
define( 'AUTH_SALT',        't~Foq`T`GXdHj$&62|9&Dvxv~[4F,-TWT^@,qV/kmui,%&ZHHqD~AHwHc.l@{U<f' );
define( 'SECURE_AUTH_SALT', 'eE86|ni^B4sh&x4YD;nE --KqeAr%CY$/IN_a*vHbDp)doFFO<aiK(W$t3A(4Ecd' );
define( 'LOGGED_IN_SALT',   'pI-xkm%{XfVi]l[@ucBR>=JHN[VV2^f_W!~&WM26|]d/KQb#HD)fN~YO#z5<IXmA' );
define( 'NONCE_SALT',       '_5GY.L|J227F4?&$o!2qfgoviV4Q/Hv{Tkb,`#~QMsYx2Yrz.HB1ft)0ZvW$#(q.' );

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
