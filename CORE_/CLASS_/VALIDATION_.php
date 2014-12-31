<?php ( defined('PHP_BOOTSTRAP') && defined('FUNC_BASIC') ) OR handle_this();

  /* 
     * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	   A VALIDATION CLASSES TO CLEAN AND VALIDITY
	   - Learn more about at https://github.com/Harazaki/PHP-BOOTSTRAP
	   - Note: It's still just a skeleton , therefore let's together to continue the development . This time we will try to make the fundamental basis only. Thanks for the support everyone.
	 *
  */
  
  class APP_VALIDATION {
  
      public $isvalid=false;
	  public $isclean=null;
	  
	  function __construct($v_type=false,$data=null){
	  
	     if($v_type){
	 
	         if( file_exists($set_VaL=D_SET.'VALIDATOR_SETTING.php') ) {include($set_VaL);}
		     else{handle_this('Validator Setting\'s File Not Found','Please Define Setting\'s File On D_SET');}
		  
	         if($v_type=='isvalid') { // Next Task 
			 
			 }
			 
			 elseif($v_type=='clean'){ // Next Task 
			 
			 }
			 
			 else { return false; }
			 
		 } else { handle_this('Validator Missing','Please Define v_type'); }
	  
	  }
	  
	  private function is_valid($data){
	    // The Next Task
	  }
	  
	  private function clean_this($data){
	    // The Next Task
	  }
  
  }