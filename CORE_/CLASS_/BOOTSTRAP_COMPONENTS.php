<?php ( defined('PHP_BOOTSTRAP') && defined('BOOTSTRAP_COMPONENT') ) OR handle_this();

  /*  
     OPEN SOURCE PROJECTS © HARAZAKI 2014
	 [THE PHP BOOTSTRAP_COMPONENT CLASSES](https://github.com/Harazaki/PHP-BOOTSTRAP/blob/master/CORE_/CLASS_/BOOTSTRAP_COMPONENTS.php)
	  - Learn more about at http://getbootstrap.com/components/
	  - Notes : It's still just a skeleton , let's continue the development of the future,
	  - You can contribut at https://github.com/Harazaki/PHP-BOOTSTRAP
  */  

  
  class BOOTSTRAP_COMPONENT {
  
       public $layout = 'DESKTOP';
	   public $lang = '';
	   public $style = 'default';
	   public $head = '';
	   public $css = '';
	   public $js = '';
	   public $meta_head = '';
	   public $title = '';
	   public $description = '';
	   public $keywords = '';
	   public $header = '';
	   public $meta_foot = '';
	   public $content = '';
	   public $footer = '';
  

      function __construct(){ 
	     global $S_E_S_I;
	     $this->layout = $S_E_S_I->device;
		 $this->lang = $S_E_S_I->lang; 
	  }
	  
	  function display($content='',$ouTput=TRUE) {
	     $PRINT = ( $this->head ? $this->head : $this->head() ) .( $this->header  ? $this->header : $this->header() ).
		 ((empty($this->content)) ? null : $this->content ).( $this->content($content) ). ( $this->footer ? $this->footer : $this->footer()  ).( $this->meta_foot ? $this->meta_foot : $this->meta_foot() );		 
		 if($ouTput) echo $PRINT; else return $PRINT;
	  }
	  
	  /*  * [ DROPDOWN  MENU ] *
	  
	      - $data must be an array, 
		    *empty the value to add divider
		  - $class & $id is additional, can be empty
		  
	  */
	  
	  function dropdown_menu($data='',$class=null,$id=null){
	  
	      $dropdown = '<ul class="dropdown-menu'.( ($class) ? ' '.$class : null ).'"'.( ($id) ? ' id="'.$id.'"' : null ).' role="menu">';
		  
	      if($data) { 
		   
			  if ( is_array($data) ) {
			     foreach ( $data as $menux => $url ) {
				     if ( is_array($url) ) {
					     $dropdown .= '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">'.$menux.'<span class="caret"></span></a><ul class="dropdown-menu" role="menu">';
						 
                          foreach($url as $value => $url ){
						      $dropdown .= ( (empty($value) || empty($url) ) ? '<li><a href="'.$url.'">'.$value.'</a></li>' : '<li class="divider"></li>');
		                  }
						  
		                 $dropdown .= '</ul></li>';
		   
                     } else {$dropdown .= ( !empty($value) || !empty($url) ? '<li><a href="'.$url.'">'.$menux.'</a></li>' : '<li class="divider"></li>' );}	 
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
	  
	  
	  /* ____ NAVBAR ____ 
	     $data: Content of Navbar
		 $navbarposition: http://getbootstrap.com/components/#navbar-component-alignment,
	      ex: navbar-fixed-top, navbar-fixed-bottom, navbar-static-top
		 $navbarstyle : ex:navbar-inverse
	  */
	  
	  function navbar($data='',$navbarposition='',$navbarstyle='navbar-default'){
	     $NAVBAR = '<nav class="navbar '.$navbarstyle.( ($navbarposition) ? ' '.$navbarposition : null ).'" role="navigation"><div class="container">';
		 $NAVBAR .= $data.'</div></nav>';
	     return $NAVBAR;
	  }
	  
	   /* navbar style  */

	  function navbar_fixed_top($navbrand='',$menu='') {
		 $navbar = '';		    
		   if($menu) { $navbarcontent = '';  //$menu must be an array		   
			  if ( is_array($menu) ) {
			     foreach ( $menu as $menux => $url ) {
					if ( is_array($url) ) {
					     $navbarcontent .= '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$menux.'<span class="caret"></span></a>';
						 $navbarcontent .= $this->dropdown_menu($url);
						 $navbarcontent .= '</li>';
                     } else {$navbarcontent .= '<li><a href="'.$url.'">'.$menux.'</a></li>';}					
				 }
			  }else{$navbarcontent .= $menu;}		   
		   }else { $navbarcontent = ''; }
		   
		 $navbar .= $this->navbar_header($navbrand).$this->navbar_collapse($navbarcontent);
		 return $this->navbar($navbar,'navbar-fixed-top');
	  }
	  
	  function navbar_header($navbrand=''){
	     $navbar_header = '<div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="'.APP_URL.'">'.($navbrand ? $navbrand : APP_NAME ).'</a></div>';
		 return $navbar_header;
	  }
	  
	  function navbar_collapse($content=''){
	     $navbar_collapse = '<div id="navbar" class="collapse navbar-collapse"><ul class="nav navbar-nav">';
		 $navbar_collapse .= $content;
		 $navbar_collapse .= '</ul></div>';
	     return $navbar_collapse;
	  }

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
	  
	  function device_dropdown($type='autosubmit'){ 
	      $list = ( defined('APP_LAYOUT') ? explode(',',APP_LAYOUT) : NULL );
		  if($list) { return '<form method="POST" class="col-sm-6">'.$this->select_dropdown('device',$list,$this->layout,'switch-device',$type).'</form>'; }
	  }
	  
	  function lang_dropdown($type='autosubmit'){ 
	      $list = ( defined('APP_LANG') ? explode(',',APP_LANG) : NULL );
		  if($list) { return '<form method="POST" class="col-sm-6">'.$this->select_dropdown('lang',$list,$this->lang,'switch-lang',$type).'</form>'; }
	  }
	  
	  function custom_css($src=''){
	     $CSS = '';
	     if( $src ){		 
		     if(is_array($src)) foreach ( $src  as $css ) { $CSS .= '<link href="'.$css.'" rel="stylesheet"/>';} 
			 else $CSS .= '<link href="'.$src.'" rel="stylesheet"/>';
		 }  if($CSS) return $this->css = $CSS;
	  }
	  
	  function custom_js($src=''){
	     $JS = '';
	     if( $src ){		 
		     if(is_array($src)) foreach ( $src  as $js ) { $JS .= '<script src="'.$js.'"></script>'; } 
			 else $JS .= '<script src="'.$src.'"></script>';
		 }  if($JS ) return $this->js = $JS; else $this->js = false;
	  }
	  
	  /* Select Dropdown */
	  
	  function select_dropdown($selectname='',$options,$current,$id=null,$class=null) {
         $select = '<select name="'.$selectname.'"'.(($id) ? ' id="'.$id.'"' : null).(($class) ? ' class="'.$class.'"' : null).'>';	  
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
  
  }