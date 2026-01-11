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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'paso' );

/** MySQL hostname */
define('DB_HOST', '192.168.0.101');

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
define('AUTH_KEY',         'IWj)WQj2LZ6ILvzewt*sRj*vw5yRQm7hiFhf!x2Dz*%(Cp3vBURM5d#3A(lJ1eL(');
define('SECURE_AUTH_KEY',  'agwhDudLIb&SAdoXqfR6P4N6tL6aeKh9KNlPh7(HWj2wUZuNeRRctnvP2QT5K!8o');
define('LOGGED_IN_KEY',    'qNdWMj4!dJHQEMMcAye0i^WDrNlaP9yUNE%jwkQ5P6FaF2BNobB5!*%Yx1*AIUb0');
define('NONCE_KEY',        'f6xMMTeEh)Qo6mctC7m3@TSdke6mepaFnah^U#!#)V74m6Jp7KLFELMmftqEaSa1');
define('AUTH_SALT',        'Zq@gaGZ3#mugAaVh*i@H)boPl61Lr#PgPNrLLuU!)9(Qxg(il1Q%@V!@34AXU*ox');
define('SECURE_AUTH_SALT', 'oEG(mix5Oz0Pg#)j94ERhxxAu437UoW^Xj)SnDi3J0)LEB%P)zRoA7)m0wOqDypB');
define('LOGGED_IN_SALT',   '^J27NApo3QYRbBm0Fzw&nvXkejWnJ*2Ha#O@!u&gK4zdbuMORYRb8QK)Fg2%xTRs');
define('NONCE_SALT',       'QSFuS*rU04A3s#16D#5tGGtA7bWXW^LXbGYWzZ()SjIQo0ebFRCToxdZmSJD9d0F');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 * Prefijo de las tablas wordpress
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
