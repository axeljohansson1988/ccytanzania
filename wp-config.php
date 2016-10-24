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
define('DB_NAME', 'ccytanzania');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Jupiter123');

/** MySQL hostname */
define('DB_HOST', 'bt25-php-dev.cloudapp.net/');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qC^7~hzP>|qY>oh%%T[@[%N-pHu<I>k.t&Nj%s80;#tY&,yN<GJuX(!P8#JMa-<?');
define('SECURE_AUTH_KEY',  'hJM f%ER_rAg?hRF3f<KPS#{i!08]c9yqi<pz`~`KYF1M=t,y2#WHj}&Y6zeu`c ');
define('LOGGED_IN_KEY',    'EXG*c2E)P3b,Gh(iqIwV>#s#?h7Dp1`Z_y1(wj@rG=IZ>n!v; DKlFqsad}i%0.L');
define('NONCE_KEY',        'E,^ZlJ,W:LF(9CIcb=9||$^4z>?|G0RN7KH-$rhMp]t-ip(G67b|sjG)edEwPbtF');
define('AUTH_SALT',        '{bu*P}S0k<VwkJ#$Jjz8Tn$ KeZh%C:mp<F-(Q4Km`%ZIzi-Y<XW08/Xl,ACT%,!');
define('SECURE_AUTH_SALT', '5$c+~c.P~a[!.%_B{|}2/5F-fINGRCeE+1q-!M^?BSr]hc|OA8Zc+&QapW|aX56Z');
define('LOGGED_IN_SALT',   'XpjS/z&-5Cuo]ECcV*%KF2B;ll+$Tbpuuhzq%)[ly=d:?v>vDJ}Ls4_V*gIt#c|P');
define('NONCE_SALT',       ',[r^@ZX$i&&Bsv0s*}Ech~N8j/ bbv$G]c(C 8+DIX_^tF|Eu}q:2}?>B?#q0}i,'); /**#@-*/ /** * WordPress Database Table prefix. * * You can have multiple installations in one database if you give each * a unique prefix. Only numbers, letters, and underscores please! */ $table_prefix = 'wp_'; /** * For developers: WordPress debugging mode. * * Change this to true to enable the display of notices during development. * It is strongly recommended that plugin and theme developers use WP_DEBUG * in their development environments. * * For information on other constants that can be used for debugging, * visit the Codex. * * @link https://codex.wordpress.org/Debugging_in_WordPress */ define('WP_DEBUG', true); /* That's all, stop editing! Happy blogging. */ /** Absolute path to the WordPress directory. */ if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/'); /** Sets up WordPress vars and included files. */ require_once(ABSPATH . 'wp-settings.php');
