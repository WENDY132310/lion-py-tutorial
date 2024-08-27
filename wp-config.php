<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grupomet_wp977' );

/** Database username */
define( 'DB_USER', 'grupomet_wp977' );

/** Database password */
define( 'DB_PASSWORD', 'Fp24@T23)S' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dcbjepe84cimxwah1obxgtr329ucwwedrtc1bvrvusqenwuittuljn8nipwzwrzu' );
define( 'SECURE_AUTH_KEY',  'dy304dhedjimpmzdx4bdvx5ll4rmlgabfsexprwvsjnczhxenle2srayai1w2fq5' );
define( 'LOGGED_IN_KEY',    'jctgcihvb9hn805vlliwisrctm50db2bixe3u7wqidoihgi7mkf3yzwkynsvxsu8' );
define( 'NONCE_KEY',        'qmqsb76sgj9lhbjljt1005edajuy2eflghkjwiin9qfbib94f6naggjngp2kqeip' );
define( 'AUTH_SALT',        's0qfxiwik0i1ofpz1a2xl81ghgidciwhvguvz2oaycsa0a5x4bkvcmul7mamzumj' );
define( 'SECURE_AUTH_SALT', 'qmbfy2jwhi7rbu4ro0ggb4fjeva5s2sdke9j2ewhsma2gm1mlb44val93i0vsvhf' );
define( 'LOGGED_IN_SALT',   'wfcpf1rhmwembreixe1k8smmrzxe3kvukwjrngggpl7cvlpk965afkk0qrjkqztc' );
define( 'NONCE_SALT',       'zu5ghawwow7wsnzaumzmgqhdathjdffzt6afomenxcnfy8rdcd8llcrjb9fdlyz6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj0_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
