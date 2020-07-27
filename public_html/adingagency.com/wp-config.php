<?php
define('WP_CACHE', true); // Added by Cache Enabler


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
define( 'DB_NAME', "adingagency.com" );

/** MySQL database username */
define( 'DB_USER', "adingagencycom" );

/** MySQL database password */
define( 'DB_PASSWORD', "q4Juz18QFfUq" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          'c]==3U3jPs!%m21J<I;3jkWi)ohMC]}TZK;nDghgf^Dx0=d@8g7;~nUhE5q,WwWA' );
define( 'SECURE_AUTH_KEY',   'l}tsFF/W,J_]D_M|/JgGW4o~<(#qUnNTN0CgWx#!1NTs%:ysjF%>B=]9T+tlF]+Q' );
define( 'LOGGED_IN_KEY',     'I.4hN2ON}Euyvf%FyjG#n1g|,D[+2T)`HW5,$)?rDQxKyV[4 hK!JMc{0ese@Or;' );
define( 'NONCE_KEY',         'Gn=G+v1}aVW%Zum+&0_H^Nv<%_RguX,Oz_o{1? i`1i+G3DV3]YUMZ{r/lJ?C&b-' );
define( 'AUTH_SALT',         'M!BnVCB;~uQ4lcmRb?)IC2o^V}@=%b!KI.Du&DJ8p]b`%2NO0$-w!f*LwBK;)C^X' );
define( 'SECURE_AUTH_SALT',  '}b@|s:@#TtRxa3KXxTx2 4_r?+RhpnP`(%)P`XX:?I1vT*]8#u^D)+IdM$1p4sv>' );
define( 'LOGGED_IN_SALT',    '7]L:u)m!9Nf.f0BDnJD%G|~C>CulWPgt:u:UNx2=]fi)itmGuO]X~S2y4u,IH G@' );
define( 'NONCE_SALT',        ']7&uSux{84jfmgBh|r6sH+>f99xDh6_;UhQ~}]SjEJTQbX)AJ_pjeEz?zxo4)Zep' );
define( 'WP_CACHE_KEY_SALT', 'lg^d2JQ7UNlDQyp9)#,)$#MCF_Ls4eSE3IS(E4tP)Gy^Si$QK/Y)s)|NFPOWh@L`' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_POST_REVISIONS', 3 );


define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

