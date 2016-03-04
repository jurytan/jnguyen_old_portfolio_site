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
define('DB_PASSWORD', 'PS292t!UJ-');

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
define('AUTH_KEY',         '7u2bxp4bdb7oees6zbld5eijreik08qbqlirjzj6ee7xlwg6pgp2usb4ehbowoiw');
define('SECURE_AUTH_KEY',  'irk8ryejc8cfdvbkqbll5oeydskw8dut8amrw3xu1rgm73dgfjyauc5kwoegrwar');
define('LOGGED_IN_KEY',    '59rgpso93lmjpxo1pfbne6zxgxvqieg3qoycdh8sa07jfi0tlo24b39izbjq3nsy');
define('NONCE_KEY',        '5xlavovrsswol89n8ipxwqxa8ctcgfk7daowhajnniebdmau5bagbgohloha7j44');
define('AUTH_SALT',        'o75nbmzcidbapt0osonauzfuuxrgpdb5npajipifkx8q1bbolzlw6ehyqg9mubbk');
define('SECURE_AUTH_SALT', 'hrpgzlbymb88xktwqxyi0zeoyimkv9gqwedzo9egbxrqhlvjrxsjetenkjj4e5tw');
define('LOGGED_IN_SALT',   'p92ujzdmoidk8bwrman3hlpmnd0cegny6khoe7bblkj9q1nh5va1dhc0myvpmcnr');
define('NONCE_SALT',       'j391gmb6ynkobrn4m5erxvbksmia9kaeuplyvziwbjz1ydttzpvs1wclzmxjjghu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jtnwp';

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
