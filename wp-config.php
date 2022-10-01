<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1_db' );

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
define( 'AUTH_KEY',         'Xj4=YB9G.kAnkes16a`&]ZDUB]|BaG}dOz-H7{v-Kz9iy2t6qmG4unwpR9s3>p69' );
define( 'SECURE_AUTH_KEY',  'NG}jKT#(gvxFs)pSbUioSsW%%fO>M@9/f2m[xJX_UEH59+1lw1I,UOU{O-+%P31>' );
define( 'LOGGED_IN_KEY',    'MFDg<%{e<-;XBsk03tfXxZR)bnqVj|S}n,jKs6^?A[6^3(qENgzZu,,)3b|>`F70' );
define( 'NONCE_KEY',        'd}hwyF2?9snC^gkd9G:#C+!2K-;<o7]S:HaT*5)M<]MA[$q5fKPvjuf*|l0Ze~J|' );
define( 'AUTH_SALT',        '2k**|?<^Z|@ffTs TGRP&F]#>U_do,sIC!0^oK16poLo,CbcaBGTp2kU/^|?%?@0' );
define( 'SECURE_AUTH_SALT', '^Wq{^G7u9RF:hI<f0HbKe@~~52yN[&=MNUOHYw6br WURm=8**?P))[s`}Tqt{oK' );
define( 'LOGGED_IN_SALT',   'C|{4,NXfujgWD0n~~9]lCXX4IQx^M1kZIW^0^(DS,c<.O*OsnC~upMGWnpPV7uIE' );
define( 'NONCE_SALT',       'b<cLN!iN5=SIf09SmpL5dizyu6p|kCGMg2oLlb=h+jo@X)G7)6yCfe+B3f{L&*V%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
