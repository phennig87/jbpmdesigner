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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vJlx6os77K0+gXp1OzBebe9qlrhyyWknriW8f1/nNAsb71dGmkYEvORzN6RI+KKlle+qsCznUg6R8ZZkA1L6Lg==');
define('SECURE_AUTH_KEY',  'Fdfwm32mEGsnhLIuQ5JNl6EzbSDT84TSq4F1MnZX2puRPqJVePGp7uTauFrlLo+txS555DKykYB4qNGFxPRwZg==');
define('LOGGED_IN_KEY',    'NgHZriAzP5d73MV2ug3OAfyM3N6sBDFCNLf2DhxVORODK2/VXCgsNQyRfDNNHvbv5YEXcF8nH5PFZSN5VkvUMA==');
define('NONCE_KEY',        'HMPnHK8tfSPSo5TaZ+L9ZmGtl9a5I1oY4uoJMVBy5u0zNfubLv8WcRVlhG51PQUFaH+S9d/wEtnyEa5OnYba8w==');
define('AUTH_SALT',        'n15kUXcYiRGd5MAXR1K2p+2Us/ipJQF7MLfPmzVjtOIfKTnD3yoxhlS446ep5qmtD99laWMy7U51tsyk+DwdEg==');
define('SECURE_AUTH_SALT', '9yqux6gtudyePatcoqVjeN6rfZYAz1Fq+rjIEtz3bSi3+W0V1xGY2dFmf4g5ksWCkaHI2PlCXT39o4fDNwggDA==');
define('LOGGED_IN_SALT',   'Z8OZJH2QHIwMZzgd+W/Cyuds2sFmEZIiUdMeAkRoqA4OXe2xRfj/G+LFXgYMFlM8fRCTIJ9ahs1m4tESdFquvA==');
define('NONCE_SALT',       'ZVq6LZeYtxK6A3D225kNGHAoiCD3fEAoQroAM4bjBX89CH5+GHJkuQvHtOjvtk9jqk/8EZKWG9PIa2WiwO569A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
