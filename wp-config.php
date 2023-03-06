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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'L}Fc7@-!dLod&k@k%I*($9YIQC4yu&D=aQy.Xl%-4wBi;expO`!xmdf][+J#`nd4' );
define( 'SECURE_AUTH_KEY',  '^#lGI)27u$6ku?*%pp~gUnWR_&G1nZ4&SoeGa-yKX-esG#mUdIu?(`E-2;MWC1 ;' );
define( 'LOGGED_IN_KEY',    '-Jclkg|L+dCZr5`lSb-15O7S?bY:c|SFnV<i#]d7TY%W.A_9NxfL7ucXQ%I7qu{D' );
define( 'NONCE_KEY',        '76aah7XH`9twb45f_HYB_9Q)R3~9~3<]xAYA]UO|1H5,V4c]UpcZ9qfX P6oARS&' );
define( 'AUTH_SALT',        ' ;}V4W2qeh@PxisE1C^Y -@D{mC}UaU-a,{KLPY:Q}_9$TLsNsfqOvD53I[JjO}_' );
define( 'SECURE_AUTH_SALT', 'xKPM=+yqf`w5[#z](e_%<|j&od27jBZZo?GXJxXByFRJx}0J WBYebODzp?YHTSp' );
define( 'LOGGED_IN_SALT',   'I E*a8SzC7r=b2(.:H<wif;LHu1^GHlTQY6E%YRRH42p5l8,mL~MYeJO?XwC8Kqr' );
define( 'NONCE_SALT',       '3rE83*o4k18 KH3zK{D+xd:{nI9uE]xf7{mBJ,L oB{c!21jedk|)x6jsN48FjGW' );

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
