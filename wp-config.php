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
define( 'DB_NAME', 'gulshantestingsite' );

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
define( 'AUTH_KEY',         '5*nn/E-|29`b_7$~r0U5`N^VsTVGxD[5#1<1bi%E{ j[2c_9>(+Y5^R4kJlcfI:K' );
define( 'SECURE_AUTH_KEY',  '_+z*,%?Y(KoVk>;-SKl.`xm)Mn;G8?bFE:hlmDuNwTV~+0uO0rH9.5NQ;!A.k4g=' );
define( 'LOGGED_IN_KEY',    '@=y[:_95.;@XIW1Z[vOF@1 >2,!U$^H:g-zAeY0Z?gZolK6EHrl)9aE^0yPpA:HG' );
define( 'NONCE_KEY',        '3wnk*BsK?!e{F;!TmE$E9Un9DC,eNbo%YEo;=FpTdUX,l&|,mmwlnwG&~-H_8a)=' );
define( 'AUTH_SALT',        'd`RTWv;g4/3{|=y4O[#,mL5M{)JB|h((IC#SumM LFs~L9!Y(5H)..aOTMX0Rlo<' );
define( 'SECURE_AUTH_SALT', 'j+^)8n_:Uo)||$1Yl#&x&YJl{&ZyD|+!MBw^Q}YaA~?/sUM]q4S{;%z~5FH!2?d.' );
define( 'LOGGED_IN_SALT',   'dq[y4tU{%_lS5%1kHW &`!cd=FjOvNR18_|7vPISlq-7Hpg>lyAbKP5aRn#+Kl,W' );
define( 'NONCE_SALT',       '? qX.hctO32Jbl;Q;!0!)_i,?bOt%iO0r/{k2|.wsFvA>CNJdI:6w@w5o?p< iTM' );

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
