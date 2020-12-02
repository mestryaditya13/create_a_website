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
define( 'DB_NAME', 'create_a_website' );

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
define( 'AUTH_KEY',         'n^(0Z5OthPXg2*CntL[8[MQ/Z<#2#S)[cDr4+7MI=sr(Tf-7BDJ=zC$h5z:j2{B#' );
define( 'SECURE_AUTH_KEY',  'Zjia!gnSY@ji ~_;Ti~VrXlng0Vq@Q>9/?:+&x9*)l9v,:w?_#eXF<67:e6$-qd}' );
define( 'LOGGED_IN_KEY',    '4hVb,xO&Dxq]L:ZT4HiLTSc/<tYr1mIFdg&TrN,JNktFRS3G#&/79GG;`)[KI:4b' );
define( 'NONCE_KEY',        ':~<HL`v}0jvGgsm0}jtw`l{C!kP:S.8n9pM_%*()hE~*ZL5Ic,W:XZ.I8}s4Cn]]' );
define( 'AUTH_SALT',        ' xn!s8$.zOP#mFEZtG*>$rSgiaVQEvJ*W>;e,[W@t@c6D@P.Jk,>~K>-F9c{dR$`' );
define( 'SECURE_AUTH_SALT', 'kY/dsyHDQ0^REb+nI=G<!7xY.;GnSFfrysd]UL9~.,Qim|9rA:#mrqj%}0Pn{A8A' );
define( 'LOGGED_IN_SALT',   '|K:0vg*F:|cnz(6C_p1>pzaq-eW}&{B7/@GgldMi?kB/Qp|ky2>[0({R@Se]O/tB' );
define( 'NONCE_SALT',       'Y&!P,n~{hsWQ+W^}(}U7GvylAg=RoC)?{bH@EeYJ)b.AGYZA$ zP>k#@QA?5TI5)' );

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
