<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clpm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y<a6:nvSy9,:Nh~]vl~[ar;qy4h`m*aUT.N3Ny5<o=t=6@zf5+z${*Pj^J<{_eh)' );
define( 'SECURE_AUTH_KEY',  'NM=eY=v:Np5v?p/Ja5evU95WjhlJ>~IcBttR:q)[8TMHT_vDJl6/n5`]}i9[3ubM' );
define( 'LOGGED_IN_KEY',    'nQYa]$`)1Codh>!}=vG$ufRiX)4;d$,*ExkPk=SQ{e_7N=1P4;!.X0~gJ:sM)`1u' );
define( 'NONCE_KEY',        'b:dPataw9s+7b+JzM?WB!E*j7/]`|BwVDC~Yk}W$bCdaE^`iwNcyz yV(XAV9ia[' );
define( 'AUTH_SALT',        '- 0/LI%fq4{zX|lNni3,48%-w.K&MO~tA1ck^]0n.s#LM)2@c(1f?X{x:SEmk@vX' );
define( 'SECURE_AUTH_SALT', 'u#* p!iF=_<JMU|]|QS69~45yp-b$W,]k6mUb{kOeK4Pm C:fC{.)ExG@K;#.,l|' );
define( 'LOGGED_IN_SALT',   '08_:Z[!%7nLmmfUxi32_UN)7~YJ6$P0ORa4mpkf0]CZ ?AB#F/#Aaf2Om8CoNW%b' );
define( 'NONCE_SALT',       '{9o$M^Gr+W[yF*hbD|SL$d:YPd*Nwc&5D1|e4$JTDz)S>2z)$Z=rm8#IdqSY&_GK' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
