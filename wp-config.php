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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Murlydog5');

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
define('AUTH_KEY',         '_!B>a=+*!MrJ2sP%A u q@>S$oKOL6glgoQs~QwPHOFJ(KZ*xt4$|46p&?|N&VY^');
define('SECURE_AUTH_KEY',  'O6Lj(chn-U!rPa|4(6B@5/.hVqXlWLBmrs>{[Ux#gaT^pYg#N:{DEd4lwY5L{@_v');
define('LOGGED_IN_KEY',    '#Vr h-e:iqInVy^E)w^G]Sb6>-a,6 M^^Q@{V8)W[%p|{=@:4ca~Zn<@|+~iPcf^');
define('NONCE_KEY',        ')3/>9#vQq7B=8V| Z4&rH9TH OOmX({8jB_Tr%d?xUC~_)C,Wj#J~+MIo(m/_k3t');
define('AUTH_SALT',        'zJ?2V,,n-y6=B%yl@lJLu>x+KwG*w[LhMQL 6W 3^|~jX3$~-YQ:CG^69ySy]7P%');
define('SECURE_AUTH_SALT', '?6-%OP]b60.{s`y}9gCzNZ5;gd<Svy-#sr69e-^<#NR46qfL:nm3#1gW-A[ R~:x');
define('LOGGED_IN_SALT',   '/glsZ *}1lvcv/m#P@U1&-bIwPmXDkn@+LN~a:-&&6Yh+6ld}RGy@-9#4S-3sFoT');
define('NONCE_SALT',       'ZU~0Pj^ZHV7pAzr:x[X R<JP)cby+kc-{`N3@gW3~,2:|J^_LD7+J80a%wv[$$E#');

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
