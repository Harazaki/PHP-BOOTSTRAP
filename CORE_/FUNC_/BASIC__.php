<?php defined('PHP_BOOTSTRAP') OR handle_this();
 
 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: THE BASIC FUNCTION
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */

   define('FUNC_BASIC',TRUE);
   
    /* Here we define FUNC_BASIC with the aim of :
	  - As a key inter- class base class with the main function of this application
	  - Preventing recurrent class calling on other pages so easy to check bugs .
	  - There is no other purpose , but the best
    */
   
    /* 
	
	Mandatory Calling all the settings that have been defined for the application
	   
	   * For security reasons , perhaps we need to change this configuration ( With hati2 ) ,
	     Or should not be touched if not understand what it carefully
	*/
	
	if( defined('D_SET') && file_exists($DSet = D_SET.'APP_SETTING_.php' ) ) include_once($DSet);
	
	else handle_this('SETTING\'s File Not FOUND','This App Need The File\'s Setting');

   /* 
      •___  Load CLASS  ___•
	  
	 - In the next version, class below we will use for development
     - And let them remain structured though looks messy 
	 
   */
   
   /* Check Before GO ! */
    
	if( !defined('D_CLASS') || !defined('D_LIB') ) handle_this('Class Or Lib Not Defined','Define It On APP_SETTING\'s File');
 
   /* Include the rooter class */
 
   include_once D_CLASS.'ROOTER_.php';
   
   /* Include The Session class */
  
   include_once D_CLASS.'SESSION_.php';
  
   /* Start The Session
   
     - Set ( $ variable , $ value ) to set up a session .
	 - Is_set ( $ variable ) to take a session , will generate ' false ' if it is not set or empty .
	 
   */

   $S_E_S_I = new APP_Session;
  

 /* •__________ THE BASIC FUNCTION __________• */
  
  
  function url($page=false){
     return $url = ( ($page) ? APP_URL.$page : '#');
  }

    //For handling the error
  function handle_this($about='ERROR',$solution=''){
  
	 $ceklib = ( ( defined('D_CLASS') ) ? ( (file_exists($dC = D_CLASS.'HELPME_.php')) ? $dC : false ) : ( ( defined('D_CORE') ) ? ( file_exists($c0 = D_CORE.'CLASS_'.DS.'HELPME_.php') ? $c0 : false ) : false ) );
	 
	 if( $ceklib ){
	  require $ceklib;
	  $HELP = new APP_helpme($about,$solution);
      $HELP->print_error(); exit;
	 }
	 
	 else { exit($about.' #'.$solution); }
  }
  
  
  //Spaces that will add a lot of space, and we clean it so that the output be clean.
  
  function html_min($valll){
	$output = preg_replace('/\s+/', ' ',$valll);
    return $output;
  }
  
  // Use template
  function set_php_bootstrap(){
  
       $ROOTERS = new APP_Rooter;
	   
	   // You can use this for get uri on your controller
	   define( 'ONE',$ROOTERS->req(1) );
       define( 'TWO',$ROOTERS->req(2) );
       define( 'THREE',$ROOTERS->req(3) ); 
       define( 'FOUR',$ROOTERS->req(4) ); 
       define( 'FIVE',$ROOTERS->req(5) );
	   
	   $GET_CONTENT = FALSE;
	   
	   // Handle the Lang or Layout Switch (if USE_SWITCH_FUNCTION has Set on Setting file) 
	   if( defined('USE_SWITCH_FUNCTION') ) switch_app();
	   
       // Load The Bootstrap component's Class (if BOOTSTRAP_COMPONENT has Set on Seeting file) 
	   if (defined('BOOTSTRAP_COMPONENT')) include_once(D_CLASS.'BOOTSTRAP_COMPONENTS.php');
	   
	   // ' THIS_THEME ' is the key function is the function with the theme
	   if( defined('APP_THEMA') ) {
	     define('THIS_THEME',D_THEME.APP_THEMA.DS);
	     //load the theme's function are exists
	     if( file_exists($ThEFunc=THIS_THEME.'function_.php') ) require_once($ThEFunc);
	   }
	 
	 // Get Current Controller if exists
	 if ( $D_controller = $ROOTERS->get_controller() ) require_once($D_controller); 
	 
	 // next, if you wont to load a content must set $GET_CONTENT = TRUE; on your controller
	 
	 // But if Current Controller don't exist, now get only the content
	 else $GET_CONTENT = TRUE;

     //Get the Content If $GET_CONTENT = TRUE;
	 if( $GET_CONTENT && $cOntent_fIle = $ROOTERS->get_content() ) include_once($cOntent_fIle);
	 
  }
  
    /* 
	   [ Translator function ]
	    - This function will return if the process 'APP_LANG' has not been defined in APP SETTING
		- First , call $S_E_S_I language if it has been set then insert related files (if any) ,
		- If the file is not found lang will return $ text , and or translate if value 
		  $LANG_ associated ($text) are found in the file lang proficiency level.
	*/
	
  function lang_($text){
  
     //Check the Setting if defined?
     if( defined('APP_LANG') ){
	      // Current Lang Session
         Global $S_E_S_I; 
		 $lang = $S_E_S_I->lang;
		 
		  // Get Lang File's if Exists?
	     if( file_exists($dict = D_LANG.$lang.'.php') ){ include $dict;
		 
			   // Translate The Text
	          if( isset($LANG_[$text] ) ){ return $LANG_[$text];}
			  
			  // or return text
			  else { return $text; }
	     }
		 // or return text
		 else { return $text; }
	 }
	 
	 //or return text
	 else { return $text; }
  }
  
   /* 
      Data or Input Filter and Cleaner
	  First, Set the regex on [data_filter] class
		
	  $v_type : 
	    - isvalid : Return @data when True and return False if don't valid
		- clean : Replace data with current rules and return it
	  $data : A string or Array
   */
   
  function data_filter($v_type=false,$data=0){
  
     if($v_type){
	 
	     if( file_exists($class_VaL=D_CLASS.'VALIDATION_.php') ) { 
		 
		     require_once($class_VaL);
			 return $value = new APP_VALIDATION($v_type,$data);
		 
		 }
		 
		 else{ handle_this('CLASS_NOT_FOUND','Please Define The Class (VALIDATION)'); }
 
	 } else { return false; }
	 
  }
  
  
  /* 
      Default Function for handle if request Switch Lang Or Swith layout
	   - USE_SWITCH_FUNCTION Can Set on Setting file, to using it
	   - Can handle if ['REQUEST_METHOD'] = POST
	   
	  Where Condition : ENABLED_LAYOUT_SWITCH or ENABLED_LANG_SWITCH on Setting's File
	  
  */
   
  function switch_app(){
  
     if($_SERVER['REQUEST_METHOD']=='POST'){
		 global $S_E_S_I;
         if( isset($_POST['device']) && defined('ENABLED_LAYOUT_SWITCH') ) $S_E_S_I->set_device($_POST['device']);
		 else{if( isset($_POST['lang']) && defined('ENABLED_LANG_SWITCH') ) $S_E_S_I->set_lang($_POST['lang']); }	 
	 }
  }