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
define('DB_NAME', 'seoyseguridad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'MR~N,eX;^bNn=pNPg~2},8jS`Lr@o#A+*pZiOyaA7^G6VI~]<+qr;5^5+v4O%~rW');
define('SECURE_AUTH_KEY',  '_3S <U56`;-SoI}<K5V}Gd+fbZ?.])t$((~:W45}ehLzKkucGcXMwXFbz~dYH~?^');
define('LOGGED_IN_KEY',    'a&PS4~?kL7#4PR t<POiJu#(kqc|o~n[a>5)N9=Sx`eMzy~Vk^1F1<Z:?Z>$qp3u');
define('NONCE_KEY',        'Bs;iWw1zoaX<m_-0oGZMh yS]4]>DH,LgTw(_c}b#tyl&HiBTd=FuB^v*H_uepi<');
define('AUTH_SALT',        '3nR(N>?f6S4$a|C>8&#Bu3%J]^Z:UY<m$|F f&BGE3Gk?Yf[FDK{yRX]`Ic$f^*V');
define('SECURE_AUTH_SALT', '.W(CrE_X8@O+um(=% 0@bdGshqsxb{[j9~JW:VLdVdm7!7&N_H`/UhE%sa|_@lAn');
define('LOGGED_IN_SALT',   'r,{t{bwywVU0T%adf<p5{+Bt=@?hRqP5_mN<Uat];Ra3|5B)0_a5YWc<!IBuD U=');
define('NONCE_SALT',       '!iOl36oj:WA!jnAQ<7OSJZadQa9Y#OOn6NuZE4L>fd>puBcwCfSd$+OrKW8w07{8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
