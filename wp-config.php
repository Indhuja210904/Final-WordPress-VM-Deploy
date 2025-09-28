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
define('AUTH_KEY',         'G.mzQb}chAoV_M8:o#92:D$^*n7y$vJ8~lS1|1 #[3m{- *X3g-k%m?FT$l=tjnw');
define('SECURE_AUTH_KEY',  '8J+Kt<jFww3w[Xy7pbF5UebDksNd-EProelH$F||s-B6kg)l}SznWE~}$]Ap-=R/');
define('LOGGED_IN_KEY',    'b.y.Li/xL/Vl76~2Z<?3DJ<m+v-oCT+RO+HE.#P*-3:sVChg1-*_bPSQS6{#Xj(=');
define('NONCE_KEY',        '+OUw.zDtuX!G8Xf4VgKACw9PT:Z4D9%TmBs{!sfzP.hy[evQA- $.DGyC$<Re _}');
define('AUTH_SALT',        ' b|K]y5|++vujgPrXAEc-(.,v^I?n/c;+k]>%|q 76rF{u>~,Jz9WDWGf`;~P(az');
define('SECURE_AUTH_SALT', 'w<+Egx?MB|d%}q|S.-F/`-`E-,M +u34Xh%ENzg>A>3)u-nu#=SW7Dn>:t-qFS8m');
define('LOGGED_IN_SALT',   '`)=Ka#|H>j3]X-QvU|L|F|R|j`~E`66_U;4`|a8Pn>M#iYZ*q@+x/d8ulQc6W9kb');
define('NONCE_SALT',       'ylIri||b`z+fNs-JwjGtE*:~1w0=]HQ|SRRVK),DU`A6]UHm[pL/S1Z`&g&;Mp&g');

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
// Added for SQLite Integration
define( 'DB_DIR', WP_CONTENT_DIR . '/database' );
define( 'DB_FILE', 'database.sqlite' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
