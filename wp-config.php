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
define('DB_NAME', 'mindfulness');

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
define('AUTH_KEY',         'p0((~N8p)4Ttr8Vjnqb>h:^ajR3c_hd)?,Y:x(x.M8aQwFMm:6N!;?O<3rL^ZtAH');
define('SECURE_AUTH_KEY',  'Hk7}Ejo <&}>aqh;G%A?C_ddyt))fzLu1#9a*_xMN_!t&Kap:!m%{H>&#(;uN+|z');
define('LOGGED_IN_KEY',    'VGID;Hph1608g#C:^0AIi~*,r:}v;~c1eyo+C$}Ct{TI:NO=P12axCP[&u$lxdpU');
define('NONCE_KEY',        '!+<q9%*kx+edam_q>rC_]Eeo8-K}Nfk,vcM9*F/RJpg9MB16KPZ*kbdurz^qxKRh');
define('AUTH_SALT',        'd+vv=PL4v!#s.GRp59Yy<ZW:+;Ol+SYT&n&OcC qz!3bW9Z@D#ma*.U}`mgvL{sE');
define('SECURE_AUTH_SALT', '*JQXl?eN)#S>1|n}_g2)IlY#;;:sdQ^VnK /|5~.b=Jw<|L__M,+&Sng-Lu @Jce');
define('LOGGED_IN_SALT',   '87N/K}`J(UXsy!kL|,F<ZvpWJ>ow0/&]W|d LjC*^RA3-MYaUnlnZ>yJ4Erg*BHy');
define('NONCE_SALT',       'V}K,MZ <AV-O]/h`t_jB>MwbSrCuGEV-6A[_|O,p8^m7PiMv(dQ}Dp0[y5g>9 Vc');

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
