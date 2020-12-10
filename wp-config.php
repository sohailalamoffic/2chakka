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
define( 'DB_NAME', '2chakka_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         't)EoBwl!HE3!(F:^50WQWxOrTPC?r0Y^kXSNw?N$t|qwWVtZIzlry]7f9aE.GlsI' );
define( 'SECURE_AUTH_KEY',  'N6dpo6LqIG3 Yt^k++YQ8hw?Vuawq~>(Ar6%0^fW?XaS_@R,T~!41|?TrFs+?-p$' );
define( 'LOGGED_IN_KEY',    'I_ $:vF5&;HS>KxaiakE_,wW:x`XtVRw~l2<[^<pVTesxJ^5dGE6aRKRIp~ 7>gb' );
define( 'NONCE_KEY',        '4rvgx>bpF#J.]|TH*t!4,%V/-^0}v#_3G@Dj>D6 (JpdMv8Rb_`[~}RzxXc+|5Yc' );
define( 'AUTH_SALT',        '{;a0COS//hjJ!rM&H,sx9c:1DsuWLm_]&R$gfQW^M!#rNY)gfiy=>6LGBUOJq_Y%' );
define( 'SECURE_AUTH_SALT', 'SRq^,+big%`i/O2]F(,L.R!Vj5k$[=[ECB<ZD!cp#$3PrhN/SE8z)?#__@ZHrAsI' );
define( 'LOGGED_IN_SALT',   'f(Mn%JS&s_k>/`|M( KRX)BG$0P2+N%uys*l24c? V?E Bz@63^h9FpZoPjNgA+5' );
define( 'NONCE_SALT',       'w{zN[P%YUx:d=nC4>:my`Gy=N Cr3XA,:MM{|frI >f>y6D0Cq!-4#9lyU i3yMo' );

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
