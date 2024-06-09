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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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

define('AUTH_KEY',         'Utb+~:JoaOYk_mN4!},&>Rr,&+@B)aF+AJl9%2^vJO|P64Z-Dco5mz``BM~TSPjo');
define('SECURE_AUTH_KEY',  'N 11kIR-8S_b!*.I=[-%rTsv|D|Tp>6Vu>Ibfm4jD9_Uy%,a_qJ/g4G;PA>(X$R(');
define('LOGGED_IN_KEY',    'c-!m2KoS{t>9*-j Xivs2iHl`^rMT31uoJ~BoceDiP,FOxFa-2snHFt3f?dl~5]O');
define('NONCE_KEY',        '40$c#GI:=!|$}sGe_4lx/v<n+kC2>mi<gJ$0fS*yAdaCv[en-+v.F~{6~:K4?z&L');
define('AUTH_SALT',        'mq|65Rk-xqQ*Z.b2o[X.3LyMzF[ ?bdz]SB.UzaK;&( l1sR+P 8MD0+_>zEaZ=%');
define('SECURE_AUTH_SALT', '/dw;@;^:u/5 :@|Z w!^D11T~lz|Pgd3|k=[iv{IQD&TgO|mupBT|_U^.Fdu+PDF');
define('LOGGED_IN_SALT',   'R]fc6ahK_I<Z<]P*E&@f TZA;g|m1=YkUx>Z;c=xWF))e:KFb|AYZV|I6J}:d%:=');
define('NONCE_SALT',       '1Dp|B9h1G07|p;0EcIW^ao_?Q@Cm3KX).<^IUmXHnr&yG>R6zrU=dIPfl`);MRYn');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
