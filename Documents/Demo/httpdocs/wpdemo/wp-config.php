<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress instance is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_54mvl' );

/** MySQL database username */
define( 'DB_USER', 'wp_p5jut' );

/** MySQL database password */
define( 'DB_PASSWORD', '71$V9cRNlg' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'dR05@I:Mr61Q4y27Q:2LaP5:uoKm0(B5pTG5+&qm7C0yZ|0(bp/R5;Uzbl5p+u:I');
define('SECURE_AUTH_KEY', 'a3A!rn*F7GDhx541gcOH4jx1qFsdh)I1eT7IR+1@+:QfMo_TY%3kxoe)P/D25pMc');
define('LOGGED_IN_KEY', 'W/2g0uk58hV7Db5Xfjb070M6_J59B28FiFO2809OjKSpOK33fI|/+4~D((L_8Q4/');
define('NONCE_KEY', ':XNN4Rs:06Ior]aZo!KEh94uy3s4Z#0/]L2|QQn/Cc2z)]*8!_0K/Fq5:3uGE0Af');
define('AUTH_SALT', 'PzE|jR1RUv:_z(W9xOR_07joeC~5IM;8)2KQ~S-8@#077@bYnjU_H)WyX1%vZIOW');
define('SECURE_AUTH_SALT', 'wP~X7@HJ|8Z%00R1X!o6-rTql&11;i0Gs0w(j2|00~2-rd29Y7Xd8s~-UL~Ak@W&');
define('LOGGED_IN_SALT', 'LIdQ53A!A9/4)pYOF;evk*3VXu|*3BoL1-T*;Xh1!O~9yQY%Zyb70mZXVW5M4c0q');
define('NONCE_SALT', '62/eq7HyW]5/oMK]0b4GzgsH@(p8BTDcKI288Rcu8Af3VL95Yyd3:~B-UB51%@19');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FPfzRvC1_';


define('WP_ALLOW_MULTISITE', true);
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
