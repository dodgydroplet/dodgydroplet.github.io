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
define( 'DB_NAME', 'dodgydroplet.github.io_db' );

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
define( 'AUTH_KEY',         '(MwC:!3!MT6/>mdc^8k?}Z,d(XN;l#x}q-4U/Jf3,X<n5e$qHMxCLCKIg7/n|r@0' );
define( 'SECURE_AUTH_KEY',  '.EEZW-vBIG]4<!X=~o4^&pyke!pBkhct^<[)C@Z}*hE$BJBWrp%]E@>T)w#_6nDw' );
define( 'LOGGED_IN_KEY',    'x1,I@7{5wOOCMUlzo:]TNpo.+~R.tmc~ 3S&JQKjDEt?01QipI AN8wr,Hd;$9D>' );
define( 'NONCE_KEY',        'MvO}6P^K4;b2::C5l2m>^rlD?O9nv0U)FQXLy.?y p[_ADfl/IS@D?T_kKjtkGFX' );
define( 'AUTH_SALT',        '4>IvVzK9w=7IP+y%hsi&;fzzPLdy||h:Kz3?fBe@Kg;:BD5HMOtQN3gXwfrE$|Tk' );
define( 'SECURE_AUTH_SALT', '4~P_HVg0Yzow@q{ ?!E$k;RcljV*hH}D/a89s?7IRgTk-pOqasf<?g*ZH7^kA]g ' );
define( 'LOGGED_IN_SALT',   'rQeb2j~[j+DrY;,]U#P(+VryeBj;=PuX3Ih4jIGcIaUjw7&jCl!RoI{`j`KuVC<4' );
define( 'NONCE_SALT',       'M}=<}]9rk*e0!$kcr#KI5J%*LuBp&k{m,! wW@>;fje~^{&K_x@ X76T9PI)>9;i' );

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
