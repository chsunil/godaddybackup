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
define( 'DB_NAME', 'democust' );
/** MySQL database username */
define( 'DB_USER', 'democust' );
/** MySQL database password */
define( 'DB_PASSWORD', 'democust@123' );
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
define('AUTH_KEY',         '5b9StvsOl5MwFtjd7kmNoCjIpRm0egyqAfpcciClWpmawvoduSUb0XGU3S5DBVEV');
define('SECURE_AUTH_KEY',  'brU7s2bWKmlRNT1SFXtKpayy9AIWAkaKK7GTacSu7xzsEuzXXJYJ73hGwfChXQnW');
define('LOGGED_IN_KEY',    'Yc5YhbORf6oA70Y6PcCyCb6dMrONJqUK78lOPISJ5K37qv0nDM5fsKH7vlay7fa1');
define('NONCE_KEY',        'g85IdUBOXWFxNczzV0ddFlq1Wt9La4UXhRzFJSHgWfFM8xe5Zqp1KYkUjcuP1c6n');
define('AUTH_SALT',        'ZhOhsAwrbHYcEdL9R4WJyUeWWGSAhQ1JBghpPxEP7T8qiQsz42IkF7uayw0h3adB');
define('SECURE_AUTH_SALT', 'VMXP1OXRGuep3q0PD1HcI2EKPO3bP8Cl9hsKWtyhwhgqDXf4un7fehwPajcJ29MX');
define('LOGGED_IN_SALT',   'ROdMyXGuRpiTMTnvkW7HdNW4cAj6Tl99jYPgwn3XsUPkGzbruP01854AC1sl1iqx');
define('NONCE_SALT',       'GaKnLswHIZUMoe4fek8ys3lgT2vIjpH4BIlbWvSePne4Y2sMPkfYDaAH1H9srOiD');
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
