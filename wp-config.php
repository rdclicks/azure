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
define('DB_NAME', 'awsdb');

/** MySQL database username */
define('DB_USER', 'awsdbu');

/** MySQL database password */
define('DB_PASSWORD', 'gappu123');

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
define('AUTH_KEY',         'MDx<y>e $ <eN@yaV<K8k&vP|T<@1O?xyEt4q_9kXZFL>4s+H2K=m{K~F:xB7qKG');
define('SECURE_AUTH_KEY',  '/Ea;|>V!C0a<Ug%1@ORIYQ Roo]=G4?Y:)ERE:}UV4v[49)C^rNoU^gBk,>2F;C#');
define('LOGGED_IN_KEY',    '@y]JPf|1yZ-`HNoSD-)7k2&xQ&,b>1?-(lTFadV gm+T8S-$FtDHLGJ=Zh6a%*:@');
define('NONCE_KEY',        '{{}O2xhK2wDV0W<R@;kSt=3@7qB5vK/n}$/:Kp44baxQe1bAcm,N]Lx)IJ3N-v9~');
define('AUTH_SALT',        '*?u}u;EWAui%sKZ9iNheff0Zs47]B0=M;Qi-9cc*49^ezE0UFtpu B#W/M::<fbI');
define('SECURE_AUTH_SALT', 'gbFfXI<TH7mbI<6xV Urn,oCm#?#W|7o.&C&RH#{{8bqKa^xt5ZY92scFeC!PIgO');
define('LOGGED_IN_SALT',   'qxcx8=ZXDSf?F6z&c#y,xK`;Qv|ec6Jo7t/i[64*xP64>|@M[PR[?:80+.wiJZ_]');
define('NONCE_SALT',       '8kM5>7@8()VYW/w2|EOk7?L{0-[X ~zTUyJ_L|#lhV_[}]%ckW>x=Ui9piG*8{,H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aws_';

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
