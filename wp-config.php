<?php
define('RELOCATE', true);

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
define('DB_NAME', 'ayoaycoc_frioland_db');

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
define('AUTH_KEY',         '9#)^H`ii5B,_S9|W3LnX&a 2:^b?b5a,>j1ZvIwYz$&:+o*iPCEz=Ik>wrKcjkgO');
define('SECURE_AUTH_KEY',  'f ,SOKLOFZK3/y2FEtM`vqTJ0*6+WWm5*_J-j<PiwLi5g4Ga~oRCNeibhyo+LK$R');
define('LOGGED_IN_KEY',    'YW:g Mt@.r?8x<0/]DjFQ]L1n[YX 5W|y+.,ub^]&laa1=}SwpEImRAYc>/kZTvo');
define('NONCE_KEY',        'OFvv}`fd(`;K8Rgz1cvYmcyFO7C6{_<Ac[vh4&[@8vQU]AQc;)d+8p4]_S%<8ZB:');
define('AUTH_SALT',        '~/C2S,O/8]:;}XdnC<v#|nblAa4/oRE[~-3$wB~M}_Ie45 4[`tbCXyGc=zornqe');
define('SECURE_AUTH_SALT', '5#:{3m(E~gC4K`PuV5iBq;*WE@TCjvK/4X,C|>1YlSfVu- /d~] P9[zm763:NrG');
define('LOGGED_IN_SALT',   '!%)xz%4VvPz92D/(X*iptZ*Y;&o8nGls1Ma8e62}yN<d2D[=(/vxlx3>A2}ug7vN');
define('NONCE_SALT',       '+2fRZI)Is5ve8#dd-=SUYF}B&(]7 B;R#d`_oHu@J|0ek~2F>PH&%I&|fjm`ZAEt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'frioland_';

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
