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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tXAraMyhtD3zAWrUlOm3fnti8CFkK0wj3UOe+Uq7y4D3nwdGvOV8Aole7h9pRdPmPNxzIJ3N4SyOE6Mo8h0VCA==');
define('SECURE_AUTH_KEY',  '8CCkgQWcro46LPFKisOQO8i5YKgyaVPmximL3R4UhvSfBpifGQOB1fOI1BiTKprNYdRG8ZUJUT6pTWbDTtDpKw==');
define('LOGGED_IN_KEY',    'yVFCdwfVQV72/0b7v7WC7m69Aog0hL4foKsiCIxtsP7ZQdpAgiatByF0QdTeulG2VeXxSB/htqTIOZKynLo7Vw==');
define('NONCE_KEY',        'GFhNg7aliQIO0C6IwURS6RVvnfej3Vg9mpJHwltwBwVvtN5Q99nC6qo6w/fQqCIWeUkIqdkImXS5K8F4cx15rQ==');
define('AUTH_SALT',        'K1Xyj7GB9gxhPSFRj+dEVtOWApUq3S+ShpC8s3z0J2lf8YzmdKbQw2lxiEKq8ffgHJ3YB9qU6PGV9fbBnOIkMw==');
define('SECURE_AUTH_SALT', 'pgR2Rw+EM1kREVbkcFAysvDABTV3QfJ6uynfL0ZDdN/y04hO5hQ7mw9wazY4P8f1aip9UE6F1Lpo8hzSAYhPzA==');
define('LOGGED_IN_SALT',   '8Vz3rvIPSl1AnsovOS1NfxpJv2qX09MCo6Ng1KLigRhHCNHY2umNGajlpi1NrIjJfOg0ojydBYJsX9TMMLTh8g==');
define('NONCE_SALT',       'ylqwvMeQG9D0Zpe+j0BmxxUG+hkBPi78QQhDruFLKYaeJJR9l+897bADMtp/P9VAnuaa9F5H95SssiOcUlPZpw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
