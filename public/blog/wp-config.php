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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autosafkar_db' );

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
define( 'AUTH_KEY',         'HhhP.V1wC#^dqr)r|L@WLxGst X^ezLt?#fOGZRy[+@8Ks`<bDGr>eAD{.T;DkF`' );
define( 'SECURE_AUTH_KEY',  'Ya^=GM2TDf/3o*.%Mypy4OhJAhLT5PYV19Lu!zWR$Zd3!LJg,|,GBbn851:<Ko~[' );
define( 'LOGGED_IN_KEY',    'n6&rK+;qtGyS0{`r Jvg!J-lRcfOnST7v)Ao|!iMKlc(,qg$mCw;;$!*D=s3y6G}' );
define( 'NONCE_KEY',        '?roE|_FG[ 2+<rqAl&jjzI+7pP6(Oe5pH#}z.D14f~+02=2{HXg9jqT5o$k2z-9q' );
define( 'AUTH_SALT',        '=<&LFbbC{~ mmy>>g^aKJ|/X;%Y(c[RM/$=ks-*>sy_^Nt.I};^iQmqcKX(UpM_s' );
define( 'SECURE_AUTH_SALT', '7QI1mt_Sj/:)J_*(8l}qN6KV@M>FOl$}7Rq~)p6JxHn4$?He_#2eJhh^b|2!?F(T' );
define( 'LOGGED_IN_SALT',   '|WxKIO7Qsn}6n^(|CV3ljIu4QhEzDwo(@9h}@pxAKw(cT/RQ^moYixlk%@k/YN1[' );
define( 'NONCE_SALT',       'DMD&[}y,NWd_f]lu2b&gyo^Vx+@O1rbei )2pIxj[ Pd<.si}a8k`,G/>d&{YVU3' );

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
