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
define( 'DB_NAME', 'bsb7ql8sdvea8uikbj5d' );

/** MySQL database username */
define( 'DB_USER', 'utevovgo3ln4ki4p' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FORxhXOKmk2PUW09di6j' );

/** MySQL hostname */
define( 'DB_HOST', 'bsb7ql8sdvea8uikbj5d-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         'X+opkiX2jbj8fl[U&m2[[,~na2A T;Vs9,KFX9li/iC~M?2@,,]5=feb|oQC!.mf' );
define( 'SECURE_AUTH_KEY',  '~jbR:p+l5,_0xSiG1fj_,AAe+_h.]?-J_ilw1F3(Fs,./micmzf8<__q; (O{nF3' );
define( 'LOGGED_IN_KEY',    '!FW~O l9pv9@nr5Bj2VmR>kdY/t(==9./5u(&m0wJ7[~-,n;x~hNqj3BI~0%!1.r' );
define( 'NONCE_KEY',        'p}xp 9{TDpbO4X+BH%7}b5E/z:%hQabcYxq((x0=Wv/,m=a6?v+Ms<]TDFu*rPo9' );
define( 'AUTH_SALT',        'w]hQb*eG<yomLS_W,#G+@4sHI./6C >Y1gB/3d<Q!H|J[clc2-uZ^Zca-AWp^mn@' );
define( 'SECURE_AUTH_SALT', 'y+_:c7in?+t;/g-he!64AC:BlgGfX-!KU/qtVAYTJ>UN8R_a<wfy7>ZJNcbv7BLx' );
define( 'LOGGED_IN_SALT',   'GyEDjq(f!5[xP^E{Zq!|@8nxH^ZNH)< ;I=h>2,b*${Dda~2hIX=]4_W(RdoeUkJ' );
define( 'NONCE_SALT',       'U5:OxfGan4:oAQwm@xXLLk|B]OGkx-,P?&PHuEwBw^4vOiQ?j0VZ2 N.z)WnX?2H' );

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
