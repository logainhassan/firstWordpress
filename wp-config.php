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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '1.T)#.;Mb&_)0jSn!. C|@KFM6$;pV4#MPt[y{t3#q>>}yNKJvH+16??TsY_>q2p' );
define( 'SECURE_AUTH_KEY',  'HH&o7#&fpCR,-[wo wIxGJZ?oNy%s2Qe.WVYZ?RL4<OJVrec&E;w^m#JK`DY$$`,' );
define( 'LOGGED_IN_KEY',    '-4!Ymzu l [oZYxLx1~wzLczsG!-TXqolNs B@ZsX3!Hmv}[jo=ds9as,83:fWj[' );
define( 'NONCE_KEY',        'G8Pj3Nk^TK-^i003`Qu/(L*g!9xu.P4uBjrJo!tg+mTu/~)=&Pp5]8$AXtjv_|6L' );
define( 'AUTH_SALT',        '{n~nhsjxf/pJ}zO>},-g%!f(Ps8Y5<-Wz++M9aU8IjN{Am8Dvu8y.3A,O1%3U)v~' );
define( 'SECURE_AUTH_SALT', '?qhjWD0=t/YZn>^y:R}z=b%@lqz*u6/{#UaW5*3<n4iYFWStGk>|O&Ki[Exii~hM' );
define( 'LOGGED_IN_SALT',   'fh:lC|xymmxn~wO=>S1@<kq0Y&fzrngV^]%Vmn={pNf)2kAi$~y]FFQvb`15Ds-B' );
define( 'NONCE_SALT',       'OG,{s=smE)_ke`SCkIhPG![@|PJk~nd5C>0f`#BA]`$CYX?].9(gJxlJx1zBb&RH' );

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
