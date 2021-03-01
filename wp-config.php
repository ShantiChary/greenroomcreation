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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'greenroomcreation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gqn0qTE2dO`5%-0 p.O!cL8gd>&oh|?=w[e;c(!7(%oia4F<S[){0WB.1wW*6r71' );
define( 'SECURE_AUTH_KEY',  'Fojj]`9BqbjD</#_& &)~UU0E=`}?:Lkx|bU1M<=SznpPAh~6y9v,.O %tEb{VOp' );
define( 'LOGGED_IN_KEY',    '-^cGlXJLg2VW(NcQO9E_n>%JemsYn4-%BzW~In)VdANH6WQY7X}qMvYF*#RdKth6' );
define( 'NONCE_KEY',        'zKX*foXcK6uLahlq?#Y[>A|i`ea)DvE:JULXIY3*3$:RI+,Vo2;3p&Ui]?/B0loM' );
define( 'AUTH_SALT',        'ZH~n0?0VC54taao2*^u6q~X*}WCkO60AQ}mFyjb-}cFd<!Tn5_W*e#(d*ZrOlc~U' );
define( 'SECURE_AUTH_SALT', '?[W[GFF,jm93Sgrf*&Xwb4~mYCk yb|EYCPxQAvf*m|ae0oyTI:*JstPvfE^UayI' );
define( 'LOGGED_IN_SALT',   '.ZAd)0YR7Najt]$g.g>3=IGg.jQNmPhvfa.oOu&,nP_D33ToG)|}CGb:b` ?|:p=' );
define( 'NONCE_SALT',       'J{sz.(x).1=<561i=~T.E-D^Lq:l+$E1q<U Fk4KAHH+;=3n^U+uUaWyS9y6x5nI' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
