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
define( 'DB_NAME', 'nugacarrental' );

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
define( 'AUTH_KEY',         '?.ro42VP(U%i![%@$TbU=^~9o)&wPB%6s.N%06ObWVe#mIrE=TZ]z<5rOnw)kOz|' );
define( 'SECURE_AUTH_KEY',  'yUrf&#*[j:Z4nl==Ow,kA~o1G&/63N*r:n^QJob;*L4wi/@kZ96vZD6Q>4=zUGj$' );
define( 'LOGGED_IN_KEY',    'qFK)yEs0@)=G+#v9Ps97X5:v`VK.8#2~#v8SoIK>o>m|N2Reb&wT8TcBWSiw3(7z' );
define( 'NONCE_KEY',        'Es:]/f@M W>+a!<x/} x,?w: ;rO8V_!@Js|fF:}`iMvT?b}usLP}P*zelt|KX.D' );
define( 'AUTH_SALT',        'rzRdk}tP3E&B*nP@hD-ZSu9FS^0N492bFCVQ][8TCBwk;mOT/*OEQRPoL#mv%Da>' );
define( 'SECURE_AUTH_SALT', 'qm|2XZJ*a=^R/.0|YXlUDai5h) 4W6Ce-B$[`Yh<LQ/mw~MUxgNCm3DZ~M-QIsIN' );
define( 'LOGGED_IN_SALT',   'yXZU`qDHup`I2n]{_=MCs1RX&l/lXg1}k|R/G{>VwpP}Ue$11W^iwz-AL~FIZ,e+' );
define( 'NONCE_SALT',       'W(>BU Fe3^5H)j;Nq@Xc3|:a=8J5`xWU b/R^go)Fa)Dfv3p8dbm`cs{B66ijn8l' );

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
