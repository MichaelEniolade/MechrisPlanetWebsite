<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mechris');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Wisdom_100%');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':fS[mXcIEq1~|6$01{J2|FeA,<WXNI<;BvmWIeT<Ho^_pp0R>Eq^hfQOhv-S^G>Z');
define('SECURE_AUTH_KEY',  '`Q&$ZxlaYC3ra5Q#qZJ.X}J1xmUft8>Y6,Hay~n=JU,hrBXG;<[K0C&o})e)CQG ');
define('LOGGED_IN_KEY',    '7QN|MMo)Q4Zs@#5c/(zQx=B=(b>`IgCp6wMP74V.*;5qwmb%z)r`(0=~Y%9jp5!P');
define('NONCE_KEY',        '60lN]god7%_fC1)6S0Gpq|7gD?-l`K^DClZb[@-+SFQ758:0s{9wYS]5jFD)m*vh');
define('AUTH_SALT',        'G`cwUn/[%*e0&kpA;><`#@%5igR83-a(9H:e~0W./Vz^vBE/Vcx[5A>[~7S`_jOd');
define('SECURE_AUTH_SALT', 'u;N>Bj5`uE!PMS1|28Wkw3}_O.:OF]cS)/dzqBMh;JFgh91~@Ic1pVY,e7b(E- !');
define('LOGGED_IN_SALT',   '>LkiuIToU6iH|?fIuj583M5efNV.3TIP)+HlwTTev@y2qp4Sr>(q`t5FJm8WGEz3');
define('NONCE_SALT',       'X^tpl6::m)k5:Ta.;}Mi[6/TgI-rf76@mokI^a|Yl.8dxTQvqc*l6=i]*gR/V4)_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
