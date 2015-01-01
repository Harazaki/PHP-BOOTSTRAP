<?php ( defined('PHP_BOOTSTRAP') && defined('FUNC_BASIC') ) OR handle_this();

 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   Current File: APP SETTING
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
 
 /* Enabled Error Reporting (PHP) */
 define('show_error',false);
 
 /* Ok, give a awesome name for this project */
 define('APP_NAME','PHP BOOTSTRAP');
 
 
 /* ====================================== DIRECTORY SETTING ========================================   */
 
 
 // ______ CORE DIRECTORY ______  //
  
 defined('D_CORE') OR handle_this('The CORE Not FOUND','This App Need The Core Base, Defined It On INIT File');
  
 /* Classes directory 
     Default Location : PHP-BOOTSTRAP\CORE_\CLASS_ 
 */
 
 define('D_CLASS', D_CORE. 'CLASS_' .DS);
 
 /* Library's extetions directory 
     Default Location : PHP-BOOTSTRAP\CORE_\LIB_ 
 */ 
 
 define('D_LIB', D_CORE. 'LIB_' .DS);
 
  // ______ SET DIRECTORY ______  //

 /* Controller's DIR 
     Default Location : PHP-BOOTSTRAP\SET_\CONTROLER_      
 */
 
 define('D_CONTROL', D_SET. 'CONTROLER_' .DS);
 
 /* Themes's DIR
     Default Location : PHP-BOOTSTRAP\SET_\THEME_      
 */
 
 define('D_THEME', D_SET. 'THEME_' .DS);
 
 /* Content's DIR
     Default Location : PHP-BOOTSTRAP\SET_\CONTENT_      
 */
 
 define('D_CONTENT', D_SET. 'CONTENT_' .DS);
 
 /* Languanges DIR
     Default Location : PHP-BOOTSTRAP\SET_\LANG_      
 */
 
 define('D_LANG', D_SET. 'LANG_' .DS);
 
 
  // ______ PUBLIC DIRECTORY ______  //
 
 /* Static BASE DIR
     Default Location : PHP-BOOTSTRAP\STATIC_      
 */
 
 define('D_STATIC', D_BASE. 'STATIC'.DS);
 
 /* Filter File's Request
	 - The File PATH_INFO Will be preg_replace by this regex
 */
 
  // ______ FILTER REQUEST ______  //
 
 define('FILE_REQUEST', '/[^a-zA-Z0-9_-]/');
 
 
 
 /* ====================================== ! END DIRECTORY SETTING ===============================   */
 
 /* ====================================== APP URL SETTING =====================================   */

 
 
  /* 
        ______ APLICATION URL Setting [ BASE URL ] of this APP ______ 
	 
	  - The url must a full with starting with HTTP protocol, 
	    Will be use by template to linked the source like script and another file's,
		need to build a layout.
		
	  - Example: http://example.com/ , http://localhost/myapp/ or http://example.com/myapp/
	  
	  - Or, Use experimental short way :  
	  
	      'CURRENT_PROTOCOL' : will return http or https
		  'PHP_BOOTSTRAP_URL' : Auto detect current app base url location
  */
  
 define('APP_URL', PHP_BOOTSTRAP_URL); // Aplication base path url location (with slash [/])
 
 
 /*  Url location are stored public file */
 
 define('STATIC_URL', APP_URL.'/STATIC/');
 
 define('STATIC_CDN', STATIC_URL);
 
 /* The bootstrap & jquery lib, this file will be load by theme */
 define('STATIC_LIB', APP_URL.'/STATIC/LIB/');
 
 /* ====================================== ! END URL SETTING =====================================   */
 
 
 /* ========================== THEME's And CONTROLLER Setting's ================================   */ 

 
 /*	
	 - By default BOOTSTRAP_COMPONENT are requitments by templates, but
	 - If you have a custom template, you can skip it and comment the line
 */
 
 define('USE_CONTROLLER',TRUE); // Comment this line when not using the controller
 
 define('BOOTSTRAP_COMPONENT', TRUE); // Load The Bootstrap component classes
 
 /*   
     Here you must activated your themes
 */
 
 define('APP_THEMA','V1'); // Current theme are using, and must exists on themes DIR
 
 define('STATIC_THEME', STATIC_URL.'TEMPLATE/'.APP_THEMA.'/'); // The static url of Current template
  
 /* ========================== ! END THEME's And CONTROLLER Setting's ================================   */
 
 
 /* ========================== LANGUANGE & DEVICE SETTING ================================   */
 
 
  /* Use the basic function for handel switch lang or layout,
     or comment the line and handel with your another custom function 
  */
  
  define('USE_SWITCH_FUNCTION',TRUE);
  
 /* Languanges are exists for this aplication
     - Before using, the file must be exist on directory of lang (D_LANG)
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
 
 /* ========================== ! END LANGUANGE & DEVICE SETTING ================================   */
 
 /* ========================== + ADITIONAL SETTING"S ================================   */
 
  /*
     Coming soon, will be add here
  */