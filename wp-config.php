<?php
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
define('DB_NAME', 'accelerate-mjdz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'DMSZ17625family');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         't[,w-M3v>.Qf95Lc?|  rju5P)+W22$TP-DX5~A24adUJsG;}cp,Zp7.|@0*mufA');
define('SECURE_AUTH_KEY',  'ScFg4Q[bFR Z;K[N#5&;Q5*3nRFuzk/7lCVKIaN@Bc:uAa2C{7$Q6[il<r5nYCRY');
define('LOGGED_IN_KEY',    '-H`bq-)5hHv+rI<9>?LtM-$rJZ{9/ON}S7F{jW;xf bN5x9U-Y_3~%U{v#shq CH');
define('NONCE_KEY',        'M8n3{> Z3Ll2`;b@[Yi:xS7]X1r?gNf|32-CX;qnPJ@+FD Cf?!z15$bB)Xxg* B');
define('AUTH_SALT',        '+-Gt7x7^nd5K(8Hj l@<uldg5cQw{cJ=:ZA!(n##}J1_ pIH8-I1Bib=-+R<+J#)');
define('SECURE_AUTH_SALT', '&MHnjWM3@QxS+N6Yek~+<$1oVwjAHP, H+_e@9[ue{ !hc%eOkra3ycC#3n>$J%1');
define('LOGGED_IN_SALT',   '=TSb|)`pkjvDX}FZer=Hng*bex(OzKH_{ VI#j5|+#j6-mmP A0|us&IFv#=&o $');
define('NONCE_SALT',       '/[F&=l6=y1:t+%#24VD<VK.hp^#*gCd-,9He$i|x1d6A`Uq&/-T-b9.eho90_lQA');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
