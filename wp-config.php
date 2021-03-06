<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'workingo_mektek');

/** MySQL database username */
define('DB_USER', 'workingo_mektek');

/** MySQL database password */
define('DB_PASSWORD', 'jePRag7G');

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
define('AUTH_KEY',         'g89i*!MMQ$0YN0bp.54}M]8V2sXMB)c>eW^Sp>5mJV!3c8g M5Pb,uGU,a`<[A4:');
define('SECURE_AUTH_KEY',  '4_~J+Y1OPD)b<(K[L|0wYA:51h{vNgOp$F76t9i;Hp8)?`Uoi<1p_:C^}@hgu5M2');
define('LOGGED_IN_KEY',    ']-GEZzVDm59pmvkG]XP4gfq{_@g:*rLDa~{M&3}c%*.0_4<PpC?Z:ET5*</o 0>x');
define('NONCE_KEY',        'r$xd0)eK[(F<xGLd@JCJEW{QGY7kI>w@lNNIKD+v`_><eT@=zRbtr51#X$ZzB6e`');
define('AUTH_SALT',        'isX2Fd%1u47^&%3V2:(R}`j<fgxp0oraA72e%JK+`AGUTvR<R>(7#$MvuP3rNk1Q');
define('SECURE_AUTH_SALT', 'oq(Ze6NgGQE HY:TvwWfBa*7g&@xa-Q*8mq <I!Cy8QK>lu86D+ddC~1fN$M}Lx>');
define('LOGGED_IN_SALT',   '`~(?&B,JY`8j_kc+D~nWA~d/pB}nn@-`p@YcN 9,u3qSS?6ASgT}A|q(..H:`&>k');
define('NONCE_SALT',       ';}g`$qi*UhqgV+k*d|7_+qh_ff(jIftVVv>S8/]O%3NkASjWOHs]&DZd<4?2nq@a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
