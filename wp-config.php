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
define( 'DB_NAME', 'nk543561_stomat' );

/** Database username */
define( 'DB_USER', 'nk543561_stomat' );

/** Database password */
define( 'DB_PASSWORD', '~9h4F)r6pY' );

/** Database hostname */
define( 'DB_HOST', 'nk543561.mysql.tools' );

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
define( 'AUTH_KEY',         'XN#A|[0B59:2KH8rkt0cd0gQmDLlTTnP:!s{y6cB|d1FAsa-:[B,FcB62`P~9yZO' );
define( 'SECURE_AUTH_KEY',  ']ba[i/Eg&=yE^Rs{*pOx$o|,A$[5`-feU4(ITVhmvU)h4AEmaLvvI];p6xI:,s!`' );
define( 'LOGGED_IN_KEY',    'n+(98f;RrLs/:H{|C@|]i~^.Q#bFGG|Bi5#og@&3ep&*LD[U48csiw#Xs<I6v>@z' );
define( 'NONCE_KEY',        'nT0uYykmlRYa!K7&V(9CK&Ua,I+tGv6K!xf@F/D!`cKn4oI^,I0PM1F^#)rB/8-Y' );
define( 'AUTH_SALT',        '6ZZ/$B}(i?$++:hWzX #.pl qY6~]G+zcRloK3i H]g[o]c.QbDzIqY;7~I_3!u@' );
define( 'SECURE_AUTH_SALT', 'r&R)gasthB1u@x[3cqNF&DfX(~^o|5?dU9Uy:@DGn:rRkWKB/fa)N:+rHa>Fh`wC' );
define( 'LOGGED_IN_SALT',   '%FY3x2y%&U~}@cz~)mmwxo@hgaLL7gJd0x o9 {vhK]!TXoR#(LaK4?lEq1l#=I+' );
define( 'NONCE_SALT',       'm5oN|;0|!K)Yxq#MC4eG7fQ]h/8>~2u~=Xd/~3qd*KwW[7nKFa1fg<$n_sZ=B}(n' );

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
