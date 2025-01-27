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
define( 'DB_NAME', 'Custom_site' );

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
define( 'AUTH_KEY',         'EDB4e}@%5?o/M_sgw7nkUW~n<@3!<Ihd%RBjY?fbQ(+}$M_Z_+0!g<H UX}|]{4f' );
define( 'SECURE_AUTH_KEY',  'P+&wQEJe(Pa/}+Cu~9% }+oD[PjuTb|=.S*>GAq}D8UusO}dULnI-%$`d2acYw^e' );
define( 'LOGGED_IN_KEY',    '][E)G ;Th[m&@R2g&j$5l_&>dh8<joQ{#i_3TpM K=!7|%sw.cL[JI*&rW_!ob$l' );
define( 'NONCE_KEY',        ' y/ETRwj>pMsL(~m]6[q.Rc|QNF84m !p{SL!)[&a96OdS)f=Rm9.0>dA0C6Ir9Q' );
define( 'AUTH_SALT',        'qt0X_+VDNYM#PtjmD<.XIH5X9&Z^=~t|iM _JLB4{~dFhr)lh;B;YMeHGH#K^@<Q' );
define( 'SECURE_AUTH_SALT', 'KLT$~5BA[(/<tcn }P2g +Rh*fi<XqQCj2x$I>]Xga{VMo{)N{A/0{,,G%]/|jgF' );
define( 'LOGGED_IN_SALT',   'KRunL2*s*S`sFko,;~5v=un=k%9R$!ISx/?bJyC7,h9/)UhX~^1Zj1}/Qz6-K2TK' );
define( 'NONCE_SALT',       '+k<<hed]{9w -Gl /h7!op&. d)YVtHE ^b4iBbp5d3xKP?dPWG37{|1EtUbc@W`' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
