<?php
define('FS_METHOD', 'direct');
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
define( 'DB_NAME', 'db817142107' );
/** MySQL database username */
define( 'DB_USER', 'dbo817142107' );
/** MySQL database password */
define( 'DB_PASSWORD', 'SeePVcjGuEGtXypKLyRo' );
/** MySQL hostname */
define( 'DB_HOST', 'db817142107.hosting-data.io' );
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
define( 'AUTH_KEY',          '!jJH_BjB;YSoy*JAxT=_uv]Z9jTyc/] +jA<RR8[xxb[_FF{#v2#=q*j2SL%/(|;' );
define( 'SECURE_AUTH_KEY',   'I7k^hnFs5g9-|#_WB*5m#ru03QL^-):ErG!t`=$[.x[n.VHh#Eumwcf!Ep(KTo0i' );
define( 'LOGGED_IN_KEY',     'oYX2C]XtU@pvfQ2^:QTY1Rjvb S6=Xv;QSMV(~ Gn4dl2vfUd{f;^gDc##mp^ky(' );
define( 'NONCE_KEY',         'lWtr`mrj!l5soLBX%7Iuk=XbJ6JfTDlLo|>tvuGYAqe#9`?#<u,F(?PZtMgi18cA' );
define( 'AUTH_SALT',         '}TP$$<=l:IS$F[uOF~rBC<-}qxl?ZgUB`z<QsS$UnR7E+e;v/`|[OI~}/{du^5=K' );
define( 'SECURE_AUTH_SALT',  'xnpNaTV {`I896[wC99-$REO<i4reAX~A:IPh3x~bvnXbTG1.#~WTG>F;MV0cCQI' );
define( 'LOGGED_IN_SALT',    'QkI;<0[(^-tI2(Z.(9@sr1VivI!DLEi2.1i> >w!VTeHcV`hrqu)M1tdBTmYL[X:' );
define( 'NONCE_SALT',        '=?T|4MojB/a9<faCj_|=v&B%57;Lj@Un(w]lwZzB(Y_3z19g^!$8WPm|(+UkuJ}F' );
define( 'WP_CACHE_KEY_SALT', 'p/drUEgmOZzYdvA cs(buG=eiha:2ZR>FFpiI0`:2O!_x%rI5?y-{yoSd[}-/3!y' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vfNlPqkq';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
