<?php if( !defined('HARAZAKIDA') || !defined('BOOTSTRAP_COMPONENT') ) exit;

  /* 
       OPEN SOURCE PROJECTS © HARAZAKI 2014 
	     THE PHP BOOTSTRAP_COMPONENT CLASSES
	    - Learn more about at http://getbootstrap.com/components/

  */  
  
  Class BOOTSTRAP_COMPONENT {
  
      function __construct(){	    
	  
	  }
	  
	  
	  /*  * [ DROPDOWN  MENU ] *
	  
	      - $data must be an array, 
		    *empty the value to add divider
		  - $class & $id is additional, can be empty
		  
	  */
	  
	  function dropdown_menu($data='',$class=null,$id=null){
	  
	      $dropdown = '<ul class="dropdown-menu'.( ($class) ? ' '.$class : null ).'"'.( ($id) ? ' id="'.$id.'"' : null ).' rolej="menu"">';
		  
	      if($data) { 
		   
			  if ( is_array($data) ) {
			     foreach ( $data as $menux => $url ) {
				     if ( is_array($url) ) {
					     $dropdown .= '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">'.$menux.'<span class="caret"></span></a><ul class="dropdown-menu" role="menu">';
						 
                          foreach($url as $value => $url ){
						      $dropdown .= ( !empty($value) ? '<li><a href="'.$url.'">'.$value.'</a></li>' : '<li class="divider"></li>');
		                  }
						  
		                 $dropdown .= '</ul></li>';
		   
                     } else {$dropdown .= '<li><a href="'.$url.'">'.$menux.'</a></li>';}	 
				 }
			  }			  
			  else{$dropdown .= $data;}	
			  
		  $dropdown .= '</ul>';
		  
		  }

	     return $dropdown;
	  }
	   
	  
	  /*  * [ BUTTON GROUPS ] *
	  
	      - $data must be an array, 
		    *free atribut is aditional, example :
			 $data = array( 'button1' => 'id="some" class="btn btn-default"', 'button2' => '', );
		  - $class & $id is additional, can be empty
		  
	  */
	  
	  
	  
	  function button_groups($data='',$class=null,$id=null) {
		 
	     $button_groups = '<div class="btn-group'.( ($class) ? ' '.$class : null).'" '.( ($id) ? ' id="'.$id.'"' : null).' role="group">';
		 
		    if(is_array($data)) { foreach ( $data as $buttontext => $attr ){
			  $button_groups .= '<button'.(($attr) ? ' '.$attr : null ).'>'.$buttontext.'</button>';
			  }
			}
			else { if(!empty($data)) $button_groups .= $data; }
			
		 $button_groups .= '</div>';
		 return $button_groups;
	  }
	  
	  /* ____ ....  ____ 
	  
	    ETC.. Sofar
		
	  function function_name($data,$class=null,$id=null) {
	     $navbar = '';		    
		 $navbar .= '</ul></div></div></nav>';
		 return $navbar;
	  }
	  
	  */
  
  
  
  
  }
