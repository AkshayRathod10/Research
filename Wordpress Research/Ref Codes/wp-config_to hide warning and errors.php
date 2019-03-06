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
define('DB_NAME', 'herbaltrade');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u!bd2rf(Oqsi9WA&hcN^@)O[Z)~Z~,(5D|>2XYuC1Cd*CYrFGOoP]4=o!wn7}=/L');
define('SECURE_AUTH_KEY',  '7Lob|_OO:a{D&C!C>vVwA6p<dzkjA(4Q MXj3i!m!/|nfm:)#u*qz!:~uds{!HPW');
define('LOGGED_IN_KEY',    '}QDK%~4!`;75HxO5,*cK!aqUI>Jf wd3]k3ZTQvZY=|HMZ}m^DB]a47;HmiC(x= ');
define('NONCE_KEY',        'c@@,:FX2qnbT0AXef-u%CK&um3*0>BsjC54Y6uB^sX#~k+;y<MX_)aL~?|S^jwn/');
define('AUTH_SALT',        'm~ANNT]m]l/paBWVDf-a&40U-^.i:2fXcGp[$(sC`&1<Ncs(Q[v}Ih`QtX1Ei|`7');
define('SECURE_AUTH_SALT', 'B|;G9[lPM}NzYpi7o@~3k{1DJV)r~[8jNazw`-aWA[{t84+K2TmXa4?+TZ](K([U');
define('LOGGED_IN_SALT',   '*T{8sq.R9WY9V[i:])8ig|l[+pc}aK*?0V0;7PXp]gKUUXyMq@xY#!o=CYPp(.nJ');
define('NONCE_SALT',       'o!/S}+*H{j+pTV(.>}Kp@=VD@dLbpzBO?n3s[>K|*LdbJ*Br}+4n~D2HN0nh[^)y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jk_';

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
