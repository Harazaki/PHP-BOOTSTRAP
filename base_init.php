<?php if(!defined('HARAZAKIDA')) exit; 

 /* 
     * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: base_init.php
	     - This file location at root document of app
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
 
 // Default SEPARATOR, like \
 define('DS', DIRECTORY_SEPARATOR);
 
 // The base direktori of app
 define('D_BASE', dirname(__FILE__).DS); // $_SERVER['DOCUMENT_ROOT']

 // The core directori
 define('D_CORE', D_BASE. 'CORE_' .DS);
 
 // default setting patch location
 define('D_SET', D_BASE. 'SET_' .DS);
 
 // Load the basic function
 require_once D_CORE.'FUNC_'.DS.'BASIC__.php';
