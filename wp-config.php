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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'lrb;d O114hqbsNyDCQ*%nTkbP90gz@dSVcu<eEd(!R^zSxG6)!L3]V^Q;uAxEET' );
define( 'SECURE_AUTH_KEY',  'MSt065O)flS$Ir&@C*!f78,)@rT,j=d`D!HH,TMfZ+L.HkF-^:F@=J{EX66gWfy;' );
define( 'LOGGED_IN_KEY',    'DxmX:-_~=}5pL8/ZqMCPc5.,A0f~X6U>PSd8zKs#]kiJA`SBHJj`nnsrFpB<^(Im' );
define( 'NONCE_KEY',        '#E+lQ8l[3NR4IgDkX58ip Lwf690kNVjW5u2/wZ_J7VGAbq1A+m%(.40>^J2%?}I' );
define( 'AUTH_SALT',        'Dj` U`}iF|N1BAz<#n]>ppYKf`AyVC*R(:&sJMiz~)Xu6x;xVmN&pCnrNZrTfP$C' );
define( 'SECURE_AUTH_SALT', 'JI^_`Zv(rvN*!A2~%q}6!#RFf(50=%Ti{415Y*lj;V)tb]cp6C2xLy<Oj^^k:0+j' );
define( 'LOGGED_IN_SALT',   'a0b`k9O(aDR4_VPXWIz(&;&*H62pQ`lvE],/i!yLf[p2w8E>#mS]evbzq=B&],g-' );
define( 'NONCE_SALT',       '?4x;|! *c7n1(A??w[jUv0;L%jk4SzE%@/t~xC~74tl@ZT<W9LC,QWo&JgT9My}A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

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
