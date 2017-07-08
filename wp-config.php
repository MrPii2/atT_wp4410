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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'H(v|8WTE|l+U ]Dr3Y$c]{e0ZS~>[Z(L1Tj:gTwd4E:vIG.zoDjK/Qs4@hH^ra;+');
define('SECURE_AUTH_KEY',  'L.*{3%?d@G_KL|-`o@cQl.B!p942,|hKCtVVB<huh8&$?Oj/ |d&%]71kcc@++7.');
define('LOGGED_IN_KEY',    'yZk;~%uF{J %Z$}1|C[7&!z{#*a?J k+MaR@4KtMnz|/)KXwN<8>&v!M|u5z5m(Q');
define('NONCE_KEY',        'LFW6GjGU+[72]hg|%HF1}|9}+Uo@=|A6K{RSv:LM#n&b/Ff>t)[Z6Wa!h&vuGlP`');
define('AUTH_SALT',        'Jdg08_3c08=xK>YU3D^GE=n-#]GaLLFSNuTd41VL~:]-d/qtBgh6q})=iy(k]Tt$');
define('SECURE_AUTH_SALT', ':EFP>1R^oC[|SscL^#k?qQHpVb +,9k|:N6(v)e$EA:1g$_{ `.6A!I#rF+XHBQU');
define('LOGGED_IN_SALT',   '=i;/$|y(C^5yzV?*|}QbeV:v+X>6ALiXZ0Jn.JHOl=-n+rB4CIu6J^BgthVoP gX');
define('NONCE_SALT',       '(|cIuXgn?L[>x4U<1482+g>t[-R5A93b=kv/gX)d/%v|BOiGI|qll/hc~_Zc$DIx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4410_';

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
