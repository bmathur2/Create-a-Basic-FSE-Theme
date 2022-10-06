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
define( 'DB_NAME', 'fse' );

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
define( 'AUTH_KEY',         'brl@-Q ]lrM9v=>RBvY_IWOAc+%>mUQ9`1gptri+Iceu.$O#rjWMKX34w3GFq4E&' );
define( 'SECURE_AUTH_KEY',  '~g;2+wV|SBbg2HdFq<Fkvi/%C{E6zx51N[DUK{-P<?J *SQ?EZR _j2R<ug+dmXF' );
define( 'LOGGED_IN_KEY',    'Q>ub}dN,+XRBZ4GWAP5j$sJ;JN,XtdH43Vc>FC[SiFL_b+{_lhl?%R~WRaR$xew9' );
define( 'NONCE_KEY',        'c?7? tZPQS,R>OW1130F=9~)Mm,lQG(w8uEBO/#G=@]0j&J(x;nq2s~!&2lgx;Bg' );
define( 'AUTH_SALT',        'w_y7 OKzuDJGI6*X]ZWo,{ix5d1)3=9aNS-9cA)e,J)@O%s=uSmADA|,@h^(!Hzf' );
define( 'SECURE_AUTH_SALT', '#=^/2GW/q]u^VDCQubW+|s@/%t!wmwCvjnw].zNhX2%U[2/tLgY/<JTcZl9(t%`~' );
define( 'LOGGED_IN_SALT',   '*#Z$qN;{7A!*#K[t@IXUa{~qV<{|$|R:ux]E4j/iKsMS/ W@>USiY+rcHud]re!t' );
define( 'NONCE_SALT',       '? 6+kTT{Pwr]VA4`4ES6H*,m<!l{;PKIxGZoQKoMCp7q-Af?ir#e(AvE&X9x=4[2' );

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
