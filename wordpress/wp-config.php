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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// ローカル環境用URL設定（本番データベース使用時に必要）
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

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
define( 'AUTH_KEY',          '8ZDT[M8U;BYoIG7g ?RQp/,nwBS&}N5toL:o*Tj=}TN7ad]aqthLg$}^:H6(;t1b' );
define( 'SECURE_AUTH_KEY',   '@uD&QLC;ebFB&^J-{_TJgl.I[^}*mZwL_;r.y&fdPsC(X`rKbi,{DfW+u$*dj_>C' );
define( 'LOGGED_IN_KEY',     'AQImRS<Q>U-lpU/HMoBsQ[.AbmR9Eyt-^>Hs`#p{ )I_c~;c:d8e2aQAl;~p|W-@' );
define( 'NONCE_KEY',         '/oIHflxoM]h^c:|3JXilZ@Jk?y>s<vmp%O_ t[YV}8n:Jr:MQ)<b69k;;nGv^=):' );
define( 'AUTH_SALT',         'xq(H@(M{tO_IOk.(2)};v.)Fe2MDJjjgn;rnC}*#z/,VO_lDJ43?-5{9QOJL2Rk$' );
define( 'SECURE_AUTH_SALT',  'R4iY%`R-|qI^-I }y45L@Fr1 6g,Y]lD}>-6)*WS&q[&4mY5!T;uHuWj9thF}Ztc' );
define( 'LOGGED_IN_SALT',    '=Us |LkJQB1}XFHjFqZrW*owSlZeGzAqz8=9nXz!f>:6|.o!{;1LO9J>Jt?60Mu/' );
define( 'NONCE_SALT',        ']Hcs;CtL?G6|%bW-%eUvsRzx%75]cZdyz$cn2h.ij%S/R&c7y%+%mVD;([K?z_0w' );
define( 'WP_CACHE_KEY_SALT', 'ypSeS3=k+,Ml,Y]MiJAP zCa/m-^Hd|gI}]|{#S1@O8| F$%)wRZ;zu.Hi7%v*D7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
// $table_prefix = 'wp_';
$table_prefix = 'SERVMASK_PREFIX_';



/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
