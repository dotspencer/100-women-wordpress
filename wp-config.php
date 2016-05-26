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
define('DB_NAME', 'wordpress_100_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!2De=?Jt<Q#9tQjAzZtc &JTl~6Lv)Rtd5_i7T-n(};N!!V%57#UP{_QWYx2IC`N');
define('SECURE_AUTH_KEY',  '@^q6Z2^%ToN[R_CF;d)nJ;0(ik1&5+G-f ..6ERMk^lF^60>E)T^tFIDK7*65[vF');
define('LOGGED_IN_KEY',    'OE8 y|9K:EWW>!$P*eLfsZXGb=I1tG`o/tyuYOf&3ox`lHPGC8Q5,l=rv$3UE~h*');
define('NONCE_KEY',        '&x%Nt.6%9vUx#=dA$9K-+CAmpe~/`GtMy`0OMi:YTx1fo/1f9C+qDzbdfMU=Pp7i');
define('AUTH_SALT',        '<k2F)slLRK%!rQUvD9QVyn)[Eb7g/qGW|^VVX%Zwy#9?yI[-WuDe`{|]$_Js#NQa');
define('SECURE_AUTH_SALT', 'NN^]g-/uZnynfcubQaayBJ}g04H ;yRy@ .[I2hS8yXCC*6A#Cad==qxNrSo059.');
define('LOGGED_IN_SALT',   'JWBXis{n_U^OWV^ RCb~ c*KPCf/j{](O[R$D&nO53x|c%/?Fcj_AiS3T0R1]:fw');
define('NONCE_SALT',       'w,unlG{Ui)QK*GmqYql};_zd2tr#5N,c#gmJ:sS?i)cap!GnB!ZjpryVX9]sL2>v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
