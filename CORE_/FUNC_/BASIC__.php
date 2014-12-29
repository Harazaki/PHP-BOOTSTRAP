<?php if(!defined('HARAZAKIDA')) handle_this('DIRECTORY_BROWSING','BASIC');
 
 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: THE BASIC FUNCTION
	 * Source https://github.com/Harazaki/PHP-BOOTSTRAP
	 
 */
	
   define('FUNC_BASIC',TRUE);
   
    /* // TOLONG TERJEMAHKAN INI SEBAIK MUNGKIN // ¬
	
	   Disini kita mendefenisikan FUNC_BASIC dengan tujuan :
	   - Sebagai kunci antar class class dasar aplikasi dengan fungsi utama ini
	   - Mencegah pemanggilan class berulang di halaman lain sehingga mudah memeriksa bugs.
	   - Tidak ada tujuan lain, selain yang terbaik :V
    */
   
    /* Wajib Memanggil semua pengaturan yang telah didefinisikan untuk aplikasi
	   * Demi keamanan, mungkin kita perlu merubah konfigurasi ini (Dengan hati2),
	     Atau jangan disentuh bila tidak mengerti apa itu hati-hati
	*/
	
	if( defined('D_SET') && file_exists($DSet = D_SET.'APP_SETTING_.php' ) ) include_once($DSet);
	else handle_this('SETTING\'s File Not FOUND','This App Need The File\'s Setting');
 
 
   /* 
      •___  Load CLASS  ___•
	 - Pada versi berikutnya class2 dibawah akan kita gunakan untuk pengembangan
     - Dan biarkan mereka tetap terstruktur meskipun kelihatan berantakan.
	 
   */
   
   /* Check Before GO ! */
    
	if( !defined('D_CLASS') || !defined('D_LIB') ) handle_this('Class Or Lib Not Defined','Define It On APP_SETTING\'s File');
 
   /* Include the rooter class */
 
   include_once D_CLASS.'ROOTER_.php';
   
   /* Include The Session class */
  
   include_once D_CLASS.'SESSION_.php';
  
   /* Start The Session
     - set($variable, $value) untuk mengatur sebuah sesi
	 - is_set($variabel) untuk mengambil sebuah sesi, akan menghasilkan 'false' jika
	   Belum diatur atau kosong.
   */

   $S_E_S_I = new APP_Session;
  

 /* •__________ THE BASIC FUNCTION __________• */
  
  
  function url($page=0){
     if($page) { $url = APP_URL.'/'.$page; }
	 else { $url = '#'; }
	 return $url;
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
		
	  $filter_type : 
	    - isvalid : Return @data when True and return False if don't valid
		- clean : Replace data with current rules and return it
	  
   */
   
  function data_filter($v_type=false,$data=0){
  
     if($v_type && $data){
	 
         require(D_SET.VALIDATOR_SETTING.'.php');
	 
	 }
	 
     else { handle_this('Validator Missing','Please Define v_type and data'); }
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