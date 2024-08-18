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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alcate89_wp926' );

/** MySQL database username */
define( 'DB_USER', 'alcate89_wp926' );

/** MySQL database password */
define( 'DB_PASSWORD', '2SSj)-u06p' );

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
define( 'AUTH_KEY',         'oi4uh6298xvtfj2lbufike2gceirjnq4fr8igwneqieys4px9hqniw6s0pvqf4d7' );
define( 'SECURE_AUTH_KEY',  'rqdn8taovfv3dw4vdmnjt4codffjbfo15sbzzx60k4n7cvqgqmazj68xcmmg4s8m' );
define( 'LOGGED_IN_KEY',    '9kqtoonda9tvwkzzxszcqslp1uyhumiu8dyafflg1ftewuccwwiwasudsuwpc68k' );
define( 'NONCE_KEY',        'ndzcypungazudjzyarfhgaa2qivnjjimjtfs5ifnvbmcu9xkwgshxkep9vtbbfbs' );
define( 'AUTH_SALT',        'cbefn1tzjtonypbybcvupjjkbq7vnj2gm1kwu6vdcym22exsegnz8uvifmgtnswy' );
define( 'SECURE_AUTH_SALT', 'ayxmlpytrzwnoufaxsryrxh9t8vngiqh7h1ixwxgym5ihwodfiyhs4l7vjdle8qb' );
define( 'LOGGED_IN_SALT',   'kith3wuhqotb0o0qkewtd1bmpi7e8kcajfudlzptc1ch8cyww0blkgu7aeg46anj' );
define( 'NONCE_SALT',       'j5v2q5fb3mrws1zvmbbxn3zazotrkogqznwv9ju6rkgbwmbuama2dwqym1zsympo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpor_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
