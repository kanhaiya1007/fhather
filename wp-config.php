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
define( 'DB_NAME', 'father' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!o@zH>]1jpAyP;UjXV2W*}Ur8QC*^mW*d3mkQh7Sjg?+J+>F&Jw(W<cuQ}WvP1|W' );
define( 'SECURE_AUTH_KEY',  'HftI91|v{+t}?AhM+i!|b$5FUNg]b~j3GSH|9jKbRpiEb48}H|)Ju0W%0=R,*)F)' );
define( 'LOGGED_IN_KEY',    '@rIX^`{g>kpCW*+ze,2sn&&r4Ob[&i@*;xETmK6>[B0W3<U1;%0>dM1_FKLBkFMM' );
define( 'NONCE_KEY',        'gk20Sm#n9Suo1W#zo(|IQ2{$5u(RTnrzr_[YF2sTeSb%azHv954pp}MEeG32H9jS' );
define( 'AUTH_SALT',        'l?LEA}]8Fo7UOpfxozy;!:Pd.PGZ]iWd5pB-44^$8Gi7W<1l3d9t_aiEQO]YUV}2' );
define( 'SECURE_AUTH_SALT', 'SQz9d:wyM)PBLk]p.9XQ!_[JM ]Zl82dSB%wWm3m*[P_|7[d[PzmUkl-Tn7Z728s' );
define( 'LOGGED_IN_SALT',   '_sG}).uUC?~OY*<n!Qj! p-jT,s:odlY/|IDdYyJME~Iy4g1tp9{)/V=c#6K=zZi' );
define( 'NONCE_SALT',       'yG(BZ0dgwOSg4cq7]T|VJ&NZa-d|t@KCPH,(Zyo~Yyo;p?0Jq]M0cGUke1Aw#pbN' );

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
