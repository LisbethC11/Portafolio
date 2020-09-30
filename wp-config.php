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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portafolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x|.`)RkZD22b{.4rXT%U($Z|h:VM6&]kXtWFnsY{bII4A`ddf*m&ETB|POyg 5O}' );
define( 'SECURE_AUTH_KEY',  '&v:~w>=!A=!h:/{omd4bH=iy:6ZTMc15q;C:s~WD4FI+3SbgG|wES/suu{,XV,-A' );
define( 'LOGGED_IN_KEY',    ';[5_s/4O:>8W_N/-}EAORzk=%@B4jI:x2bWkN))t{nT`bs.ad5@Uw3avkrBpAj)c' );
define( 'NONCE_KEY',        'X=id)Lg]nubDAIez,=N2&xOg$,_(]mku d(6gF#s>l/gMt2}&O6f6(,/SOd:R$;g' );
define( 'AUTH_SALT',        ':G<rd]`l2U1dZf6YgKgujeSeE-n! :m$VFJrz=xows`5U^mcZWp6~Ee8wARNAnV7' );
define( 'SECURE_AUTH_SALT', 'sr%I3z,z25)u|YCv=f|a#f$Cyl6Eb2P]_Tz9ffdK:lMBb`tTd`: 6~QjsViYs_h7' );
define( 'LOGGED_IN_SALT',   '~Twr+|W-8DVI,)J:%ccqox8wjFOMAM*{nnn^$&sGd4sg}(YK=h)p_pPz?(,&cO@$' );
define( 'NONCE_SALT',       'B;rDr13r%Qi7NmS#7RnxP%vdC&Y[wu>_?o0R9j}MWj<.gYkxz{{cO{Z:rS/_98J!' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
