<?php if( !defined('HARAZAKIDA') || !defined('THIS_THEME') ) exit;

 /* 
     * OPEN SORCE PROJECTS © HARAZAKI 2014 
	   @ PHP BOOOTSRAP PACKAGES
	   About: This is a Example's data only
	 *
	 
 */
 
 $MENU_PRIMARY = array(
  lang_('Get Started') => url('docs/get_started'),
  lang_('Overview') => url('docs/overview'),
  lang_('Docs') => url('docs'),
  lang_('Example') => array(
                   lang_('Hello Word') => url('docs/example/hello_word'),
				   lang_('Another Page') => url('docs/example/another_page'),
				   lang_('Custom Pages') => url('docs/example/custom_page'),
				   '' => '#',  // Return a Divider, If value is empty
				   lang_('Mobile Layout') => url('docs/example/mobile'),
				   lang_('Tablet Layout') => url('docs/example/tablet'),
				   lang_('Desktop Layout') => url('docs/example/desktop'),
				   ' ' => '#',  // Return a Divider, If value is empty
				   lang_('Another Languange') => url('docs/example/custom_lang'),
				   
				   //'Name Of menu' => 'Url of this menu',
				   ),
				   
  'Download' => 'https://github.com/Harazaki/PHP-BOOTSTRAP',
  'Fork On Github' => 'https://github.com/Harazaki/PHP-BOOTSTRAP/fork',
  //'Name Of menu' => 'Url of this menu',
  
 );