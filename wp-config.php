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
define('DB_NAME', 'reflect_web');
/** MySQL database username */
define('DB_USER', 'reflect_user');
/** MySQL database password */
define('DB_PASSWORD', 'Fj6s@o05');
/** MySQL hostname */
define('DB_HOST', '87.238.161.93');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CMrOYoOumAvi2itrsNTkVXUYLtz4MRp7YqtYzrH2k6SrTLwASvAlAQNPPiNC');
define('SECURE_AUTH_KEY',  'mG7xTIaZwgJAPB6+0Qf2fdyZD5Fh+hMYzSHYkgptRwLRnuWfJrH8Ja/ntq9I');
define('LOGGED_IN_KEY',    'O+/55zQPki5w5SjJfMUcffIAiyRGqYv2cUCSBp3vVVJCLIOGa/LsqAxEMFTU');
define('NONCE_KEY',        'ms5O9ncrHWDfXeakQWurmdqt0iX3h9SbLPqRnNSwVtf7guvsiwUaMg9D7BQD');
define('AUTH_SALT',        'hO4knJusHfQOCYulJcJR0MxhpeJCuWgbln2DHeT79R1CGojz5ZmDkMP3FFb/');
define('SECURE_AUTH_SALT', '7YPyeiZQCJmGudbrmHwXdNpe+Vf3PvuTr9f1b2R0UxF3Sl5Bp0v0tX/TJIhe');
define('LOGGED_IN_SALT',   '4A9Zju44PklsodjcRRFViJbD4ADnvvFn5Tpn+GIq0EEbWpwzz7flsIHyYzE/');
define('NONCE_SALT',       'Jvtgwbi9p798EEqKYJZH5Ayk2XK/U0VUqdzJSYdLzWQIp/9eUPQVrD5HMeam');
define('CONCATENATE_SCRIPTS', false );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod271_';
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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');