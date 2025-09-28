<?php
// Added for SQLite Integration
define( 'DB_DIR', WP_CONTENT_DIR . '/database' );
define( 'DB_FILE', 'database.sqlite' );

// ** Secret keys - Your new keys are here ** //
ddefine('AUTH_KEY',         'U|b@|.. E;1ojpgAld[A/nWiz7vE^%&[]jiyeP7KOU+-Z;@_aH34b,m^l;5-`I+}');
define('SECURE_AUTH_KEY',  'BZu!3^9-;;dxHTwFKe4Vg%`RfDy[S IigW_T*WRX|D;5XdA5dX4vh9= Y[`VkT{m');
define('LOGGED_IN_KEY',    '|~;j2`SYodOBh>Z}EZs(L@C&~R6_+cS&G/q>TVx!XF24|l0#O|pNx93i?a|[Z5$M');
define('NONCE_KEY',        'AdXxLv|PwvtY:k]$QRcq~d+Yc| qT2A7np3T8FNJP-gEzGbO1Dt_5}!1rq}9(,)-');
define('AUTH_SALT',        'tM<[iMtFoyTY|O&xsm*v8-90RmD|%o{6Y`W;P0~^0Jx1^o%*(pvU[uAJqt?^.$Os');
define('SECURE_AUTH_SALT', '6|3Zz0O^3kf16tR|C!Pqx.;f|w_IMZ^r~Q/tv^%vT$86t~cH,@CRB[isJ^>D,h]C');
define('LOGGED_IN_SALT',   'Kl:p$FGs}Z;$+jPl2V4#<h-9^V%-%h-V!vn|5D5s1Z)$#pq/./DFPkMt(RvTL_&s');
define('NONCE_SALT',       '$rQ Q+Z9!I~C{~vRECXZeL[Lz3sX[f9qQ%3;|xFTAk^N`jvA2{P>dRBb~+4%W5d<');

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';