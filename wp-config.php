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
// define( 'DB_NAME', 'db_blogkiper' );
define( 'DB_NAME', 'blogkiper2021_production' );

/** MySQL database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'forge' );

/** MySQL database password */ 
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'OjcDgamvU0IZaA0Dh5Zd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', 'blogkiper2021.concepthaus.dev' );

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
define( 'AUTH_KEY',         's4EQt,|)y,BM+EeA])K7j*27o[zhJd}Z?hx@RA)jZd%gpUrU(}0NIk5e[/C+R?s:' );
define( 'SECURE_AUTH_KEY',  '=_ma;*YlCzdU6n~)71&8J2vVPE{`_@+$UJd0Mp<kw_[$;u.jMhl-.|Q/L#1M*ab9' );
define( 'LOGGED_IN_KEY',    ']UKK7=6aF2X(P4ckqsYu10<IZkWi{5oY29uD45`7N@YJ8O,~I9j:YqawKY|nD#Ed' );
define( 'NONCE_KEY',        'gBjqa^/v=#b>[x7Q ZXgyj5:W9J2s&66ff-M&5xl9]^X/?Db#Y=UOf,RH3cKGyn#' );
define( 'AUTH_SALT',        'nqpVubZrt0b-JMF$SjC;6xVd:vW;&ag@D}l/4cP)g_IH-VnVf|mFrXA*>.`]^,c_' );
define( 'SECURE_AUTH_SALT', '4Ene-|[ljh/{%Q=M&dY&LZlZeUk~=Czsh/CtAhk>;qeo%SJL_I;+4|qn[.<H;z4m' );
define( 'LOGGED_IN_SALT',   'd=fI:RX2[= VjpHRcA)8NQN(#9y5:&SNrB`@Ev 1-9@RAw[[<}o^[w+U9J4lKs2K' );
define( 'NONCE_SALT',       '=R=**;cBKUu#mWZ%BFw2.9J[.n6s,eQJ&><JFNymCaZ;9HZ{z$P.J={  >U_(K=T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bdbl0gk1p3r_';

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
