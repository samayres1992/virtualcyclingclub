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
define('DB_NAME', 'virtualcyclingclub');

/** MySQL database username */
define('DB_USER', 'sam');

/** MySQL database password */
define('DB_PASSWORD', 'Parker17*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-He+K%(y}9KN??G5{Yy,qgw>w]uhcqcTA6(X{3PUvuO%8b;d1}#iqj2v6g(I?c&)');
define('SECURE_AUTH_KEY',  '[*2_ez3!H+|.WMTI{OHX {}:m|{x|wWW7:-dwAwy>mR?Q$Z]r|ZDy6qXtzpZ8ke/');
define('LOGGED_IN_KEY',    '_6bE|0EBQb1.#wa=R$J7L+~DdW:usA:D`Sm~_bl9%|2][p71!y$%+^NswB>vR3,;');
define('NONCE_KEY',        'Ls tCqF).u+e.vkHp^x7d$%NzpK|U[l$+kM8a=[2PlrFLB3K={NF@kZ~w7rb/]5Q');
define('AUTH_SALT',        'Yj<)uTQgkCcncq)=k+H1iiMvOQ8m]at],y 363@l}civbbE%y_nfo]EQ~w%yO!Yo');
define('SECURE_AUTH_SALT', 'aw90c0h`e^9zK+>tfk.f/u$AaSLFvE+--MPu#rEjNJ;p]JlpNG6pyf19`PMBka/H');
define('LOGGED_IN_SALT',   ')=FhR]&RI6f(J>Qj`:A#SaI|RSa/kR`Hrs{~qV^X_pHD<8n>|[|z7Fw(|tm00Eqj');
define('NONCE_SALT',       ';o9SYZhpu#K~kb>7a]V]=?,0Hnp|-SQFC6)oc4|S3X;Cj/|Yn0+lD.y^(>DveNrL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
