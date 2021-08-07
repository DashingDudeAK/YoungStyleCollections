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
define( 'DB_NAME', 'YoungStyleCollections_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~2}n,1X%$VjRKN;|/ /Ij;lexKNP!j~o]H]>9%uEUOWXv:m-cDi[fT97GbSPtTSS' );
define( 'SECURE_AUTH_KEY',  '=03Y$}eEk3x_JMzDh_(c.3Fup[4>-:fBEZXfwd#W-ieu;C8M88X$o$O2q87:${>]' );
define( 'LOGGED_IN_KEY',    '|n`A6T}=E2:g>sz%x55SR,!t@FBMRvsj0Z @O#c1:-@(CARcjpiuRRBrG0(lta1F' );
define( 'NONCE_KEY',        '0tus*3q3w,O0j-sf/*xkT0zvd[<L8*vQ3)Sn1e~uF(q!ylmAQVOX-3?+N/I#q*>_' );
define( 'AUTH_SALT',        'YsbJ]SFgil7|C*Qg^iC1r#QXB4hqL|r-OKQC5_/{ygzPyW<8Jt&*n{8Z}.p`mo0Z' );
define( 'SECURE_AUTH_SALT', 'DY+rDOd?YCp;PEP;;P7]46lJ5m7)8-:+<*uN##$fi=[.QU[Df$&EoU 1r~iON@JN' );
define( 'LOGGED_IN_SALT',   '+B-%k~ZP5x&jyz[o6;c@jiWQGmm!y4Nqdq.)Y:T,Z0+r&E],#B*f,[2~J/c+0qD@' );
define( 'NONCE_SALT',       'V%>gvb2]W0)X[:u%8/xUSclz!1R2c@u:Bk5:8kN![TiVSy*n(5p#TkINvsPnqXhA' );

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
