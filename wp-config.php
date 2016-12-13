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
define('DB_NAME', 'domusjazz');

/** MySQL database username */
define('DB_USER', 'domusjazz');

/** MySQL database password */
define('DB_PASSWORD', 'd0musJ@zz2015');

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
define('AUTH_KEY',         '+K&5`Mv<7S=[00_wcfR/,I?c`e.!9L(@SB4(dbm?0||{r!H0|$m^Xm-h>^osdmy#');
define('SECURE_AUTH_KEY',  '+Dw,q.)>Q()>@6p4th>AL5ZGYGQ<IDmX4tmJ.!lf5%pB|~lnzr.UN8Wd?/V%_48%');
define('LOGGED_IN_KEY',    '39+$~OCDn+v)$+ocHZ+G}-hy-z9g?~C{g2<DD|:u+36a]$j}vc~b+ )7N/gB[D!X');
define('NONCE_KEY',        'n!?O>QG+&5/gDjV}yeJKRKX2hRb7!cD| J%&mvplEd|y#hG|b%h)7XrMGWwg/X%D');
define('AUTH_SALT',        '[a~V~%qH|Q+giVb|H|D=&HnO!m)f+.2/$Q2B@Ph+c{SHGJoDZ:hkjhPtghVtZlcc');
define('SECURE_AUTH_SALT', 'usB/44+&]L;N;K=k,fwm%kX}+!+o2?5`t3mse]6izgdrlWF6yyBTWVlruPKa%d]r');
define('LOGGED_IN_SALT',   '_r9M#v(cg `fNMl~a.%n}c<}A<>GN<J14IuUp`t/uZiguZ@0=ZTzqs(/v<jf;iA8');
define('NONCE_SALT',       'N5(-|UxS;ho_45O>$}F6ypWkH2siLw/-V66#HR@!WOMbZt/K}vWHpN<5]Luk0wmg');

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

define('FS_METHOD', 'direct');
