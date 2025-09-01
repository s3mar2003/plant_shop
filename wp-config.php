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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plant_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '>|! a#q6~7HtrZI&SRm~L8}zr ?V,YyVVD)sr?4{_WdgyWT@%u!79sO]KxcNx,*6' );
define( 'SECURE_AUTH_KEY',  '5AFYu9 sHnFX!`$l]?H%,Ii: Sk;t9nc?;]mH`L6m9L0aIpe/|F$VJc%+X,=pqU3' );
define( 'LOGGED_IN_KEY',    'hA.PDiEcVNPk?<W`t%uhdo<G]E8 2Ta/ZFL,%6`g2++TLDmp`d+bI.>[[n}?J,-8' );
define( 'NONCE_KEY',        '0F341Zy+m@c[aWfHxkxn6e?$[tz+!s523lJ|-*_D>Z{5?5 e/NZc&a0bT^@&t6i/' );
define( 'AUTH_SALT',        'AfJR`:{D08<2@f>&qA6H`CXbiV.{LIxn=9A#OpXTkNhAl/,F~tlVsPB2:`KlIL:_' );
define( 'SECURE_AUTH_SALT', 'g9>bdeY+-GH;r,Y-5.?N=514|dK4QOM cs`J6XY8]jna~,XI^2Orwo(fNt>=F@fx' );
define( 'LOGGED_IN_SALT',   'brs(g9<g|NAc =~77jS3az>2K.575VbPp&mKbFUvW4=(3k.6$f_fl^PlV$v:U1;S' );
define( 'NONCE_SALT',       '!hN)m- O0*0j]>P9Tdf4Df&Pw_PR<@DyS)FVL8yoI[PUX[pT&^]lm,3>30,uXP;f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
