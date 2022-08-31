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
define( 'DB_NAME', 'acher_21' );

/** MySQL database username */
define( 'DB_USER', 'acher_21' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sheik801818@' );

/** MySQL hostname */
define( 'DB_HOST', 'acher_21.mysql.dbaas.com.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3G2!=t9f9>F4-<$9m-:)hp~|0uLX>(OhEj6t2.6%zjlDhZ`;rB5G#fqSb/P{SM{+' );
define( 'SECURE_AUTH_KEY',   '&*{X2qm^Qc7[=04IB-zy:Kr@ cp;,JIVryy{pL~T)]*/UPqD7rq:zWHs@t NsS5k' );
define( 'LOGGED_IN_KEY',     '4OKfg/;&VL}`I;c3%A{O3E`#&=H[{4}Wsi<=/@SP[iq:;0ZRDNGRCq 6E>[CN>q@' );
define( 'NONCE_KEY',         '+{FW+%U5C*y+&Yl&WSlm {-wWPEru7eCpj{#KqKmY@$mNwwxNqh!B/bjQB0qCirC' );
define( 'AUTH_SALT',         'I$k|w0EdB%[DR4hL=CYh,XolAD<^m2DmGj%o]9e#rq*{deS*S5{8^MB8!$&n@^(j' );
define( 'SECURE_AUTH_SALT',  ',t*Gq 6Z{^K(xq_yptW&cUA#[2VJ$lRF X2=JS-KPb^fwIpr49/4Of:uby+zA9[W' );
define( 'LOGGED_IN_SALT',    'J*zc*j0IGF&aZFVhj6tLXAS6/j3]WR^6E07*N1SG&1BcxDKV;/aRfej0,ZqV-GX#' );
define( 'NONCE_SALT',        'ivO=8}`2t<~;?W!TYc-Rb{T@7})Q,,&y>rq`_;zz(gOZ%HS@Tq+<[YSLOt1%1+k|' );
define( 'WP_CACHE_KEY_SALT', '[(pY|5t6YIUm%;f4o|Qa||Is&ott]S>3MJetmXu_#7$A!U=]^q-$c82U)I~Xl<!Q' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
