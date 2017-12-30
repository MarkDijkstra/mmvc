<?php

/*
 * Require config file.
 */

require_once 'config/config.php';  

/*
 * Require library classes.
 * (replaced by autoloader)
 */

//require_once 'libraries/core.php';
//require_once 'libraries/controller.php';
//require_once 'libraries/database.php';

/*
 * Autoloader Core libraries.
 * Note: filenames must be the same as the 
 * classnames inside.
 */

spl_autoload_register( function( $className ){
    
    require_once 'libraries/' . $className . '.php';
    
});