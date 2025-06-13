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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'Naveensagar30' );

/** Database hostname */
define( 'DB_HOST', 'database-1.c7uq2skoqqmb.ap-south-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'Eh>]em/i0b{aB1ooWQB^q|&|{iH:<_T.J2+F,kQg(6EK?xR!}a5JimsS2+E+{^/c');
define('SECURE_AUTH_KEY',  'E3)P?F|.$H9EHUhes3gov:)y)#Bl<~+/3;E]A g;Li{r{Y4%9_QAaC4p=_`3<74i');
define('LOGGED_IN_KEY',    'Vow+z*5oz?[8_r?hSJX1M&*Icb;%5G4Z<H=`lW#8969aWDe4?,Kx@`yUvGLUTGXf');
define('NONCE_KEY',        'Z<ejbJky/a< 3,7TS5BuQR7p|k;0:GfuNnO6K&<MQQ[wQG7sw$z$T~lL;4F:qeKS');
define('AUTH_SALT',        '+r/(|h.IWI#31X,8.G[p5v|Qp+ma9vy`L-2ZF!1C~UkM8Ah[P CA^}nI]:w&D%Z3');
define('SECURE_AUTH_SALT', '2rjY`hF]+]bbhIZo/l!j[l%U_}46,]g0aN jE=MeU5Rkx<|fon]%*8qZm+$*!6[B');
define('LOGGED_IN_SALT',   'ggh`tjFCu zLoR3L{Pg|6mtT5hOWYsXp2!m9>k<>C5k6c!4FRF]TjLq~1MmFO1|f');
define('NONCE_SALT',       '4-{A|{[Bn>O^Tj(6`):-kTlHN8X|fg,|-mj`-hjTrI_(>ih8k+bO77x-tz-(!fBa');
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'W3TC_CONFIG_DATABASE', true );