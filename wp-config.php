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
define('DB_NAME', 'bardelweb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2PlHP[ z%ZB]?$I1-E`8<q,MG.>k9YbtWcTSn*Wd)vT@MO$?P?7qZIzqJ:y.A>G.');
define('SECURE_AUTH_KEY',  '3^=lcuL--*57pag!w^Me0`q-HH6D*N}dFKWcv4NU^+,uW4RmTQ9S33j(Hh@(CIC8');
define('LOGGED_IN_KEY',    '&Il^+ H}lBg^!$^M4`7<qYU3OTx,|U<#PEHuPZA[^TZq`,,]<}a-a-lDFP|2z2a=');
define('NONCE_KEY',        ')8d3]kh++*/U92BZ+{<Jv*0f(?bYX?|6`(<-1zp9}6{46nx:8n^6Y~11/_/$kN!Y');
define('AUTH_SALT',        'WrW&qPO-G^n>C)V<*~L,3(Y.8gxdt):Xvog(eaD=w5e/Ubb3R[EVWL7>%sm {E+(');
define('SECURE_AUTH_SALT', 'pD:YfV$+>XGqC^8|$5kv{`Fu~l5z/[3Bi{.C2|27z;Bb{$..H&u=!L{_-SrHrIbh');
define('LOGGED_IN_SALT',   '#B*2^#Tu{_:PKp~~S,,HA>?ci]%rg.[U-792US!|={n6J,k{rn!mw;d ir~fGK@}');
define('NONCE_SALT',       'ob5.wN]!I!{{M[dh>oL$(54V -aA+.] gtymBTwnoN@G)3bT3H#!N}(_Q=kG3Mgc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
