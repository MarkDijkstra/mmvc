<?php


error_reporting(-1);
ini_set("display_errors", "1");
ini_set("log_errors", 1); 
ini_set("error_log", "php-error.log"); 


/*
 * DB values.
 *
 */

define( 'DB_HOST' , 'localhost' );
define( 'DB_USER' , 'root' );
define( 'DB_PASS' , '' );
define( 'DB_NAME' , 'mmvc' );

/*
 * Config values.
 *
 */

define( 'SITENAME'     , 'MMVC' );
//define( 'APPROOT'      , dirname( dirname(__FILE__) ) );< 7.0.0
define( 'APPROOT'      , dirname(__FILE__ , 2) ); 
define( 'URLROOT'      , 'http://localhost/github/mmvc/src' );
define( 'ASSETSROOT'   , URLROOT . '/public/assets' );
define( 'INCLUDESROOT' , APPROOT . '/views/includes' );