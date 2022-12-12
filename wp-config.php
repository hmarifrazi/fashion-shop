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
define( 'DB_NAME', 'fashion_shop' );

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
define( 'AUTH_KEY',         '^N.0_0YT!~Z]<*>H,3ypb4;UN85Ne6>^hc[^[yHD 1Pb~%EQ8ZTZ]8T{*9%KtCw+' );
define( 'SECURE_AUTH_KEY',  'rjwH6FPEEu)db|g|J*.M3IBGu]ENiI[WRXG*Gds Zw0;Py?=.brEZ8Y4@JUPG!/q' );
define( 'LOGGED_IN_KEY',    '[F!/kn$d6`Ed8?}Fi:)v20)?FT74ER/j&qQ@e$2`#vRQD`(_v_8S<~w@_q9n|$If' );
define( 'NONCE_KEY',        '/>O,+68|{CV+LIDX}rE0Z E?;[7QJlfyAD?9^=|ox!R-(~u6g{d/MAyLgHU.T,]?' );
define( 'AUTH_SALT',        ';^st_B)*BuTLOQm(+X4i4$^V6fb5/<VYHKB7MYr_.#sEy6l2E^D*8i->&VtiO$uK' );
define( 'SECURE_AUTH_SALT', '>Vfn*HOh3kcj/B,mClc5Ju811nr=c{2k;(X)c5,#isnI~`a<:clqw.S#r7jjL4;B' );
define( 'LOGGED_IN_SALT',   ':Y@?j3rgNe9I(]C5Hat3BRUP$0a78q N*^,*I4xr@kA/Z1~Z|^,@,(x |D<NlimP' );
define( 'NONCE_SALT',       'Cbp|ofa!LO|XWQP&8U-ptb_{c#<wfp*IS+=Pm!$/o=V9?]IVqN=O&P(4O-5jAUhl' );

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
