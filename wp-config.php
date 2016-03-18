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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         '??0k]o.>z|bdRxs KH+Ox~d)]tfM*k8K4`8DgERei5[TS=)-Eb9M61)yt}3ySF[k');
define('SECURE_AUTH_KEY',  'ohH8s&U+#OCJM_Z0[a,~7m,g2~/|1}!Icdh]-W&#;/jE-Ile}SRVm6d_LT^hC8b4');
define('LOGGED_IN_KEY',    '_fp6vipGAi2Gobl==Xg-X}{t)jv@F<.J+8FK-YhnI@;*l|77@.y64+X )5PS?#_t');
define('NONCE_KEY',        '^NP|:jyhqL5gBp(z|`#wC7=Clf2dR`fp@mX/]OrwY-l:fK-ZWGRce>TC|JJo@-)t');
define('AUTH_SALT',        '2Cf;tX/d6m4ZyREr#zMC,t3aeh?.;+j&7[~p+re^vAD#2`K>[X*E^S-cK(4zdwAL');
define('SECURE_AUTH_SALT', '_.OXc=|F43+m#iR$q3KZzW5|)mi-d1,[8`w4v380Fz+J0$Wx/v!-g;bLt_CojaAF');
define('LOGGED_IN_SALT',   '4IN1[Yl(-+h8KL-1z@:?sln: w+r~eW 3>r1C]7t]Tm@w&FDL%n#M~gNVRfhyN>u');
define('NONCE_SALT',       '>y%/F=(9)F]:*oIum4b[i#7`34nw)eOYf{@h=Iq^~Ls|taOhw+LoHTc|Y2F85@Ck');

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
