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
define( 'DB_NAME', 'new_wordpress_project' );

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
define( 'AUTH_KEY',         ')g^0<FApi59&g3[HcCYlG0RO!BA[*3=l47?Nt5_8tO65/f3QFTZse7G^bvZr:S45' );
define( 'SECURE_AUTH_KEY',  '3x4;0Ja#C(KIfYuwHK{Ir`5+>9RiGCv]xJ75&C1~<I{WCuoK/_d,+q{00BrN:Hnt' );
define( 'LOGGED_IN_KEY',    'Ox$Yet>!znv@,i5DU7xk*-5NN&yB39Fws+xc#T~AKt14rZ_SYatP2^HTmKmic)e(' );
define( 'NONCE_KEY',        '.8j=5C`eph6`q!iBD#3xt/4T??7V@X[`v1KL7,@)9YeR2T!D$n{LU?rj7E5cJc6x' );
define( 'AUTH_SALT',        '==P^AKGF?(JiftOp<O1>0tT!K=r-. <o6zhh}(j<NAGfFOX^cL[JT=^nJPLLhgd_' );
define( 'SECURE_AUTH_SALT', '+k*Ls+s,R}TW<fPn9(0bWbSfL-o9_>[ku?uLLO}:_&SFz{ !Ul1-v1*r+nP:J.H3' );
define( 'LOGGED_IN_SALT',   'zKI~9=,vK:kQk<S<([Gj^vWU=y5$~XU2u3`v|oMFJJu2j]72WI6UA)4&I32T;SUC' );
define( 'NONCE_SALT',       '~^W2O|*pJB<K9VLz]^2_K;U<&G)WM@1Zh!^1=D0umHP{IBnDXo&zCO^(u`|~J@eE' );

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
