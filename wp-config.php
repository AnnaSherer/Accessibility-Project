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
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N?j-qE#e8rj3JfenU7H;_&KeI-*||etC-R#U<{p+m>jSiz`D5B#M=5>PP;r$6f-M');
define('SECURE_AUTH_KEY',  '8`}@;ZUB;+/+@E%kkpWz6!az#LLXeaD^^zFx!1^X[6po]kN|n%4Zx$Q8d?W}(lN]');
define('LOGGED_IN_KEY',    'bQlixW)*&-{$}~Z{iAFAyYUGQCr;pgcx9,x^jcWM@|dWwVvNmcaz2zs[2f]hakp8');
define('NONCE_KEY',        'xWM8X|#=[e*=rl]9^^;vC^~G>-:?p!&b~8X|FB8y/Kb%4lUMhS2Gz.$nL%KsEF*0');
define('AUTH_SALT',        '&dZ^Q?2Y+S_[WutTLq]{AW;f5Qw{S>ei8&K,M>+22#qufo?cE?+c.}n3kZi~&+bz');
define('SECURE_AUTH_SALT', '[P@pN#6BWo/m5rUI2;HMXJN-:H:zurv`TCCS%TUE+VC}y} )S|GHP$FKZ7G1+uG,');
define('LOGGED_IN_SALT',   'Yl62sv~| KgH+{n1&C-!,zX51b[i9|u#F$jl}OE6{^iB<CX.4/#|b-Bedsyn/0K`');
define('NONCE_SALT',       'Q{HteuSTDZ|r+ob5}Ha6Le_l/*A}q,-bBulh6toLm&b}}m0UzmU0*<I+]mE#&>c4');

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




// Add constant variables above this line
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost:8888/wp-content' );



/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

