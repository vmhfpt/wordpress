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
define( 'AUTH_KEY',         'R FB[N>ew)8aGwWnDwN2~r*A*r<Q*9jN=?#E+uN{@9Y Ss*_Q4C!Upw4&(jnI^KA' );
define( 'SECURE_AUTH_KEY',  '#nYvY3{F&D2a%7z+t~TX<?WmCO! 2<0($![#E_G|X>K}Y@l+g8z88:vGltTjjA3:' );
define( 'LOGGED_IN_KEY',    'd7^D8*.pCu1fsAYZe5d6SGSSXW&}/{`f6rYdYfKw:/S#hQr.}S&{0ZF+g1U!*A%*' );
define( 'NONCE_KEY',        'QJSE/WK!5$P!-<1s%CJR&u:5so&YV3n*CUu]2NWQH~oe`$*,:?z%zvhw1{&8E}w{' );
define( 'AUTH_SALT',        '%A!5g!,X%OO~}Fh$9pi?#m&$!Gp.9Dh|KI)P._{_d3.kEp/ftEEHey>!tjOy-9_d' );
define( 'SECURE_AUTH_SALT', '`h]]a-ADN`N?PA~!}vEYp9UC7TJ&8S+rk,Fx|B43Hi,bW,C[?mw2q#JS4K0x?Fu{' );
define( 'LOGGED_IN_SALT',   'gm 1v13!}jtTvhh9uQj;%a7.EEbY_.AUC%W_d>=7(qF),fV.ClLpj~*x=.r52$D)' );
define( 'NONCE_SALT',       ':S^1-;WvGE#<lj51CHib[Q%N/H^Ft(1ljgq@Db9xtQz,z2>L+[W8GE0vG$3J&6i%' );

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