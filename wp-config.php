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
define( 'DB_NAME', 'tiendapp_db' );

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
define( 'AUTH_KEY',         'vEt]B)i)nCuvv2NG%^P`A2qG,ds9/<jC$?#47Pbv@&Y7ra0k},#s_>ufsVlQ$,FU' );
define( 'SECURE_AUTH_KEY',  'p@[&<)OD$G3#=p[T7{]+)FHCr<m~gJ-+,)YA5f1o1o!=<)@e1_;=md16gD/6Nd#(' );
define( 'LOGGED_IN_KEY',    '3GRh G1WV;[uTfFg2V&Zv&>Qfc8_?[I(r %i6} `~jR115@qOJ=,%x=2:7Jb&_LL' );
define( 'NONCE_KEY',        '$%pZWM]){U@Fd>%6rxj(0m/g l/J;3^0-@{43#%n?NP^p,x3VJWL(6D#U@*:O>i>' );
define( 'AUTH_SALT',        'nd#z<UB6#`zW9 Jn9=v>SHsIOU|V/0DLZQ/aOXkb}wXKod9p|o>zX3x;aQ8,*[[3' );
define( 'SECURE_AUTH_SALT', 'eXunyduxqyKb/mfj^qQ2;?#Mv.2.%J6P|n23DeThws1uLF=)/O!p-UxDns_5jUIh' );
define( 'LOGGED_IN_SALT',   '19XjQ~.SpW5{Vk2v992}(;@WL[.[9$1wa*7C31E_7dW8,yPSC>.K=d=F?IZM#ylX' );
define( 'NONCE_SALT',       '{ZIVB|Is`$~X9ma2$)9N9O8 >`|<PB2pK6!y~]d|3JLQ&*e_ T|R>4<qX|(_6TBZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
