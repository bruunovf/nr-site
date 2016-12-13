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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nread_wp301');

/** MySQL database username */
define('DB_USER', 'nread_wp301');

/** MySQL database password */
define('DB_PASSWORD', 'nRseg@8556');

/** MySQL hostname */
define('DB_HOST', 'mysql11.redehost.com.br');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@ 
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o9hs0ytfoy2nhfjxrleaj5znmu0umxevf1ifxirxggfynvlpy01tgfv45deyisn5');
define('SECURE_AUTH_KEY',  'mcj3jsw1lw3ujadxmn1wxacb8r5lbjnufnrtl2lnqaq4yartxhqhyzozsv2k04c1');
define('LOGGED_IN_KEY',    'zmxkj7nesutt95vtcjoapljqwxtgzovvlgqeedpywxbwpg6nhr3wukni8pfoeuuh');
define('NONCE_KEY',        'sjpacutkim9vy7kx1fntz9ey6yaf80tuy8aqlhojltokvkwvvva37p2vakica8sa');
define('AUTH_SALT',        '7mzief5vpvueqv9n6qrarudm6ryqzx4xwqvz4hg9dakpikbtfjwzo739hzn7usl2');
define('SECURE_AUTH_SALT', 'oznfqz5rdzq4butfuk7wc3jpu9oifsuh8hegkg7ws7hjdrholbettt2rsirwx5o7');
define('LOGGED_IN_SALT',   'uqzkiar6inlxzfl6i5gamaipidf71wqyolbt42wpvn6sicqrw7u0jvpdwp12asw4');
define('NONCE_SALT',       'uufkndjxtwfpsioosj6cemu3tx4g9q1mk1l8rpejkizvtlenqq9sunyk9ytgqjme');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpda_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
