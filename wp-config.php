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
define('DB_NAME', 'sabio');

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
define('AUTH_KEY',         '~c;@ hR69^2PDR,](,tIdB^xqO,z8bJ+H2dY^{Lm+t42$nCSq-SpT,-D?)CkC?Gf');
define('SECURE_AUTH_KEY',  '+Aq8I~SY}>6wWfi1)5`{3#eq#rt8I;E?[j,5AMmicLg%[a4}*UPXjbl$5|,[Je*9');
define('LOGGED_IN_KEY',    'kWVnX3E3S{luAk{Ow<XSWM51!1giYG$6nvR8J$Qp1Hd!4G56WmUh|KTpgFXq}%PE');
define('NONCE_KEY',        '!K9p9R/c=P@56 |wY3CT++FjW!8Bm(/|zar.0O3+%*2xft~4kvk;uR@L<DlxN`Q-');
define('AUTH_SALT',        '_Dtyfm,R,O+w4q?U$34Gr@oCL#n|M_Tb1F^eBIcu*Z,LJ;h-]||MlX%tL]EZ|EE&');
define('SECURE_AUTH_SALT', '~!Ui)2ecE,@#G^bVT,}bn}$MSHTT1_7(zK03`Y]J?G%f| `~VmFv14L +M(c9tH`');
define('LOGGED_IN_SALT',   'Q8V}BplKB~:G?PI*jbk??v|Vxp9s*!]6>:NFkzM)rFK^zM6EQ&7vwhEx9<**Xd!g');
define('NONCE_SALT',       '|vua|`glAsDP^S^} HlUy,HxbJCsJ+K+ubL+n3=:Ks|Td`&|UKmiyhX6z-+ud}}A');

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
