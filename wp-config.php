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
define( 'DB_NAME', 'demo_wordpress' );

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
define( 'AUTH_KEY',         ' ;+Z_~)=@IlZJx!3g:A4SB^UuB4B9k1{[!qHA%D)wY6-Ll8^1$%5-eNQ`.x eyr<' );
define( 'SECURE_AUTH_KEY',  'C$JG(!X&fCR1)zi$2S~Nwe9>S%$X5ta*^gmy dD/h$]%mbE}>WC_;|o0sJ@256` ' );
define( 'LOGGED_IN_KEY',    'b-ccsqiTX|*: #I,h7WSDp&Ndgk! ;GE[O<+x!DWL=2.E?MQjNlv}.dBiv=lwIv6' );
define( 'NONCE_KEY',        '0>T~74zw5z[xxe^a/sG)vw?bc,2;daF/jI5iyjQ3GBc(Q/Gm+/aEt{Ju,m{l!Q+!' );
define( 'AUTH_SALT',        'r78M jjz2xX3T];D4g#m_iSd[Cn9=1OdNjS_w-DYnn%Rwh3HVas2tV@8u6yE}T_s' );
define( 'SECURE_AUTH_SALT', 'h+>;54M|WLnWe5[-Cfu*vV&,F $dr7FU5M5Uu7@Yxf&ce*JzIm4efsE#WTR384$7' );
define( 'LOGGED_IN_SALT',   'ux0+xs:7]lWdBTxg>m:_]WSB2mK@3$;5EwB5/$5u3E$h{izVTVLzV$k_xsu$<bXf' );
define( 'NONCE_SALT',       'YzB|Hv8|1j_=cj485z^WV7<]XQWDuR;0dM^6/3V5*Y.H[YxwV,;Wu<{cW56uSXcb' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';