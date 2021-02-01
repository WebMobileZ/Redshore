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
define('DB_NAME', 'webmobi5_redshore');

/** MySQL database username */
define('DB_USER', 'webmobi5_redshor');



/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '090a27e753abb7f9b13eed1211fd7118c1ced372fc280369244470d683a4ee08');
define('SECURE_AUTH_KEY', '8d522ccc581ec304a3971a9f663b00ac51d95722deb137a2bca675ad8d1987ef');
define('LOGGED_IN_KEY', 'a277e2175555ea271d119889280ba153380c40f0358950fe0c034d45c0d07ae3');
define('NONCE_KEY', '359d13c56e4b5fb59712ff46573d2c458f7dc9b1af7a7cfeeda11f69f6b4feb5');
define('AUTH_SALT', '26d48ec4fa56ae2010b18e74b5bde69dd0b15492a69a7fef9f7706d688850245');
define('SECURE_AUTH_SALT', '187d9a175017c22cc9601223e06a02011736a7e19aa6034a23fc914200bcf718');
define('LOGGED_IN_SALT', 'e428c49dc8ea64f41721747012a39aafd427c438ffa6ea1303019940794688e4');
define('NONCE_SALT', '979debc7b86be05c84a201d838ce66a723afc2d1fb04bda53d3b842e602c83f4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
