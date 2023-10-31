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
define( 'DB_NAME', 'ailes' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          'T~J$}uCwHj8Ot!T6veP^2{Uer+b{M|%by  k0jdhqE>YU`mu</1Vm#<G)sntySRG' );
define( 'SECURE_AUTH_KEY',   'wrP&9_B8b`x|km=QG5q*(pzt/=-Un:Di<^H.ai.f1)8m_u-xR1Eo S,%Xpq0CdNp' );
define( 'LOGGED_IN_KEY',     'HL6ss>0K.AsfRYWrs_Pt@W`.:gW=F1A5<:Q?h,g:|*yQ9v] $ y.],>4I^&c-8O@' );
define( 'NONCE_KEY',         'DuRkQEoM2b`B{y{0!h2rTCv7foirj[^H0C&._G0U} Y^)%]Y:XZ2:Ss,6@zrW?u$' );
define( 'AUTH_SALT',         'L==1hzI1u(D],<moGoj4:TBWwrGp,h{kw@YrG-n t;MX3<S6Oed5M~JE&VD)5h-8' );
define( 'SECURE_AUTH_SALT',  'VNy@w2*4Y;8=+vnI2cqloyrk#ZV<6hcZXH6ChHB~{mIT%6z~kj+aWp@n#SU(UGj3' );
define( 'LOGGED_IN_SALT',    'a5&O:G;m1Q NF/t#RRaa}BSJ0dUpDm!_7L{N/LE~>yz4*k|gR,6!SuP!.IWP$zQ.' );
define( 'NONCE_SALT',        '*3Z$B|{|t+/NcVE#PJQ+<_qIo3}Q2W;.-J]@*N)&w%Apz8ENrnPSKyII5F}[EYRI' );
define( 'WP_CACHE_KEY_SALT', '!<Y;|lQiKrAfzo^{wW/Ck%1uk;mZNW,ehTliEaR9?Ik|LE IjB2VJBFCj}`qXoB,' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
