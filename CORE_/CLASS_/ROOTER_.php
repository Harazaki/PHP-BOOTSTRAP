<?php if( !defined('HARAZAKIDA') || !defined('FUNC_BASIC') ) exit;

  /* 
       * OPEN SOURCE PROJECTS © HARAZAKI 2014 
	     * THE PHP BOOTSTRAP ROOT CLASSES
	       - Learn more about at https://github.com/Harazaki/PHP-BOOTSTRAP
  */  

class APP_Rooter {

 private $path;
 private $get_controller=false;
 private $get_content=false;
 
 function __construct(){
 
  $this->path = $_SERVER['REQUEST_URI'];
  
     define( 'REQ_1',$this->req(1) );
     define( 'REQ_2',$this->req(2) );
     define( 'REQ_3',$this->req(3) ); 
     define( 'REQ_4',$this->req(4) ); 
     define( 'REQ_5',$this->req(5) );
	 
  $this->get_controller = ( ( defined('USE_CONTROLLER') && $this->current_controller() ) ? $this->current_controller() : false );
  $this->get_content = ( ($this->current_content()) ? $this->current_content() : false );
  
 }

 public function req($req) {
 
     $url_x = explode('/',$this->path);
  
     if(isset($url_x[$req])){
	   $rout = preg_replace( ( defined('FILE_REQUEST') ? FILE_REQUEST : '/[^a-zA-Z0-9_-]/'), '', $url_x[$req]);
     }
	 else{return false;}
 }
	
 public function get_controller(){ return $this->get_controller; }
 
 public function get_content(){ return $this->get_content; }
 
 private function current_controller(){
	 
	 if( !defined('D_CONTROL') ) handle_this('Controller Requitments','Please define D_CONTROL on your setting\'s file');
	 
	 if( REQ_1 && REQ_2 && REQ_3 && REQ_4 && REQ_5 ){
	 
	     if( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.DS.REQ_5.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTROL.'index.php' ) ) return $CON;
	 }
	 
	 if(REQ_1 && REQ_2 && REQ_3 && REQ_4 && !REQ_5){
	 
		 if( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTROL.'index.php' ) ) return $CON; 
	 
	 }
	 
	 elseif(REQ_1 && REQ_2 && REQ_3 && !REQ_4){ 
	 
		 if( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTROL.'index.php' ) ) return $CON;
	 
	 }
	 
	 elseif(REQ_1 && REQ_2 && !REQ_3){
	 
	     if( file_exists($CON = D_CONTROL.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTROL.'index.php' ) ) return $CON;
	 
	 }
	 
	 else {
	     if( REQ_1 && file_exists($CON = D_CONTROL.REQ_1.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTROL.'index.php' ) ) return $CON;
		 else return false;
	 }
  
  
  }
  
  private function current_content(){
	 
	 if(REQ_5){
	 
	     if( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.DS.REQ_5.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTENT.'index.php' ) ) return $CON;
	 }
	 
	 if(REQ_4 && !REQ_5){
	 
		 if( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.DS.REQ_4.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTENT.'index.php' ) ) return $CON; 
	 
	 }
	 
	 elseif(REQ_3 && !REQ_4){ 
	 
		 if( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.DS.REQ_3.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTENT.'index.php' ) ) return $CON;
	 
	 }
	 
	 elseif(REQ_2 && !REQ_3){
	 
	     if( file_exists($CON = D_CONTENT.REQ_1.DS.REQ_2.'.php' ) ) return $CON;
		 elseif( file_exists($CON = D_CONTENT.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTENT.'index.php' ) ) return $CON;
	 
	 }
	 
	 else{
	     if( file_exists($CON = D_CONTENT.REQ_1.'.php' ) ) return $CON;
		 else if( file_exists($CON = D_CONTENT.'index.php' ) ) return $CON;
	 }
  
  
  }
 
 

}