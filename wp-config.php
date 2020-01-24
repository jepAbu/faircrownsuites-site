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
define( 'DB_NAME', 'faircrowndb_v2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd[:f$Y^1ufJl89qT<?wJ(tz$7 8Va*59n QgBuiN :BXHT{HWBP,Z1r4Vq2blI,3' );
define( 'SECURE_AUTH_KEY',  'kAB~-/8Nhp`rxVTa&#74XJ2py8y8oH{j/yBQeF@5Q_l[C^.)~,t=O|RZNcb@k=xU' );
define( 'LOGGED_IN_KEY',    '>nt5o`^AY/bJ4]<z6J5:T.o@YvjFO]!%mUsXPs&+R#WkS(<.aR`0xz)4G D,MG>,' );
define( 'NONCE_KEY',        '4@}(f(SzEM^^RfrU9wqLrCXao:l`_E7HXbGa`GQfSh6HYGv0}KNR7C4BT|HVAGuT' );
define( 'AUTH_SALT',        'D-o0|urLj&-|4>>#``^E,wgA/-UmPRbB5{s([kzHuM5ZipPo*~fr)]weImP{|xnP' );
define( 'SECURE_AUTH_SALT', '1ez2pPv31V+3n/WVVe?aIsT*hIz=`LcdYi-s5hOoialjUE2)+m9%o_ 0{Oftr(m}' );
define( 'LOGGED_IN_SALT',   'cbo/.~x_j3L#eEx2{w>Gr:dLflD4_h%97wnd_5Q8t5V[L6<MV+,NtMb} E2U.pp$' );
define( 'NONCE_SALT',       ',C?o$B+Je~fNySC%2#QKt#a]L6d37l}},uTII;T7`}[(f?1zhd;eNKe`7$f`)reC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
