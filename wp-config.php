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
define('DB_NAME', 'mkl1');

/** MySQL database username */
define('DB_USER', 'mklk_admin');

/** MySQL database password */
define('DB_PASSWORD', 'AlHill1324');

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
define('AUTH_KEY',         'c4jK6;%9Te A^dCo[X|CQGaMou+h^o%%!)y*P+yWA,0E !:`,J}6Js{Jj^_<{#yj');
define('SECURE_AUTH_KEY',  'F}J?;J<(t~H{n*`:^6g 7i`XQL:Hb_pwH{eGRs)+#M~>Rtu`:G nJPq5pq!(l/?P');
define('LOGGED_IN_KEY',    'Wto,YP%N-0BePZZCEt?7ER40&)Z<=O^Xw{MD363Q2Q?]Vz4swT~ J3{_0f2adTz5');
define('NONCE_KEY',        'W$G2[KRQs2z[$<Boet>@@)SvuzG$Z-h4k6PF(X*{f#Gf!E&%al*( 1jNUzL^~JUZ');
define('AUTH_SALT',        '.ua,28[z]2w.v>cao&WV57V8#uT.W`caoGy|Ryg&/9Ms1uTy?J%Z[p VFlg_A$`_');
define('SECURE_AUTH_SALT', 'qBJYY(>G`RS[@NzI+(I0AbJ>+QX{:VAMoJjrorRc=QKCQv;[I]B({pQr<nCOymZH');
define('LOGGED_IN_SALT',   '=+B_*FMYfX*lsHFmPn!$EcC>]}YQ.voqHM;%CK~e*e;f@vNJYC|u Nom$zU)PX]u');
define('NONCE_SALT',       '0,;3Uup10I;Pf;db<5ztVs]mdn`6yF$*~S,9^&]gu*rhiTnI/PJJW;gS>R #(+7e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mkl';

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
