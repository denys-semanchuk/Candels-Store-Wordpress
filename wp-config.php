<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'candels_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'J<4qn)j=.C8@&!~w9#ry+u])L(V$;Hs0OhLMdI|6Fq0{0=K(&Paw]@Z:Oc@AhyYr' );
define( 'SECURE_AUTH_KEY',  'Tx `#A<27CU.FBm1J+/`8PHWO%-0w/X|g^D~1*s$^d@PH}>M5Ycr%wHZv%odKS?i' );
define( 'LOGGED_IN_KEY',    '=M$tX{7tS q%z*NkgupyidJ^BuUdFi}}5Lp?/ nqCLR?IR:[.!L$*Q@rno*:D3>Q' );
define( 'NONCE_KEY',        '!/<mlg ``L}H:bdC.Y>C<I9l{DwSGsJy/z&{`pC#;K{E6&T8ky.h7/$,/F5{m?x}' );
define( 'AUTH_SALT',        '`fL]1::YPZ_4dqO<72P`+7;dn#*ZH/E$59y;6} ]%ZqSZc5p0SkGl]qA757zWFBC' );
define( 'SECURE_AUTH_SALT', '+Gmqskox)&*QYK2!N1?iYg=0~YBWI67a=!K:BU~CyP@=lUa 9,t$+u_],-A!kavE' );
define( 'LOGGED_IN_SALT',   '49uF`e-Q]QA:hc(+Picl*JNu+cVb;RttyMEMc^gz=!1&+F.ccm5y]CSEJVhp3R6[' );
define( 'NONCE_SALT',       'Zyr*ytQWsB#H+XspT,G:HtM%{V@})9_u&w-E}Avea3 &:Jj=DYS$ii*l?Px%4we_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
