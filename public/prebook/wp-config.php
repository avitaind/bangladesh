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
define('DB_NAME', 'nexstbvk_prebook');

/** MySQL database username */
define('DB_USER', 'nexstbvk_avita');

/** MySQL database password */
define('DB_PASSWORD', 'Avita@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6rxvj1hcpph8viediv2gwicxif7f2f65lysc9c52xdbelgolgcl9cqdkhqq3txv1');
define('SECURE_AUTH_KEY',  '3hvjejvup8qodhxilg4tqxuvzsjbldlstovqk6yrl9owf22nqdgtyctyfxmxkbl5');
define('LOGGED_IN_KEY',    'bnre0cyazakpjvvkcl7xy5agr1hckkoklyld3h13secumgqcvrkdwq2bofvkb4jw');
define('NONCE_KEY',        'qqfbw09yhoqt0ojizsiywstss3h2sqylaalicftkwaozlj0tmgydp6gskwhwg8ri');
define('AUTH_SALT',        'haeplattmef98itrjohq2zzsramt9jixqaoadxuozibfzynzvfq3n9cs4nqcycem');
define('SECURE_AUTH_SALT', 'x9xuhi4xkpqoyapdnfybiogt4hcip5x9hjzbiifml0bovtefyb0ibk6ucq3wloy4');
define('LOGGED_IN_SALT',   'pzckjubwbwd9v2p9we9rkgfq8c7ywrtpmn0hnxr9i4y5mwtdzefzkj4iczg5wwnz');
define('NONCE_SALT',       'cgwjwx82mf1c8vwituvc19s2rwuz6vo5xbflsy4qfljegnbko0dmr63xxfgztbqe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpma_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
