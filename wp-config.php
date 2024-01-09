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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '];P+.gC+m]?QG=r@}ne9j(/K[li0/zurAR>&!>rg4}tP>FA]o<q].ChMwWzAX=}l' );
define( 'SECURE_AUTH_KEY',   '7}~p!1<KG_4cRj/8vm}FgYo+@8mEFMdAD7 2y-e8!J?tUP(K,n*5Ht^~&Q-Cj67j' );
define( 'LOGGED_IN_KEY',     'e::}5$AWdRJ~on|@GH)$><:n&WT*hrzq>-RIBvx~mMx={U,F%<nQ f$ MKG:YM[6' );
define( 'NONCE_KEY',         '9e k%y:V^dp!gF%(=[|e#[p^|[.`EQIil$-}cV%xbJQ]j:.>i87i1B1?y1;eHdW1' );
define( 'AUTH_SALT',         'v-D`^,Tpm I8`/p3Z@~dN3<2JZMzQuHnUB#. NSDDOIsrbK/*(`k+E#iI}>y#C%b' );
define( 'SECURE_AUTH_SALT',  ',s:*b0` >&U>:,|iqvk2@~h6PDqD>S(8|-!w~65Y0m@+E#C,+m4 ?r!k[]z-1qxY' );
define( 'LOGGED_IN_SALT',    'W.mth`-HQ|P5H=Uc)%E]M5fR^Njnt}!ezeO0=FNf|3=%<u/236Rn!ZXNFO;`4KZl' );
define( 'NONCE_SALT',        'R>6>EZ=d)k(3ppkts%K*7`Rc`<V*g*|Sy~lA(C0qTL-2,/F~3UC~.$]BinHg3pj^' );
define( 'WP_CACHE_KEY_SALT', 'Z+iI6hg/&sZ6vIB6L-?)^$P^saUs+$/}n0w^<Tt#g-{C54~__8 ^tZy:R~!ophYa' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
