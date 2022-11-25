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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mai');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Q7JC5cw9 ^j9FdWPH(ZRm75d3[4!LG*$.QCl|s}3X~uqMm(3[aT)mNKoo50-Roqi');
define('SECURE_AUTH_KEY',  'XEo4| %L^_,q`v5g?d>jDa{`e^_5Ka?)|+PA-}Ct;l;Mw<q$fTYQZ5#M.g5}^3D<');
define('LOGGED_IN_KEY',    'gkWdofW[1)4(#f1]whIS0WyI[}CK>o7O*D)kDJpB@V)/^1a4A55=Vi~zcEi0cHfF');
define('NONCE_KEY',        'w0 >vBJ-S,^RH,3$TL*wiztH5IcYc=C>${R 0sLDla30V2VvS*,.5Dv/e4DoiGe3');
define('AUTH_SALT',        'K`f[;P&{pLN2:xT|XhvWn1)NxXh+i~il+]k%K;%U yu)|?|]^|FR9Md31);)b}SK');
define('SECURE_AUTH_SALT', '3fPLXk]:4kf@8G)a6~}JQ6z3CK>tv(qL}KvDpCFvDTEO<6Q0JQsYgmuQ`!b80,R=');
define('LOGGED_IN_SALT',   'x4Yr<x)Y>yv%V2j/Uw[l<^3Gmb!A5Yo!rV4;m7;@.AqBa5VMPF|6j`qFP=O,>rB;');
define('NONCE_SALT',       'IrI8  f!~9A/&.7(Yh]/2P`Ah_9]jD:zoe4b_Ip8x]{%K8`d:YgT}VY}#*7M(h#8');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
