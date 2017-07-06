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
define('DB_NAME', 'traveling');

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
define('AUTH_KEY',         '`,E%)aW `6MW}SwLc#qpMH[CB4sT.yozKWNOz5~foHG |D_}vj;f+7b6|ur.k:ju');
define('SECURE_AUTH_KEY',  '~?R8B&j}#v}/oz`US-]V#WDy5jj6BWBOB@O&z)^Od)|mXO9cWq_6MB2Dv-P.9:BU');
define('LOGGED_IN_KEY',    'ql8Qe]!es *{;CH[S~02+((S#w[P]Hm`9F>11Khd6W/y[cNj@e8=kde2~Qa;z]Fv');
define('NONCE_KEY',        '0tiiP5(P!IM7<:X_g]OmfcS&LL{e%qKh%TQAU]2W8y>Yg~4I4X`h:O){=Cqb7$OV');
define('AUTH_SALT',        'D]5uaZ~1]VhDEJDce}%<x`V_YmtR{V%|gs?wstyg|;ilxgf)!&*Z|&/Om_I}7dfS');
define('SECURE_AUTH_SALT', '-,Q`)Y$yxM:##OgEiQp *d~HGeG{fquNr{P%|{Hrk,.[>j6Z[(#_Gm+(3T(S|i$V');
define('LOGGED_IN_SALT',   '&owvcmo4)D)z_o5WtxPi+fIgvRn,ONZFK6`w>/c&rnUFXi9tPf^,rE{Rr(4Wt=v+');
define('NONCE_SALT',       'rj5UbmsKpr~f<n][+(s!{=)37oet|dRv4<?<W <FlyhjhTMh77+Qr%MD*3pz@i>o');

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
