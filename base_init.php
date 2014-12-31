<?php defined('PHP_BOOTSTRAP') OR exit; 

 /* 
     * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: base_init.php
	     - This file location at root document of app
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
 
 // Default SEPARATOR (\)
 define('DS', DIRECTORY_SEPARATOR);
 
 // The base direktori of app
 define('D_BASE', dirname(__FILE__).DS);

 // The core directori
 define('D_CORE', D_BASE. 'CORE_' .DS);
 
 // default setting patch location
 define('D_SET', D_BASE. 'SET_' .DS);
 
 // Get protocol
 define('CURRENT_PROTOCOL', ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' ) );
 
 // Detect Url App testing
 define('PHP_BOOTSTRAP_URL', ( (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST'])) ? sprintf('%s://%s%s',CURRENT_PROTOCOL,$_SERVER['SERVER_NAME'],substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])))) : 'http://localhost/') );
 
 // Load the basic function
 if( $d_C0r = ( ( defined('D_CORE') ) ? ( file_exists($d_C0r3 = D_CORE.'FUNC_'.DS.'BASIC__.php') ? $d_C0r3 : false ) : ( (defined('D_BASE')) ? ( file_exists($d_C0r3 = D_BASE.'CORE_'.DS.'FUNC_'.DS.'BASIC__.php') ? $d_C0r3 : false ) :false) ) ) require_once $d_C0r;
 
 if(!show_error) error_reporting(0);