<?php if( !defined('HARAZAKIDA') || !defined('FUNC_BASIC') ) exit;

 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	     @ PHP BOOOTSRAP PACKAGES [SESSION PHP CLASS](https://github.com/septyaman/SIMPLE_PHP_SESSION_CLASS)
	   * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
 
 class APP_Session {
 
     public $device;
	 public $lang;

	function __construct() {
		session_start();
		$this->set_device();
		$this->set_lang();
	}
	
	 /*   
	      * USER AGENT DETECTION
	 */
	
	function set_device(){ 
     if( $P = $this->is_set('DEVICE') ) { $device = $P; }
	 else { 
	     require_once D_CLASS.'MOBILE_DETECT.php';
		 $detect = new Mobile_Detect;
		 $isMobile = $detect->isMobile();
		 $isTablet = $detect->isTablet();
		 $this->set('DEVICE', $device = ($isMobile ? ($isTablet ? 'TABLET' : 'MOBILE') : 'DESKTOP'));
	 }
	  $this->device = $device;
	}
	
	function set_lang($switch=false){ 
	
	 //if request to switch lang	  
	 if($switch) { 
	     if( defined('APP_LANG') ){
		    if( in_array($switch,$DICT=explode(',',APP_LANG)) ) { $this->set('LANG',$lang=$switch);}
		    else { $this->set('LANG', $lang = ( defined('APP_LANG_DEFAULT') ? APP_LANG_DEFAULT : '' )); }	 
		 }
		 else { $this->set('LANG', $lang = ( defined('APP_LANG_DEFAULT') ? APP_LANG_DEFAULT : '' )); }
	 }	 
	       //else, cek if exist or set now  
	 else{
           if( $X = $this->is_set('LANG') ) { $lang = $X; }
	       else { $this->set('LANG', $lang = ( defined('APP_LANG_DEFAULT') ? APP_LANG_DEFAULT : '' ));}
	 }
	 
	 return $this->lang = $lang;
	 
	}
	 
	 // Check the session if exist and !empty
	 // Return value if exist, or return false
	 
	function is_set($variabel_cek) {
	    if(isset($_SESSION[$variabel_cek]) && !empty($_SESSION[$variabel_cek])){return $_SESSION[$variabel_cek];}
		else {return false;}
	}
	
	 // Set The session value
	 
	function set($variable, $value) {
		$_SESSION[$variable] = $value;
	}
}
