
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4%mK<kd$F&{o6:|l`l3^4ci!4>AY+!!Y)(`~h^m?54FQ@LsvU|PEYaC{|!fY] 68' );
define( 'SECURE_AUTH_KEY',  '^5N=Mh8TseAQ,aIh0uwU^7S/k/{G>j*tky6HU@c@5-^9B/dGpba{`Ns02%.B4?[d' );
define( 'LOGGED_IN_KEY',    'zgFB*3gLcoswtihspD::sPL:7p,-^.9udUvw-2}?7B-3kz73FS(jD}|a*0Vc:x2Z' );
define( 'NONCE_KEY',        '$~HEM8>i_nh|a5r~!eu/wQ>c9*#o4vLc)I~Zs2iW_v<?$Ls:YcTz7bT9t7PJt>rZ' );
define( 'AUTH_SALT',        'T*o;}!Wa%vdT(?(OY{_#4~p9%[nzf]kWMa]XSAF^S2rYfg{7^fVQ2;)Ujll)=?.{' );
define( 'SECURE_AUTH_SALT', 'kE#$i!r0n5<A-S8-$7{=gPAq {#~@GtS0^Mu<:f-xPC, WAb_*,_~X>XwtS0ogp,' );
define( 'LOGGED_IN_SALT',   'ctIz;Z7y?4#0`SnD-m!A/(#OH]v0o5Z8|P]DoR_L,Yq-.eLKqP[/<j=[Lrn<2f&;' );
define( 'NONCE_SALT',       'Xk;8@x!ng8a:n4`M.;&2Vg.*nYtI:|9h*V?&$,a#`P t+ZM5k.w[a&Uo|>sG u0(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
