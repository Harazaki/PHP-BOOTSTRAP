<?php if(!defined('HARAZAKIDA')) exit;
 
 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	 @ PHP BOOOTSRAP PACKAGES [ example using controller ]
	 // Source https://github.com/Harazaki/PHP-BOOTSTRAP
 */
 
 if(ONE=='docs') {
   
   $mycontent = new PHP_BOOTSTRAP;
   $mycontent->title = 'Hello Word! ' . APP_NAME;
   $content = '<div class="container"> <h1 class="heading">Coming Soon...,</h1><hr/><div class="alert alert-warning" role="alert">Documents and examples are in preparation , please wait and <a href="https://github.com/Harazaki/PHP-BOOTSTRAP">keep track of the latest developments </a>.</div></div>';
   echo($mycontent->display($content));
 
 }
 
 else{ 

 $GET_CONTENT = TRUE;
 
 }