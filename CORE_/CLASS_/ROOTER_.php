<?php if( !defined('HARAZAKIDA') || !defined('FUNC_BASIC') ) exit;

  /* 
       * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	     * THE PHP BOOTSTRAP ROOT CLASSES
	     - Learn more about at https://github.com/Harazaki/PHP-BOOTSTRAP
  */  

class APP_Rooter {

 public $path;
 
 function __construct(){
  $this->path = $_SERVER['REQUEST_URI'];
 }

 public function req($req) {
  $url_x = explode('/',$this->path);
    if(isset($url_x[$req]))
	{
	 $rout = preg_replace('/[^a-zA-Z0-9_-]/', '', $url_x[$req]);
	 if(!empty($rout)){return $rout;} else {return false;}      
    }
	else{return false;}
 }

}

 $REQ_ = new APP_Rooter;
 define( 'REQ_1',$REQ_->req(1) );
 define( 'REQ_2',$REQ_->req(2) );
 define( 'REQ_3',$REQ_->req(3) );
 define( 'REQ_4',$REQ_->req(4) );
 define( 'REQ_5',$REQ_->req(5) );
