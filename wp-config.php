<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u2451582_wp275' );

/** MySQL database username */
define( 'DB_USER', 'u2451582_wp275' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p]368wSY1@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'qfeh1zzuowdx9jqafbjzziiztbegkp0mwxrjo7rskcwlfnlnwjvzi7mu17p689p1' );
define( 'SECURE_AUTH_KEY',  'j04n2ywlr2u1qu77er5ilh2hpibs6daqnyexmj46lgrxzuhxuae9xolraongqr34' );
define( 'LOGGED_IN_KEY',    'ex0e0x7tqqlulxsvgtusvta618k7kus6y6sbptxkstnibdhvbw9a55dtwibdwpoy' );
define( 'NONCE_KEY',        '5auffbdpzj8te0wymvev2d1qbd9kjssayeqrwjikf2ktgftdxjgzlngurjgahexc' );
define( 'AUTH_SALT',        'fqrdprqve4w95ntm6pgsgrtehej3no7sfjurs6pdkjbrmleojezbwmbklinlqx1e' );
define( 'SECURE_AUTH_SALT', 'bhvyo1ph3uympy5ifm1dtcpyyztwayzefxqvlyvwy6ywy7ncznwvtpksjthvhz9u' );
define( 'LOGGED_IN_SALT',   'ffwv9l9c1flitmlhq9te9wmhpqn76yq9eggawkpodmxqsuy0hu3bkccyibkt5ebh' );
define( 'NONCE_SALT',       'zd2zayyampnqhurhswby1swszvskwirhz0ts7c5fehngfgabcuwrnxjdvfypomvw' );

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
