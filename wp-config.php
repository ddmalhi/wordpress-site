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
define( 'DB_NAME', 'rohit' );

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
define( 'AUTH_KEY',         '+4J<{)}ZLm==r%|ngIpom5?2!*Gt=fw:W@wuXA$a_Th9d)6NNd0&Mz9Yl!Y+t ?=' );
define( 'SECURE_AUTH_KEY',  'IL<Hq~AW!T3^wOmfD~pqD74;zu#VqD?D,biG|Zl31oocXOT>!qW7Lb:aqH*|qMAc' );
define( 'LOGGED_IN_KEY',    '6Iq+*aAxFd #i)k]>kE^x^hEO?8 GbP.XMhI>5:*Y2cJd+ZqVk1poNsKu`Sq0co}' );
define( 'NONCE_KEY',        '!6gJh5{)[w3R~BK|x,,h ;-/i!60,nFV_<W5%4wot`Es})xpL@9 Q>:|pP#GjTb^' );
define( 'AUTH_SALT',        'E+HoX^eoO/ 5Jb>2Rx4HfRbF`74d2qO6Ps,/)Gkq1QFWs<$33vA6V):!aw~~[[l%' );
define( 'SECURE_AUTH_SALT', '&c(m9p}{TliHWRPhQJd]yYN|GL6nk^ID[2JQ[,}3i(6Drv`bev?N6UHJ,}6IuOG<' );
define( 'LOGGED_IN_SALT',   '`RWev/uf% :c7~m.kne+,i&]Zn`Yre}Wc^C.R_sprGW4B{8#O,mc9 TsDem:P$(<' );
define( 'NONCE_SALT',       ';mVJ4;J!|r,53/ogOp{J{@hyB![?I:ss@G>dy2Q!r4pJ_quKuH](_.ObJALg_)[A' );

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
