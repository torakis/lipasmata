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
define( 'DB_NAME', 'lipasmata' );

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
define( 'AUTH_KEY',         ']O^=D4brM^1aQ#{auev.h=5|`Ds},TN6m?X8;OuLWV%^<kL4R_Ln%B)MtznO-C4/' );
define( 'SECURE_AUTH_KEY',  '1$B<DZdT--xe6fu?$xdKAX=X.d?~x#qiW,[k`&wTr]9,U?W^wV0tEc~(l6Eat#t7' );
define( 'LOGGED_IN_KEY',    'OZVdLLP,~=3|f=9Qay&=WoTP//TvN~IGcH#s;K!]? @8dr7&`h:QY},YaJ0X3=g0' );
define( 'NONCE_KEY',        '0xt:5+x!@.oQ7|f<Svku-t}<0Lsb59: pSlgF`QDl0p,}qAQ?}!Ns#39j,),3}xf' );
define( 'AUTH_SALT',        '>gS 3}M9| #}Q}SPEm`/lfw=[^xPJ__x]`{+,:4ZT1`@roF}P~,Mc:7I8gR5Nf4I' );
define( 'SECURE_AUTH_SALT', 'Fud=vri/n(l%}Qz?F>)w3G`(xrz3E8;=7|3U3ns~M@1p){[<$YMFt~Yz}-zX=BTM' );
define( 'LOGGED_IN_SALT',   '=b`2n)AG(o>Dl*{ diO?E?P,&xF#uCutT/j+(tQeJ2I%k7A,o9w!;idH?ruE5HKC' );
define( 'NONCE_SALT',       ')G#E?4b.?-}ZZ`<>|4,PhruV2cI0RIBOf=&0m0p4ZW%+ fK@%RT,g4Avyf7+?qLv' );

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
