<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', ‘accessibility’);

/** MySQL database username */
define('DB_USER', ‘root’);

/** MySQL database password */
define('DB_PASSWORD', ‘root’);

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
define('AUTH_KEY',         'sH!fAs<wG1x]gaW).nh)4[[4fu-);=(ru1m_w(OWT}rxI&kb8]~LK)4T8-rpfClk');
define('SECURE_AUTH_KEY',  'JCm8eR1pVt~O(UgMlUeFNpf 2m-K~8#iu?|UdimhA/UTskl6 h;;i(VOezU$B9U)');
define('LOGGED_IN_KEY',    '919|b.[s|:fK1ef:Wb/ {.^L-PkyRAUNvIif56Y_g2J@`h6#K<taCFWT)y#L[{pb');
define('NONCE_KEY',        'HLrk~,ZOj9Jx`Zl+uqUFmMB73)R;t-@i:&fBjeg-t!9o%N*-!o$I$b-3]}]e* Wc');
define('AUTH_SALT',        'V] 0YUTvEA][w1%F-CR#UgA/wM`W(||U~7xs9YJc[tmCmf}h?WPb Edb:xZj)tL<');
define('SECURE_AUTH_SALT', 'ql!i`rP1eGf|%({1pbHt7HVQ+2+bj)jc02_]~a-7f`=@u:BiOt]vWDZ-Sw|*xFB$');
define('LOGGED_IN_SALT',   '%[EfwqsXTC{u9;U{^F+:^/I#!J+!L]|Myldu/Nn@QQOx3O+mJ0@U#JC)kC1`@eT]');
define('NONCE_SALT',       '|?0L76Rj4#&8V3Xz_r:RQ?]+<Gd%Y[%*p#RrYKc0:)Y<|e%VVBJhY]896328*a(>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
