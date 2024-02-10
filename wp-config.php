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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'j4#YQB;LRl#TOm@jvS,q c7Uep~.IxkCQ<gp|C&Il#gOI&6Ndy}Qel;^qZl[L=/$' );
define( 'SECURE_AUTH_KEY',  '/@zrVD!2de-ZX8%T6:FxFX5o9CI:-H=8az@9!&&QyR;Adw_-R{xNb0HE-ew{9$=5' );
define( 'LOGGED_IN_KEY',    '%U^:#_:(w>uxz91..[z~$Po@ms,RnQskyAB-~eFh7zvG#*9#b3fCh+f|Fm21e^[/' );
define( 'NONCE_KEY',        'dP[8%kbt1nR2^+:d7f>gP:/x>&Q8XYD%%E)o|YAy1Z&2)/<P3Il!HE,?BY^K Ud|' );
define( 'AUTH_SALT',        '1~jNrky%XihC$.5hL0E#9G.;xaqSul ;^`P83tVF-N8wCNAR5ZGYGwiR<bmLbkze' );
define( 'SECURE_AUTH_SALT', '-P|9wZ#PR@Jrto|bYEWAGp&UzB)+3jv.}+2qgtqu~_4Hqy6.5h[*]&$Z8PSe0mB$' );
define( 'LOGGED_IN_SALT',   '+alo3lG>eV9jd{FQ4&h5%nr|0^[9Wb]vd&E ;H?l_/4:.OHqy]#4w<k-OQ0GKj.u' );
define( 'NONCE_SALT',       's%t&mIJE&v/<I|]rV,J8<.X_GG.=p%oDBAN_JzYZ>)(JbH_5`:+K#L)z0suP$B{n' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
