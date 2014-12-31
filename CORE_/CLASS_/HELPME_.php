<?php defined('PHP_BOOTSTRAP') OR exit('THIS APLICATION HAS CRASH');

  /* 
     * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	   A HELPER CLASSES TO HANDLE BAD PROSESS
	   - Learn more about at https://github.com/Harazaki/PHP-BOOTSTRAP
	   - Note: It's still just a skeleton , therefore let's together to continue the development . This time we will try to make the fundamental basis only. Thanks for the support everyone .
	 *
  */
  
  class APP_helpme{
     
	 public $title;
	 public $description;
	 public $result;
	 
	 function __construct($E_type=null,$E_solution=false){
	      
		  if($E_type) $this->title = $E_type;
		  else $this->title = 'Error';
		  if($E_solution) $this->description = $E_solution;
		  else $this->title = 'Error Undefined!';
	 
	 }
	 
	 
	 function print_error(){

         $result = '<html><head><title>'.$this->title.'</title></head><body><div align="center">';
		 $result .= '<h2>'.$this->title.'</h2><div class="description">'.$this->description.'</div>';
		 $result .= '</div></body></html>';
	     exit($result);
		 
	 }
  
  
  
  }