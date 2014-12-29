<?php if( !defined('HARAZAKIDA') || !defined('FUNC_BASIC') ) handle_this('Function File Not FOUND','This App Need The Basic Function');

 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   Current File: APP SETTING
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
 
 /* Ok, give a awesome name for this project */
 define('APP_NAME','PHP BOOTSTRAP');
 
 
 // ______ DIRECTORY / PATCH SETTING's ______  //
  
 if( !defined('D_CORE') ) handle_this('The CORE Not FOUND','This App Need The Core, Defined It On Setting\'s File');
  
 define('D_CLASS', D_CORE. 'CLASS_' .DS);
 define('D_LIB', D_CORE. 'LIB_' .DS);

 define('D_CONTROL', D_SET. 'CONTROLER_' .DS);
 define('D_THEME', D_SET. 'THEME_' .DS);
 define('D_CONTENT', D_SET. 'CONTENT_' .DS);
 define('D_LANG', D_SET. 'LANG_' .DS);

 define('D_STATIC', D_BASE. 'STATIC'.DS);
 
 /*
     Filter File's Request
	 - The File Request URI Will be preg_replace by this regex
 */
 define('FILE_REQUEST', '/[^a-zA-Z0-9_-]/');
 
 
 //______ APLICATION URL Setting ______//
 
 
 define('APP_PROTOCOL', 'http://');
 define('APP_DOMAIN', $_SERVER['HTTP_HOST']); //$_SERVER['DOCUMENT_ROOT']
 
  /* 
     [ BASE URL ] of this APP
	  - The url must a full with starting with HTTP protocol, 
	    Will be use by template to linked the source like script and another file's need to
		build a layout.
	  - True ex. http://www.yourdomainaliasperfect.com
  */
  
 define('APP_URL', APP_PROTOCOL.APP_DOMAIN);
 
 /*  Url location are stored public file */
 define('STATIC_URL', APP_URL.'/STATIC/');
 define('STATIC_CDN', STATIC_URL);
 
 /* The bootstrap & jquery lib, this file will be load by theme */
 define('STATIC_LIB', APP_URL.'/STATIC/LIB/');
 
 
  
 //___  THEME's And Controller Setting  ____//
 
 /*	
	 - By default BOOTSTRAP_COMPONENT are requitments by templates, but
	 - If you have a custom template, you can skip it and comment the line
 */
 
 define('USE_CONTROLLER',TRUE); // Comment this line when not using the controller
 
 define('BOOTSTRAP_COMPONENT', TRUE); // Load The Bootrap component

 define('APP_THEMA','V1'); // Current theme are using
 
 define('STATIC_THEME', STATIC_CDN.'TEMPLATE/'.APP_THEMA.'/'); // The static url of Current template
  
 
 //____ LANGUANGE & THE LAYOUT _____//
 
 
  /* Use the basic function for handel switch lang or layout,
     or comment the line and handel with another function 
  */
  define('USE_SWITCH_FUNCTION',TRUE);
  
  /* 
     Languanges are exist for this aplication
     - Before it, the file must be exist on directory of lang (D_LANG)
  */
 define('APP_LANG','BAHASA INDONESIA,ENGLISH');
 
 /* Default Lang for app */
 define('APP_LANG_DEFAULT','ENGLISH');
 
 /* Allow the request to SWITCH the language ?  */
 define('ENABLED_LANG_SWITCH',TRUE); // commented at the beginning of the line to shut down
  
 /* The Layout string */
 define('APP_LAYOUT','MOBILE,TABLET,DESKTOP');
 
 /* Allow the request to SWITCH the layout or device ? */
 define('ENABLED_LAYOUT_SWITCH',TRUE); // commented at the beginning of the line to shut down
 
 
 
 //____ ADDITIONAL EXTETION ____/
 
  /*
     Coming soon	 
  */