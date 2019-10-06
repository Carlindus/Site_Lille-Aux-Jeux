<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carlindunxlaj' );

/** MySQL database username */
define( 'DB_USER', 'carlindunxlaj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lajCam03f' );

/** MySQL hostname */
define( 'DB_HOST', 'carlindunxlaj.mysql.db' );

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
define('AUTH_KEY',         'tyZ2aoJJnY4cr1+fpyQ3TYYIiXjVcACSwqriXokJRuFn1yQn8XLNj+YAvr/RHkU+SWgopozhD4JNGhlw/VS9tQ==');
define('SECURE_AUTH_KEY',  'M46GCY8YgEj8emmJoBnlfDDNjy1/thooA1JunWjMFv5+fqJMiwBH5QVG3u/krnn11/v3Ak82E0UzIJUSoQW1Lg==');
define('LOGGED_IN_KEY',    'jt/EJDew4pG+FX8z1O0vcFanfVMdwyKsAZifZSaHkiNMKkYbYpidWP2DSGj/aEAJsxaEuzHjzfRZ70QpDmN7sQ==');
define('NONCE_KEY',        'DWgu4QUSsCCNB4VWR5yU67Rkp0T5BpWy7NaDMKEqTmpOLFsAaBSlOM3dxeH1Yj5im+Amy0XeJA0qwsdXdICy0w==');
define('AUTH_SALT',        'np+bSgP5yMkvsMeP9zDeS3S5GP4LseaFKWv9v206ugZ+EpNhQIENu2Of6vyEY2+uUE462oe6Yhjl58tDMYjcQQ==');
define('SECURE_AUTH_SALT', 'bZD29uSNRwlf8HvfujwfMCP2utQB5doawXOB7IOqXxyADO2P3wHWJmxjChkKJ+Si5PbEhhFWZdz0z5rBvReGKA==');
define('LOGGED_IN_SALT',   'UFfzXFD5hZkGHYpSmRd6kmKwPT+W13HvIyqZvAJ7ri0Fbx4i7d2ilrH+IzuhHgMoUEcBiO5mkj85qY/Du8t4+A==');
define('NONCE_SALT',       'WaQBpjLVcOYz0NPPAEHbLs0/CV3MhoCqHumfYRh/iJzAUoeiFXAk4DzssjI+rd3U17J3x9ltxTZn/AR5E/SUtA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'y61cuxua_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
