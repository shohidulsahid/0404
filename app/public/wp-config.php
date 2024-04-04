<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{YmbY~4w,w4iH>`S]6ZtHlydOzRZ%c^!+WSQQ/]c+^sQbQUv3EE2}vEY~V8OmKD~' );
define( 'SECURE_AUTH_KEY',   '|s{[H+0B(_M:A0rC<r3994|f*q:3(5%3rk9wG*YMD36byPi_}v7fM6T*.oVMS:o?' );
define( 'LOGGED_IN_KEY',     'yMA{Lv=6#{az3ZVOS>T*Pl:7|C~DwwGi;O9Wu3EW3ULMo=P(9dHy3#C-y*nNVFG5' );
define( 'NONCE_KEY',         'Cl@d--m,^s)/yZ>kQ@9|g~^eT4j5Zf@o{+_;2[Xe_.1>tOZMRfN$[V7Sksr5WR_v' );
define( 'AUTH_SALT',         '@)u@a0C)0kxc*zy7AxyvH?zn|DjXI8eI,*Q0CH9oYt&x1Q}s@o8gmoAd^l?7xx(g' );
define( 'SECURE_AUTH_SALT',  'K]f5yHY FXJ+}3xDX;#}Nq[G*c|nXF2-@+.mg+{>PBm&KO]n)Ulxf?RB|ZJPAT[:' );
define( 'LOGGED_IN_SALT',    'W*0BRqSU2>|}J0QXqH8=a;Y#(Xy{STgu:in;MCfeiPyXV,Qn~vd`,d_oswK|$9=+' );
define( 'NONCE_SALT',        '!V/:N$ 5kCB`:DyL:[jsz~.C%|;N^E;#O]0B+%7!=ynXFY0{y3:|S{zdZoqTGg`w' );
define( 'WP_CACHE_KEY_SALT', 'S_NH?1`ICS`o>J%XSMgrbu00 +g@{1R`E`<3-L*+_Mry0_B6|C=qG2M~~_1pS8Q:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
