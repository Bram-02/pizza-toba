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
define( 'DB_NAME', 'pizza_toba' );

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
define( 'AUTH_KEY',         '.TrN!q:3H>g;^$ESm(oSGqEz((Lae6I%DhW0Sl(M<6QU7DH63jTq27VM%+@Vgg_D' );
define( 'SECURE_AUTH_KEY',  'ab@IGO&1t6Sk~-WfR[I~XrO3W`udP1m}6{Lfop <J5K$Af@Fa@|2OK%|Pqzy/YI&' );
define( 'LOGGED_IN_KEY',    'i6=cC59w8I*9}RdaylVes<Ey-+frU vy%D[V^qyYjFQ9.{}z3NChnAAuaJbpyX<t' );
define( 'NONCE_KEY',        'r^uSJ(U#Y c)4Po_@EYm1l@,$MvJ^*vBWhH(6,rQa44B90#;EqI,hd Y[N%X|Fd.' );
define( 'AUTH_SALT',        '7Zym_6tIViD~XLgy?xE.SBK8X~y!51Re&VG|C$I&Nb}#/iu3eC rX6usTWMY6|wV' );
define( 'SECURE_AUTH_SALT', 'Zurz13Mq:lJw`EmxU< :hSo9IYFeCFsE3pr +fSy/w!A50_IJU[UCjhJLEfhVTUy' );
define( 'LOGGED_IN_SALT',   'sKjd+dyUlPe*~s#wWi&.*wHA)8Rsc8k+ft8x$H0F/!U:L%i2~x$,n0|}_Ec%i;7L' );
define( 'NONCE_SALT',       '4q4Q}eoNuY1njHlN8NnjD=>nF1|1Z?0A&iPiGzGVuQ#~KS{w7J*d<`8v7Vn~#Ugk' );

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
