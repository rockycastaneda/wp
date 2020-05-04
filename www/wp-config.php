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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', '172.20.0.2' );

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
define( 'AUTH_KEY',         'U#GF<xA{K%Hcv8 TEz]n|Yu~s(>b91a-p gz/r}Auel]%Y;,LQB@E{CGsO-v:@m3' );
define( 'SECURE_AUTH_KEY',  'ssu:NY<:Unu`^ }_YxrZQuAhepM lpvy(sUX*WxEGqY1<!&f5&earyH|Pcoy{s;l' );
define( 'LOGGED_IN_KEY',    'z5b}Rjis1h2mEGXotHR{!fx6cybg!Zv(ZzTivUVZ]BvE.(Fe8SrN@CJyxA*592gA' );
define( 'NONCE_KEY',        'en[lzYg zddhbU;7I*~nt[P#pNLS/b^Y;WopKjk#[q4o_8BUs`w$nT~EEK+lI9=Q' );
define( 'AUTH_SALT',        ',L*:|Y&K,{I_fPj`: PFck@1urrA eoaQq6[Q5-NnrH%hdK+$V7u%A0Cf )IR72c' );
define( 'SECURE_AUTH_SALT', ',kO}BQ>uqcfqcu!LF0Bd)m^8eaZ_zW-*Hi~~ityu)E}/a#@qv<)vSZRe62EW&PdD' );
define( 'LOGGED_IN_SALT',   '6cvs*43U41HUir(V4KD$nd|&Zb0{~@]Efh%5FH:!CNh(`$|BnjWE-E$G+=D/%$-5' );
define( 'NONCE_SALT',       's[omL<$Oqcs2Nn+Oe,_V&S!tn?7<tL#=6rWo8[p.yUEdf8]3p(Z(QCf1hjftf=pO' );

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
