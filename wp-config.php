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
define('DB_NAME', 'quovantis-blg');

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
define('AUTH_KEY',         '#Qr&@2}i*Tbh!2uw$mp#W2yoHI@M.H*e1-A3krDEsq @^yb<XYHh;t9R|{t uuSY');
define('SECURE_AUTH_KEY',  '@6T!tZo``J!$J[>Fe1LA8X}PH6-#zcnPa^N1vt zR>pAzHMq4@D9`Vcmsnuq cc|');
define('LOGGED_IN_KEY',    'M/?tOe<`)%dQaSZ(Z=PWH]Ep|8eTNSIF13ucF)GWk@bUazB9*u~JDuIBSkLDg|9l');
define('NONCE_KEY',        'D{nqh0mfnX_h16}dcPIy M4c9@k|O3aS6$aww2L~L.=AQ+OSeX5IClQ.T&Aam2Tb');
define('AUTH_SALT',        '=zG;.^x.A:LQL8FSXr?#N~O!xcyTwirsRn[%kQPB#VED&rGNp8KLsA=]lpIUzTt.');
define('SECURE_AUTH_SALT', '*K}`QPXxrqL5^f5E 04:VTdgOGjz+H@>LTD31]*S] sUhW*vmrQEB4z.P7ESY2^`');
define('LOGGED_IN_SALT',   'Fq{Jjfqm.P@ d.ZZgzoy3x&fliE*Oj.V_FJEImND9Ozs1V$xrsAd^U{EU@aVNInm');
define('NONCE_SALT',       ',Srwt%;*_>!8VJ&OQM7, ^/RVC!*rC/XB,8{U0D]TOHG^^.=P`QVR-f !8[Z013u');

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
