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
define( 'DB_NAME', 'sharma' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hms@2019' );

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
define( 'AUTH_KEY',         '{ZwJFz9q[+{iD%w1RGd$D3m.H2Vj,{.t+J[)mjHis@_kHi`f^6#|U},BX{z++_Yw' );
define( 'SECURE_AUTH_KEY',  '^NYK3a.N1cA>Z:,LK~blaP`UeYDIgpGu(7^r}RGbsFFd .5rbQ~,L$P5e+aO6,os' );
define( 'LOGGED_IN_KEY',    'S8T3T{@@@Jc_{>TH4!Uewx*%v^4+M5L&,cg@,$gV]Pe~> >r@*]rtqL(!-MR;4Hh' );
define( 'NONCE_KEY',        'w7#|73gX<%fW^Hr[D_D>:9m_W{@2Q#k4+yl];h.ow5!z,6@613(;T1v3bazxT9wA' );
define( 'AUTH_SALT',        'SK^~492x0y&sn!2<2$NGKSe+l-GW{AZv}!1_!)Cd4(itax.lOTm.Ofn<h2L0+1J4' );
define( 'SECURE_AUTH_SALT', 'J;6>aw+Ey)HK)=GG%+AjSA]:7F@Hi4NN~x/Gxu9~d!OtS#@+vRCRO/h(-MP+8qvG' );
define( 'LOGGED_IN_SALT',   'Zg=.qICs(iAAzMS3*$[fS;/)BURP_dVJ#Vd8bvQ934 |^=>_@AOIj4pM4|6a4/wH' );
define( 'NONCE_SALT',       'csFO#D72Ro>ULnqaPj=:WyFK*| kx_)x[Q?M#=vi6|]4Pq7>v{Y^+g@J_;xc.)3C' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
