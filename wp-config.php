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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n{oeoN_[UU}R-*W{)HzG[6Ub Tnfu;BN&I}uV[,/9cS2L;h#?5eJB$VH ||Efv9r' );
define( 'SECURE_AUTH_KEY',  '}6O2BDBu TDpHY5a*3xs7j&DwU%A1C.eVpE7;DDzp8}!I($$3WF.k*RxE[=9Jk:y' );
define( 'LOGGED_IN_KEY',    'O#60>*+Jb*rP99j=f_D+?MtfV{rO=P%~KOLNH.5l=B!@Q1bjY^;4umhO[(Y@T;VX' );
define( 'NONCE_KEY',        'f]U56 +oj[FWF]5yY5rGs[0([1GFxFIrQyDXUxT9UVBCP| h,,vYw5$To2jxM>rf' );
define( 'AUTH_SALT',        '[vpoGRckE!}|ed!Qmd@K?^tGal;L/e/y=+Z/9PhX@D$MLa&JdXeqX`ZnOxG%QrQ!' );
define( 'SECURE_AUTH_SALT', 'Dxxwy!unC|6YL<Fs&%GJ*7S<7t0ARY49Uwebj`q?F^vXz~=q6OaVWj!DD;XNY;iX' );
define( 'LOGGED_IN_SALT',   '2rnI`zn$@B?Aya^ENN>A$A.hV6a&lx63a8Dx8lUnA|wrrS8Ge}g+[6{.${d2@*yO' );
define( 'NONCE_SALT',       'rw?xAkLX9T i2l{fTh&%Rk}Uc$g>U7h2D/f}DIlZ`sv>%Z0m_Dwf,jb6^Xt-vMCh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
