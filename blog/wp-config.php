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
define('DB_NAME', 'jnguyen7_jtnwp');

/** MySQL database username */
define('DB_USER', 'jnguyen7_jtnwp');

/** MySQL database password */
define('DB_PASSWORD', 'v0SP(g7]U8');

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
define('AUTH_KEY',         'kiapdrjq7y4fjloewfzxbhq4apjfjbnvvboz84cs7zg6bjhtoerpzf6n6fwmi5yn');
define('SECURE_AUTH_KEY',  'n6udapyk09da061dqc448m2xg7ddsxtws3zeknke24oyxmn1vxhf4x3lm51gegnq');
define('LOGGED_IN_KEY',    '06ksmklrbywfuuzywdxy5vs6zfbyqlkcvgvzdbisuexsnna1r7abckncdrpllssx');
define('NONCE_KEY',        'xitw518tgraeqm4iktiwi2u8ys1vmol02wfqwbdcfczmkd1s4tcmgu6ewxi4fhqz');
define('AUTH_SALT',        '8ka9okcgovdbinuef0h9o9e0saja2ocjsho2s1jrqpr2r3lperrduyejmfldlcwm');
define('SECURE_AUTH_SALT', 'fx1edszwjzwoh0offdre9onivi9xzyoztaxdbi1j8m7zww3adz1dsmxnbypzsklv');
define('LOGGED_IN_SALT',   'nogtgnnh40eyliihqn75rzeusy4xmawikz80kjpfhsfl6tbgk9canww4glcuwcmv');
define('NONCE_SALT',       '2kvo2ljftktbga5sztgyhqoxjzbsakl48v9jqwudexenxwsb128lbob7l6cs9ois');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jtnwp_';

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
