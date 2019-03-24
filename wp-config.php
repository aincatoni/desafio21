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
define( 'DB_NAME', 'desafio21' );

/** MySQL database username */
define( 'DB_USER', 'aincatoni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'otaking25' );

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
define( 'AUTH_KEY',         'J8XpNY*/uXkxDCS>T?CV7*soWetmS*PL>j`^://O,`Onhk;0Xry}~#w9bs3U/~(>' );
define( 'SECURE_AUTH_KEY',  'yh^3_:HM]Hza/ub,@<.J%?2eI3o%GzJ%afDkG@jQ%](O++BNSo&bL*FYBQzCvbe>' );
define( 'LOGGED_IN_KEY',    ' QWSP>TG]Z>MAy3_).lm8aN4>F`coTIE>H#_da>jT=#93QBRykpVavR95JVE&`&B' );
define( 'NONCE_KEY',        '4HFO&apgR|1<K?yo4,fAq|MA*51gY(o.X(flAJd;Q5qmjU4Yk[GT}btMsbIJE2V1' );
define( 'AUTH_SALT',        '{BmoI~oLS{|K)fy~b!x[`nruyzkj!Cn1a{x3x!<AW5$7Tu7qw[42a>M.*5f a/dG' );
define( 'SECURE_AUTH_SALT', '^NM7t&Myvgj|qYFS~=lSPvgXB$p`TG(Gxy]M:YQsrY=F1UcoKJRxxiFk%HF-gy+[' );
define( 'LOGGED_IN_SALT',   'n?$cqny@]rHaKh%l_uzp]e>okR_>BFVESl8e7fR)Y<a&AYH;v;9G>$_6p|e}PHeS' );
define( 'NONCE_SALT',       'TBA3kokaSI!&aT2m$M63{-o8><ZiYQ.Z4_WgjPUmou9=/9i:YgF4Matz2,]kIR(&' );

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
