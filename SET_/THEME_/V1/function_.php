<?php if( !defined('HARAZAKIDA') || !defined('THIS_THEME') ) exit;

  /* 
     * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: V1 TEMPLATE FUNCTION
	     - This is a default template for,
		 - You wan to creating the new template, 
		   BY Copy this Folder and place it on THEME DIRECTORY with another names,
		    *Don't forget to Set it On Setting file
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */   
 
     // The Boostrap Component are Reqruitments
	 if( !defined('BOOTSTRAP_COMPONENT') ) handle_this('Theme Requitments','Please define BOOTSTRAP_COMPONENT on your setting\'s file');
  
  class PHP_BOOTSTRAP extends BOOTSTRAP_COMPONENT{

	  function head($head=''){
	  
	      // Open the Html, load meta and css and start the body
		 $HEAD = '<!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">'.( $this->meta_head ? $this->meta_head : NULL ).'<title>'.( $this->title ? $this->title : APP_NAME).'</title>'.$this->bootstrap_css(STATIC_THEME.'CSS/stylesheet.css').($this->css ? $this->css : null).'</head><body>';
	     return $this->head = $HEAD;
		 
	  }
	  
	   // * Closed the body and load the javascript reqruitments
	  function meta_foot($foot=''){
	  
	      // example custom script : $this->bootstrap_js($my_custom_source);
	     $meta_footer = $this->bootstrap_js(STATIC_THEME.'js/custom.js').( $this->js ? $this->js : NULL).'</body></html>';
	     return $this->meta_foot = $meta_footer;
		 
	  }
	  
	  function custom_meta_head($meta=''){
	  
	     $META = '';
	     if( $META ){		 
		     if(is_array($META)) foreach ( $META  as $meta ) { $META .= $META; } 
			 else $META .= $META;
		 }  if($META) return $this->meta_head = $META; else $this->meta_head = false;
	  }
	  
	  function header($header=''){
	     $HEADER = '<header>';
		 
		 // @includes data ( Remove it, not using posible or get from other like database)
	     include_once(D_SET.'VAR_TEMPLATE.php');
		 
	     $HEADER .= $header ? $header : $this->navbar_fixed_top('',$MENU_PRIMARY);
		 $HEADER .= '</header>';
		 return $this-> header = $HEADER;
	  }		
	  
	    // * The content of this page
	  function content($content=''){
	  
	       $CONTENT = '<section class="main">';
	      if( !empty($content) ) $CONTENT .= $content;
		  else $CONTENT .= '<div class="container">The Content Here</div>' ;
		  $CONTENT .= '</section>';
		  return $CONTENT;
		  
	  }
	  
	    // * Footer section
	  function footer($footer=''){
	  
	     $footer = '<footer class="footer"><div class="container"><div class="row"><div class="col-sm-6 text-left"><p class="text-muted">Copyright &copy; '.date('Y').'. ' .( (APP_NAME) ? APP_NAME : ( (APP_DOMAIN) ? APP_DOMAIN : 'PHP BOOTSTRAP') ). ' '.lang_('All Right reserved').'.</p></div> <div class="col-sm-6 text-right"><div id="footer-option">'.$this->device_dropdown().$this->lang_dropdown().'</div></div></div></div></footer>';
	     return $this->footer = $footer;
		 
	  }

	  // Another custom function
	  
	   
	}