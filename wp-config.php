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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alfaruq' );

/** MySQL database username */
define( 'DB_USER', 'coki' );

/** MySQL database password */
define( 'DB_PASSWORD', '91681995' );

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
define( 'AUTH_KEY',         '@VE42:iAN@cf(PQz/@_RhjE}3-]R NEmnSU2W#|Rm]-[&fL3R :-<Gc)!A3dND _' );
define( 'SECURE_AUTH_KEY',  'FfD1fLmEwkPwM)?g(`h%)@N$B#CXYFc/TI>2C:{ sXaG)|xtfi:!L!}S:UCG0i*`' );
define( 'LOGGED_IN_KEY',    '3y`STAQ|(O?~AG=7Jm%nyqVqW7%S5cojlU?^nzsI).x0C6?vDHUaixrmKUa&>p-9' );
define( 'NONCE_KEY',        'hk7~t;Ah_&kCxd$vrcv{aKy(5?Na$D/B1Vyw|GnBdT-.3N2{dh%}k$g:CY|,^B|H' );
define( 'AUTH_SALT',        '/[6Lw{e`q6M[4DbBw>w_iBhu0bb&jEl9PUa8,/u{kb-ME8Bb/b|(g;7[}S -__SN' );
define( 'SECURE_AUTH_SALT', 'BGY1]m6gkyA^mFEx.Y ?~Iu%3$xYECM&UW}NkP2QhM;obL{,$[T7I754$8A:_a0b' );
define( 'LOGGED_IN_SALT',   'X9sJcXu* IRa+p{S4tp<lA3]cBNQI_3doXsK6&K[~wO6=+j*+(:j/{mjZ++ }Af^' );
define( 'NONCE_SALT',       '&7<ne,~ =}UpaLzqmoH|.k SJe.74bBEl.#tcTd_VLQWT[DNt_ahxmizn#rA3(zU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
