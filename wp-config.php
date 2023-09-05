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
define( 'DB_NAME', 'bdd_wp' );

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
define( 'AUTH_KEY',         '`NMn)ahO}?`rJcWD*FTLVBG#7!eK_l#}hYz6Up2[LgA{zn64dt7(-<W#x4>;FXpD' );
define( 'SECURE_AUTH_KEY',  'unvVYIP,tW`&DX0mepqH2pLu3t=%qX%NH@QP/hEwc,JDn@:6VC9$7kCGO#B)eM+#' );
define( 'LOGGED_IN_KEY',    'I]db +=Yhpp1<hd#!{P@uN,<=RS:^HX@<bSb]<gO]Bcn6j<f cL?Sv!fJ%dsgY)M' );
define( 'NONCE_KEY',        'POOos-]UYtknoiYo[`oT{U jntHNPuce>Q:jm@D4-~ZJAJyZP?pq|^*7q-yfT4$y' );
define( 'AUTH_SALT',        '6o1B9O^,5+D?au8ToG3_Z4?M0`CRCWEp U)wG,0F;^cn _c+}.Tc{;*MsUu3B{Oe' );
define( 'SECURE_AUTH_SALT', 'Nfz*fTU~][u#zN4.{Q>n|5XfTVcoy:%S9ZH#oyZOk@6RM,UVu{/^ mq.2l9j@GP3' );
define( 'LOGGED_IN_SALT',   ':_&;^US8Tr1etYI2hjT7R]8hwvuVa$OU[5%<6IfEUsUCJ0hk|<k0JGG?{k%6Qd8N' );
define( 'NONCE_SALT',       'P[Y4-U1>?.TW;5Jzcs:wGeHTGQ?R?+tYdJ+{@0`y{bl2h)qhPgeLhXx;1#;xYOon' );

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
