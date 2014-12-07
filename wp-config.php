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
define('DB_NAME', 'cafemoch_wo7450');

/** MySQL database username */
define('DB_USER', 'cafemoch_wo7450');

/** MySQL database password */
define('DB_PASSWORD', 'vA19lqvI8MEh');

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
define('AUTH_KEY', 'K!D[vU+Jt;Pze[b+RA%=C<KIJ{PO[Si/wZIBH+b{)@-H)&qvGMRM/m;qvUW+o@)wm=b;j@VA_MP>a*UuuoGe<La!@<?UB{?sne-=KinL|?o;BKSGGfczss}gpn>TkCDQ');
define('SECURE_AUTH_KEY', '>N^AJX<}!p>FWnm?d@N<%VlaHC=+$rry(&(cm^es))j*WpjssIRFajbNOObw_/_F^sU*?ma}XWOfXZe^@g_^H]XUBgEtZ&L[fxOPIrryEZdei}zUO-ku%|WXDj+G/$;)');
define('LOGGED_IN_KEY', 'MWa^mHRjW&ud^Us@TbVyTyvi=**ho!yLyPI?WNDwbfne|&nz$c([mdQN)GPY>}&D}/*JsN?|O^qy!+WNrXkPr)MtAKYl}L[pkyXSiRInlG@t]aYVYcF@(;cLEa%*LreH');
define('NONCE_KEY', 'SLGAA|/QWKopWDnKn)AXdzaiY&o*]<tS*h>Fna{SYln^W?<vw!K}AZI!-gdPQ(Mv_MvRnQkbaw+V^Hl!A{=J{yw{%/MIWCzJXEMeWCUwk?pkFv@GC}qiA;hLKhEeWA[z');
define('AUTH_SALT', 'FyW;uHFd<DaTri_C+w$GZJmFNfdWgu!_DV&zjGa;YncKhvy;(WtUkY^mJJH-P>}|K_X?btnHCm*jcC$qtBSOYpv)*qX[fFzDoibDQW_(O{mO*>+moR+FrnS^Frza{asw');
define('SECURE_AUTH_SALT', 'CLI;u%$(byKwvqNLm%Zd&&tkO[ckWgviELGMBh)]?DhmVqMlTZ><tQ|fZG%=oEP@SGqGMb$QT>zK|;;+$)mEz@*_]kQ@h)Rt{tDrf*$>xtfu>vyN$/MPy[-@y+EU&<SA');
define('LOGGED_IN_SALT', '!rav|*E&;drQP(t$=HXfizS={Kuu&NTQvRvR?tzqTH@!&/um|W=TFd[H>Q_d_ntJsBKALyR$%&ksJQ/g$H;z{q$FUxR=|_F(*^pdxKki^oV;%j@bLwKGLOFhGVa^jh}q');
define('NONCE_SALT', 'HolroWTQ+fg_aoUz?V{utXEiP_uB&(=?VVTgy?Fn?zA&-TyS[GBTigUO<Wd>z%uD;zT}Hp^y(ABG]ydbv^Nr%!nBP>ZnSRo+d}MzmmH$HfnrORuA>/TC%!eu$dtRS[|>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wskp_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
