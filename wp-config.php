<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admin_maison');

/** MySQL database username */
define('DB_USER', 'admin_maison');

/** MySQL database password */
define('DB_PASSWORD', '123abc!@#');

/** MySQL hostname */
define('DB_HOST', '103.27.61.14');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME','http://maisondenguyennguyen.com:81');
define('WP_SITEURL','http://maisondenguyennguyen.com:81');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$21E/f*zNF=xWe}&VFsci8Yy}[MgBb#eW[E-b%+y3+`uPMDi=xH*&`{jc2*^EG+_');
define('SECURE_AUTH_KEY',  '$/n7mU8(r&(| 2I:Atg)Rt(J*rkT%ufR6._n!P{~=G=#^@tg;@Z[k|*jo2d9nv6J');
define('LOGGED_IN_KEY',    'V$l;w>oMT`|8}^L1u(^_Rg6RW1-B[*%>QgO-t%R_Yin*,$tNQtamQ5V/[j@nTLXT');
define('NONCE_KEY',        ' mf>!vL)P+3Q|/8sS!WN,>5L)K+lqj]y{?J!)M!$GS_Gj MU6A>`txK&(*vBTO$+');
define('AUTH_SALT',        '*=-?eRnYPq8o$+Osv,5?MZ+(:rRD0+ne=wt<G4w[b+N,=4S&g;($fcbH-+*Qvh6=');
define('SECURE_AUTH_SALT', 'Iol5<}<{~s/ih)vBfBC|N/Gvrd]#i5~,**62obEL|z#I33h=O(uhgbaUqEXN{JW{');
define('LOGGED_IN_SALT',   'eV$T0O2[1]vu<P(JT0&nm,o?Geb8E-y#C)nL%pUS7V;f9jP=ZchW ZWt~/fF`,Ka');
define('NONCE_SALT',       'jDho_(%PUVpbl[pDojMln#Gfi(CdIKm1NZ b#CL%5!M$<EnD/HiT0IUZgI%-l6@J');

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
