<?php if( !defined('HARAZAKIDA') || !defined('BOOTSTRAP_COMPONENT') ) exit;

  /*  
     OPEN SOURCE PROJECTS © HARAZAKI 2014
	 [THE PHP BOOTSTRAP_COMPONENT CLASSES](https://github.com/Harazaki/PHP-BOOTSTRAP/blob/master/CORE_/CLASS_/BOOTSTRAP_COMPONENTS.php)
	  - Learn more about at http://getbootstrap.com/components/
	  - Notes : It's still just a skeleton , let's continue the development of the future,
	  - You can contribut at https://github.com/Harazaki/PHP-BOOTSTRAP
  */  
  
  
  Class BOOTSTRAP_COMPONENT {
  

	  /*  * [ DROPDOWN  MENU ] *
	  
	      - $data must be an array, 
		    *empty the value to add divider
		  - $class & $id is additional, can be empty
		  
	  */
	  
	  function dropdown_menu($data='',$class=null,$id=null){
	  
	      $dropdown = '<ul class="dropdown-menu'.( ($class) ? ' '.$class : null ).'"'.( ($id) ? ' id="'.$id.'"' : null ).' role="menu"">';
		  
	      if($data) { 
		   
			  if ( is_array($data) ) {
			     foreach ( $data as $menux => $url ) {
				     if ( is_array($url) ) {
					     $dropdown .= '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">'.$menux.'<span class="caret"></span></a><ul class="dropdown-menu" role="menu">';
						 
                          foreach($url as $value => $url ){
						      $dropdown .= ( ($value) ? '<li><a href="'.$url.'">'.$value.'</a></li>' : '<li class="divider"></li>');
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
	  
	  
	  /* Select Dropdown */
	  
	  function select_dropdown($selectname='',$options,$current) {
         $select = '<select name="'.$selectname.'">';	  
	     foreach ($options as $option) {
		     if( $option === $current ) {$select .= '<option value="'.$option.'" selected="selected">'.$option.'</option>';}
		     else {$select .= '<option value="'.$option.'">'.$option.'</option>';}
	     }	 
		 $select .= '</select>';
	     return $select;
	  }
	  
	  /* ____ ....  ____ 
	  
	    ETC.. Sofar
		
	  function function_name($data,$class=null,$id=null) {
		 return $xx;
	  }
	  
	  */
	  
	  
	  function bootstrap_css($add_custom=false){
	    if( !defined('STATIC_LIB') ) handle_this('Requitments','Plese define the STATIC_LIB on your Setting"s File.');
		$CSS = Array(STATIC_LIB.'bootstrap/css/bootstrap.min.css'); $sty = '';
		if(is_array($add_custom)) { foreach ($add_custom as $cus) { $CSS[] = $cus; } } else { if($add_custom) $CSS[] = $add_custom; }
		 foreach ($CSS as $css){  $sty .= '<link href="'.$css.'" rel="stylesheet"/>'; }
		return $sty;
	  }
	  
	  function bootstrap_js($add_custom=false){
	    if( !defined('STATIC_LIB') ) handle_this('Requitments','Plese define the STATIC_LIB on your Setting"s File.');
		$JS = Array(STATIC_LIB.'jquery/jquery.min.js',STATIC_LIB.'bootstrap/js/bootstrap.min.js'); $script = '';
		if(is_array($add_custom)) { foreach ($add_custom as $src) { $JS[] = $src; } } else { if($add_custom) $JS[] = $add_custom; }
		 foreach ($JS as $js){  $script .= '<script src="'.$js.'"></script>'; }
		return $script;
	  }
  
  }
