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
define( 'DB_NAME', 'ladesimabase' );

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
define( 'AUTH_KEY',         '}Lj+l+4%OG{`BFd{@%@h?{)wIS)oejl9)d,S&ClF1Uq[2HTd<6=F>^SDlqO5n}m8' );
define( 'SECURE_AUTH_KEY',  '!1C13Xw$;zQ+^Z|v,^nI=AGA+w1$}d6RT-UZ|9s5YBw9)~EEzdwajDmN;CD%#B3I' );
define( 'LOGGED_IN_KEY',    'IFfq?`1-)WB$)(ym_#jy4TFC0AR@Wtu[SR~+//d#;)PO(~{+/J77jCO.7Y<2gU[K' );
define( 'NONCE_KEY',        'o?XxY^lW;$;p$L3 T7#{bochHyy8;j)Z(7DQB/^>{nqUI.60Sg+x?=@vlLQxj|5E' );
define( 'AUTH_SALT',        'Xdio;3>%mD&u|=IpU&`l-prI+FEjHUo.t$s[dA+=&0Q2->VK!~GzK[Y!tTAe^5`Y' );
define( 'SECURE_AUTH_SALT', '9IVcp.zL6WU~@ov.%`b[09[p{|,6tp%,x(:/X10])Qg(Yh U;t_]+PqJkBfagAJd' );
define( 'LOGGED_IN_SALT',   'jA_~nmF_|=lvef-;40K=+9|`$&vjB%:.~<.O/b@NBQRNd>-C!N1PEi%A.0^[.1p>' );
define( 'NONCE_SALT',       '(uXs1S_/3dZ0Kwb}d,]P$Lp|,[tjVox|:ziqzVp41A[L< <m-oi>1GNt&>.6k*+h' );

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
