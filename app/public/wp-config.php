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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'U2ZSssKh337qXbKT3Dnkejcmnt8nuRl4LE+8C6FUrIStmId+fV5L8VBzwAQ/PnVGSB58+pnSbCAwNSBidTsHVw==');
define('SECURE_AUTH_KEY',  '6yCrJSBLoU3pK+iN7UCKpDLCUYqTc8odb1jaEOHtytbeVs0m/pFGZkJXOPi6fKkht26kTw1ClZFinARbYetQNQ==');
define('LOGGED_IN_KEY',    'tBCrwIjZdTOZZLVU7YUmPL8B9dogzICPDbxtjfKmSxID3BcxotO5a02gmNzrwpE1D2CnOcsEiE/JDqJgDnwCTA==');
define('NONCE_KEY',        'XTo0SajkrHL1MBVHI+vdFaoEyDq3TfpCsBUDvpwfLTRERWQFiRLwnpkSVYuO7aLKbSvCzIIGiDwOFJq2Th5G7g==');
define('AUTH_SALT',        'JJRZFLLLOQxTI7R9bLMUxhg5seCricJoLr8G8IZluXVu0LXakSYUwUhsf2MIHFcETBJCM0NXRS68+UrdopmunA==');
define('SECURE_AUTH_SALT', 'CVCtzggBmcjQOcwYIqFgSMZP100PbEOvZPq7087cjrRMv4U+XqnBjUaUqFbRensXn7nEXw+oZgGFky28N5RtdA==');
define('LOGGED_IN_SALT',   'vxQSyXe+9SzF7LlGP/bw6iEqzGkRWiuYQuGoGuvdI1ZOn/FZULA4w/o1/1rx/BKz5dJIvJu2nsLT+udXnLWJrg==');
define('NONCE_SALT',       'oxMs9xBhzD/MZ1abeziEiS+SFwzhXDzrR/VJQRbGeDtyFSvKiFBPlZMgRsxSI0oRoZTePLfd7sf9oGw16suljQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SS_';

define('WP_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
