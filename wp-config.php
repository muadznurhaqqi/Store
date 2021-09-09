<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dronewp' );

/** MySQL database username */
define( 'DB_USER', 'drone_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9lJDEvjPTan%RS,Ee42*XAGr$Txou~M@6:#U*FJ<vUFSb 5gb99Ibr_Ges0K)j> ' );
define( 'SECURE_AUTH_KEY',  'N=@!=K~bnQ 0PojiU/[0u!pq>=Cm*LaPwig.AmgFc21knJ%=??&CNae,Aw1{Y`o$' );
define( 'LOGGED_IN_KEY',    'B?2$cgs^a>e^uU_Cg<P;~o-P81&k<Zy&7tlj#f>orz/)@|r)wo%|_6:4?~^mn,u5' );
define( 'NONCE_KEY',        '3!8QjOFVQRkvyc7rNyT|L_fmq.r)r.FAU7:~)c)SU~[5O^o8w*4C.T9DMM5ax#(v' );
define( 'AUTH_SALT',        '_0d5Kw]A<*P p8#R%.D/MqMwn!:S9?j|f90Pv=Ov&&W#.(/??Ii9^5S$X:f~i(9{' );
define( 'SECURE_AUTH_SALT', '.?#>5Qz{08tK6wu;u:eZ F0B;x;Mn!@YtXYIF4kNBwPIeh3Uxqc^CQ&xT^m9okR`' );
define( 'LOGGED_IN_SALT',   '`%9vfPNZKHV[MR%Z1i>QCf~>m3Y?ZGqVC)1k(ez9UF?T[z!z1Ae:7$KVnRXI1w+S' );
define( 'NONCE_SALT',       ': >0V|EP+[Hx_uV]m/P<71Bn>=99&dglr1bhG4{%UU16{,)InXaXh2KGZ&~|wSMA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hjty12_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
