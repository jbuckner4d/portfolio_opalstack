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
define( 'DB_NAME', 'portfoli_e2e15c47' );

/** Database username */
define( 'DB_USER', 'portfoli_e2e15c47' );

/** Database password */
define( 'DB_PASSWORD', 'HtWdzls7GaCgHR' );

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
define( 'AUTH_KEY',          'YGQaK]wpbU/Xmwm^^DT2fP sk5o2*%_5^1zL|_yz0CW/F9CDM1v*F9~U,n85dD/C' );
define( 'SECURE_AUTH_KEY',   '3F[8PAh-WH08%j.Z#15|a;< ;WNfP=2=#fF9.a/JpZuhyf`j}859oOB6:U#j}!-O' );
define( 'LOGGED_IN_KEY',     'p^)kY:b9;&?V7Y9akYY/Qrn]#leL`6l!MQA^/dHqUPv$<n&^[&aa,.F}:P|Q-ojP' );
define( 'NONCE_KEY',         'B@ev)^?a@>U_J(Q/$3Ou( VhZH-oI5s@}bVW=fH4`FBmeylU $Sd^q,16vx?i0|O' );
define( 'AUTH_SALT',         'KaBHJ+MwVzlJA?zqkU5j]_Xy#S^^tURhj{Fobd:lBLZ].drl^&c{;[[y/oaz0WwE' );
define( 'SECURE_AUTH_SALT',  '~!9EoSbbz*U5UKa(6oizB@kJ-_gvn7Zr6Pbui>jN{nq}91g9O{|ky=E7!0L}-DdS' );
define( 'LOGGED_IN_SALT',    'G3M6*o/K(S[u2Qh)w^#l1cqT%K8,juNTK.|pgez1D0O$|qJ>^),hZhQy2[X/MSrE' );
define( 'NONCE_SALT',        'z %tsx1_|yu,*lp|& 0+z,NT x6[1o}$k5t>oF_dK<V**e16MqF+|A(BWXfA?{?h' );
define( 'WP_CACHE_KEY_SALT', 'w0?Oj/W<x=/8r5Q#-tKx7^,_8mc{:~mI$3A%*g@;!O]!Y}@D=,ZxY}Zyu1$9w0vD' );


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
