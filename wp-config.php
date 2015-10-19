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
define('DB_NAME', 'cqb');

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
define('AUTH_KEY',         'jZSU5R7vuAlsIgbD#bAltK0![S;O40{)JM?O:?V7!U#R&SPo5>u]yhtgV#nV4fU<');
define('SECURE_AUTH_KEY',  'Y~KD9*rtk!O9WKaPu~pGS+q&QR&J|9vo!TFCKrx/h81=[ai-1|^ey$52uz23j!Vf');
define('LOGGED_IN_KEY',    'H|RgB7&(K;Vq4pBZ!ljFql_XM;C4#4-6C/[B)d+m-`O#^:oJuS!sNFM-jN/lis<y');
define('NONCE_KEY',        'dL/6))Ch m9I3K5tr1%wKC{PzH$WlHIL);:JySN-T{kCI})yQ0=oaj()~w*&*|7#');
define('AUTH_SALT',        'uv$:VI2AbS>f%dKXn37|Yp/wkWz9HOrIu]!p`|!;#cX6AVxM3Q~*prR);HKivQum');
define('SECURE_AUTH_SALT', 'Pj[*O$I8-Q0A$r!+PB@RXy92|LI=+;J,=wT1 JezM1Wb0aq05+THa-+.A]5k[ftP');
define('LOGGED_IN_SALT',   'xHfKSa_.$Wg?> _IDxp-~{}%hi7fm+db^eA}Eofe[gcM o/F<8gi[|b+;0}^_3 r');
define('NONCE_SALT',       '^-4L,H1pO5<C<m2lFWc5RIM/TP,tt..,@~LX=js?.v|]+fY^C+v1aYZ/DFE 12Su');

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
