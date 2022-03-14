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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'armada' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/!V3|j2Ri(;QQrwaJ/6GQ-ji4i0-Cs!N;A?u};~oC9M3Y?S g<.7<UAg*I%l=oo*' );
define( 'SECURE_AUTH_KEY',  ')JlY>=1$`/W@Vv8h{mjErnFOhPSLPB@RA<bV/J3bKH2tFnS>c[cVOLej490j~te2' );
define( 'LOGGED_IN_KEY',    'sZe/b8!?:,?Fq}mbaFl!gB!{/;]^N1lP~e62u~xH_Hc;L{|_#}7f2;R<e&!fr)Cj' );
define( 'NONCE_KEY',        '|u>tt,|NK2#vD`$.:t`7tI-&G$)%IC>6)Q5t=F$ic5^lc;HqU 1%<~fn4&je(xZR' );
define( 'AUTH_SALT',        'P#[r_P#+j?62*d%=7g`a>]vAN?M!$(jpkaHy^#E<gxiXI`7JD[Pd1t?avJM1VT$/' );
define( 'SECURE_AUTH_SALT', 'g=Q1fh@@RQzS+/w-NmbG9suY(0j~1m?+F:)lV]?s,TBGK&|! d-JPn^/CB_!}5uW' );
define( 'LOGGED_IN_SALT',   'UxJ}TL^E_.{BID{u7F?R<X]T9f<~/q?-3@a8^@vt&J|~ZhuMviz>/(cK>.MBh|Y-' );
define( 'NONCE_SALT',       'Jk#Qi%!1*:>;^P[wO_!+r6R3$>#`}Q$kf$!nNYx(}8pWTem,gn2h_)?M@~UYv3%q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
