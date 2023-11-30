<?php
define( 'WP_CACHE', true ); // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'R;#)dfsKj)@[4kF| nAbzpq;[bZp+jiTOi%l!Lu$[P+A)bRz8@KM-M4#&SRuWRV{' );
define( 'SECURE_AUTH_KEY',  ']LMG24)T;IC$htz7</#O.@hP|*h9WH`?(O5uG.*:Ekc`<kZ|E1u&(ibMH;gX,m2W' );
define( 'LOGGED_IN_KEY',    '75lSYme.`MizZbqepdAqI@;6.oqp=oS?@3s~m]Y=v#{<mW&g4unQBy4V``4()ITh' );
define( 'NONCE_KEY',        '6E3JdqD()DqFaSEFQ;y!fVll;Z4oE^DK3MaN8^Wl<TN?srbxYF]_3or&nr2a_yug' );
define( 'AUTH_SALT',        '.B(6HMbZAb`VzXr.xVSJ$A5{L:9C67_`FRtI#Rk|;AE!,e{E%sIK<n,Yo%<n)1Q=' );
define( 'SECURE_AUTH_SALT', ';dx4U#{S?O{eD(6ElVr8Ynit[h`4+/qQ;A|Y#PX23Lbg/KN)dhl}qKfnAcZ/Th>p' );
define( 'LOGGED_IN_SALT',   'dZ=,Rbkj7cKu/AbA*8?6Ju-AXF_HC=OD]:KMqhf*^~)f29a1&c^-f]HM~WcH2[@2' );
define( 'NONCE_SALT',       'j[r}KryT2`F+,T!R@7vR~&?Dud*vof9s`2_1*a_eoS&wD{cZ}TJHJO+xsP*|T[nt' );

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
