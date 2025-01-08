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
define( 'DB_NAME', 'wordpress-weterynarz-rezerwacje' );

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
define( 'AUTH_KEY',         'Ac>C]|-o!ZLOmN-_m$})*v:qD2yBI`mFe.8l38ao10A{%%.9sdR~A~oGc@0qe@a^' );
define( 'SECURE_AUTH_KEY',  '.Zlg.{04abdQY5AtY)&h~0I6>iI9(~=Vu?d@exM@G1WKyG@VS=jkp?p}oZqm;9CV' );
define( 'LOGGED_IN_KEY',    '6%6p>o-#(GJSX/4;E/7RHo!HKD]mNraw!=g],xF:2a&.#C?n6VXZ@M2M+1R7{@tz' );
define( 'NONCE_KEY',        'L-.`Qy66<<+{ta{(wCQ&;31@aH(H?<gI0b{z/Z@MEtI&KNi0RcbZn8ruXh7R1pW/' );
define( 'AUTH_SALT',        'YsiuylEI1pST3,CCnR.0M(Ur3-O]T8^@.[KGE]YMaS1|h;UuVnMAD*eo0TZ*F 3P' );
define( 'SECURE_AUTH_SALT', '4JAJ<XpFjNZ^UdJgWh-0:0FTYv;|C!)0T)fx8B!~r{Pb]p^hR]O_0WqH!#>BeGqS' );
define( 'LOGGED_IN_SALT',   'GmH/uZrmZ6SJ.yd<<auYGj#NQV7ULD=z%Q)#k&J8@v$T`;>WY$.$>@at$K$XTv1v' );
define( 'NONCE_SALT',       'Y]>p:`i<mYk=@NE&q@>iOVdrY~Gyhoo{$gbzj@,o~x}eY/.2LpN :2Fr-.ET`et5' );

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
