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
define( 'DB_NAME', 'ignite-chaplains' );

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
define( 'AUTH_KEY',         ']HsIrEX4!Q,X^8:J{<rf^,DmWV.?UI8*Bbj:yul~aYME2y&8O/P9v~Ak>`5l=`al' );
define( 'SECURE_AUTH_KEY',  '}Gb|znv_IO[*:V>P`vKxto!A-i=Mj4GKS$AVG1+aHTBz8q7sM7yqD84x_)^cRd6N' );
define( 'LOGGED_IN_KEY',    'ZB-HO.FzO@SnGQ%#CdS9SAB!v pIpXp:WyV(F>9_#,hM/+*rg/S75pVr~Kz[p<jM' );
define( 'NONCE_KEY',        'Ydk!!4$-jgPR(m+Zg96nh<1:GY.C]6^nG|4mVd=Li4^}>[DU!Z2i-TQ@=[diSKOf' );
define( 'AUTH_SALT',        ':&`-n,q,7tFthp>n]10]dhB^YOoR=wK</JenQm]JsUo#RWqWL IXi*WH:wZ_2N *' );
define( 'SECURE_AUTH_SALT', 'R@WVxt7fSk6<=C7LFk?ACyo.Xt*FV]|}AzSp*NeN$6B7q7<ox/A:SN[UK8GH69s!' );
define( 'LOGGED_IN_SALT',   ',Q8Z>@UatEQUd9n:b>b(| 9W^Kf$sJ_~ C@91fSY!GJDGb+I&9:hF_ETg,i=WnVv' );
define( 'NONCE_SALT',       'uH%7kb`r*Hs.eM~s=eT[Wc;sA>l($Yk`}6A62s:a@`=e)B]4jMUV|TRiJzLKftS7' );

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
