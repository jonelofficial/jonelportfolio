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
define( 'DB_NAME', 'jonelportfolio' );

/** Database username */
define( 'DB_USER', 'jonelportfolio' );

/** Database password */
define( 'DB_PASSWORD', 'jonelportfolio_1924' );

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
define( 'AUTH_KEY',         'y %-`Yy|(A*e=8W}:>[[t:eI7d-7%:v(]ST0Tad-`2b&mf;2ycaZ+u>p*Y>8E{(7' );
define( 'SECURE_AUTH_KEY',  'ov4Iy02[7sd]{=a1V5sr3/p69*PpS)%`GC(`u>pT6~!ct]b< -ETN=R>,am7%rd%' );
define( 'LOGGED_IN_KEY',    '+3>P[?6%PgSp!aeg9>M10+s^9/vVCdBEv]li4y:jG$ex0d`}en:Jhq7H&}lL90Nz' );
define( 'NONCE_KEY',        'TH?5/WgUg@Zvr+bWWscn@CHFHUP94&>4T&;2B(hj;F/;_^(ij:65DXa8yKr=6Q[R' );
define( 'AUTH_SALT',        '{lo+Lyos9,gb>#Zuy`h|uBJfAF^$4F.-Q/)E A` J_atWj6*|X^BI<c,9PdW990Q' );
define( 'SECURE_AUTH_SALT', '~VeFa[WXfa=/HL*yR~zM.m;:+Na_7/o;KZj,6LjL!X^~DESKr$:hT-c(!,jrSi;E' );
define( 'LOGGED_IN_SALT',   'iCWS7rpRt142tz75C$mf5BB]W5Fcj5IO~D:uxUT{sCpQP} CE]D2M~Z`C|r7AXje' );
define( 'NONCE_SALT',       'Ux~{I,V~WA]q0ZcKGpsxzJzLdPr,nYyB*G^Y=H?gp5mJub?l:9[}$rosI7VAkg%p' );

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
