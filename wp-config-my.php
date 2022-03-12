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
define( 'DB_NAME', 'mydatabase' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Mypassword!' );

/** Database hostname */
define( 'DB_HOST', 'mydatabase.cvugaezhor0e.eu-central-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'YXOA`/:1a) jHoo$-HT&Olc_M(A )b@-4[2CtTf(3tsZgp|1&qo[1g6--|Y7UpbC');
define('SECURE_AUTH_KEY',  '/ZD@n~M@E*HXcn1rq RtE,<#bt,U~tr,>rTx!+z^u{_Zjnhv3??:T9amCI`FP Ql');
define('LOGGED_IN_KEY',    'md=^@&$g]s*E}ksKeZ.uw8@O}=MVQ^Oq}p/k0->ub~#4sQo7BJ,-%~?d@XX0UL|&');
define('NONCE_KEY',        '$K/>1;)z~PXy[9ZV6%0ha9AJBH%^eSW{Ko$>1ZtS9[i3dB4?i++W~T{nUzmtN|o:');
define('AUTH_SALT',        'v9kO@Dxs%Gp}Wv<7U-RbRVcuPUyfs_,Pdw- :6907S+gA`9m^p+d++{>Oq0w=GJ|');
define('SECURE_AUTH_SALT', 'ZUy*O5E(He#O+:QgtPV(rYn+F;&af@hZ-`[KDv,^?<dFL>JflLvCQ=2A;KqAM2^u');
define('LOGGED_IN_SALT',   '!=`*#zB|y*m||%`|k[0IT(#w!mrzt-gq)oxis):0=*kcUMSu|*%4/1V;jBc_`?S`');
define('NONCE_SALT',       'JI4vN-#=yEDAF:LWcV$(|=,f` -O +~r_|}m-~sg:i+/:w4!QN`A?9j9FT^afP9:');

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
