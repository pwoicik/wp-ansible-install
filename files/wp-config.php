<?php
define( 'DB_NAME', 'blog' );
define( 'DB_USER', 'bloger' );
define( 'DB_PASSWORD', 'bloger!' );

define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         ',+vJZG:^7(G>q,v[<`o8BW|B#(Z!]=:qw[ncVJD2_5t6CXfVb89!)l@e;yX,B=<c');
define('SECURE_AUTH_KEY',  'B_ZpMBAg>Zt8q;vSNzBK+I^>U,^L%a;>FP($fBqR!7xvX7f*|>lA)Ij3W2G`2[Uv');
define('LOGGED_IN_KEY',    'k5d+vW8mdO4CBDy?I+ ~-;5z+U5HN8pa4gdkgp0hHA!td&j9#>Zp#LC3pk0q9G&a');
define('NONCE_KEY',        'V-$c;:+v<J@H1&o]9lt;a7<)wL-{4lyV+t#_)Q9,.90st/ydy~1F+Uvl(oP*oG=t');
define('AUTH_SALT',        '8V*1n$annZ+B0m^[7qD?${|%}++SrO|iiJ>vc-[Us5F|Q9 |I5A^:3G-Civs-|!`');
define('SECURE_AUTH_SALT', 'Hm8)U?wNuldBThl!J.+rslCJ;J]v3%N~Jmcru?V]A{I#yV(LZg}_3Mn9Ra-!+|,t');
define('LOGGED_IN_SALT',   '6-I|d^s=4D5a$WbT@+$T<7Mcp!<Y=6,^s8$iiki{)Q,Pkxzy=9w4#Gye@-3V|i1>');
define('NONCE_SALT',       'iF/-~}g`aqCp+ub{o<A0-mY{2hGT|}^A$VSX0P1;|=S+C4P-KZfOeB,1X7@so0s&');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

