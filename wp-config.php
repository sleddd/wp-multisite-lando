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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '9ass_[wPh|YtZh,v)g=mJ^ROs aw!1Rfw8]*=[n$$/n+jXbWN8bD^+V#pk/-M)qF');
define('SECURE_AUTH_KEY',  'pKAf,kj~V`6N3&caq8wZO+z#c2ri$i>1iWWmOA^7<KmQj@)aj-izV=gwkz;i>4@$');
define('LOGGED_IN_KEY',    'yV9 Hq#.&NFBi>#@zUCCs-t8z$uf0}G+-EWu/<)qgzU-Tb_U-PAG;S2DI-{ 8lg`');
define('NONCE_KEY',        'Iu6Z}A*b}|EWiHp-HlM!]XRFsY52}aTv]}YJaWbXDKK@Wee-mI?u /;uO^huShx+');
define('AUTH_SALT',        '0oeSC-yR$<lf5&b|pu*?5TQg}BA6)4@gvyg{H17`0We8A,WQ+,0(_K{^DNv+bI7)');
define('SECURE_AUTH_SALT', 'v--hx?|T+$fPr%<+]Qe_8SBSX-sS}h-xoR}}4ty1e| ~~/e#8!BX:`g{u2b^98FW');
define('LOGGED_IN_SALT',   'TF.v**yz)@CpN9_O-JrMUkqWC`x/=8Q|5,-&%w+3W+^X1MT:Q,6<W39EBYePJ/84');
define('NONCE_SALT',       'M;6cr5j5Y8oq7UXkIFeuGIJQ{Um^9^QhwUeF#b.}k,>alu4`[Om;F|c $ |BS_4#');

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

// Load Composer’s autoloader.
require_once ( __DIR__ . '/vendor/autoload.php' );

/* Move location of wp-content */
//define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/app/wp-content' );
//define ('WP_CONTENT_URL', 'https://wp.lndo.site' . '/app/wp-content' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'wp.lndo.site' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
