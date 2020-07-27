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
define( 'DB_NAME', 'i4614462_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i4614462_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B.Q31zVqvjLKGmteIY670' );

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
define('AUTH_KEY',         'dNI59CVb3cQt76HkaIDc5hw9DsO8AYSNshVoeelqS7M60j4aI9vA2K8pwFSNW45z');
define('SECURE_AUTH_KEY',  'sLnEHxfrgD6HavbaqdeaN5zZ0YpKZnOQRCNyOFYjhbtBqVQopl2V4NQALlfs7tQl');
define('LOGGED_IN_KEY',    'CvwSFZ7TvB1lYdWxSE5YzYN2hc97VUI0Bxt3iuvIZwbslU3hQOjAAJ34VEgwY62S');
define('NONCE_KEY',        'bEq1GVghbtEikNgOoPTsjm5aUsXXSm0TOH8CrohlvVFMTvTR9109CpeZpG22Eg8D');
define('AUTH_SALT',        'VK30wpFPDvyrPYOayRQgVsecW3UNj91kHlowkW9qFRCRdwkBEogd2euNHb58hgh3');
define('SECURE_AUTH_SALT', 'Ua7kaMLfFcIwozK83VVZePIO0tZRieO2yZ9Zk81kGtld32LztdYlBMRFkLx7BYzo');
define('LOGGED_IN_SALT',   '0tb0c7vgzLbP0EvV3t7vKHyC80w0Oizw3XuuHVBKkm3FEJud9iuKexfXyqkS3cFh');
define('NONCE_SALT',       'QTNayakK9JDmSd3h4q3ACfk7LCJQMQT7iBVTcK6fZOAtQx8EOfN1FVuGHrHLy7e8');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
