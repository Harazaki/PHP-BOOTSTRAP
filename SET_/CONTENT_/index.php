<?php if(!defined('HARAZAKIDA')) exit; 

// Current's File generate by simple CODEX :
  
 $mycontent = new PHP_BOOTSTRAP;
 $mycontent->title = 'Hello Word! ';
 $content = '<div class="container"><h1 class="heading">Hello Word, <small>Welcome To My Home!</small></h1><hr/><p>How to build a pages on a simple way? Like This: </p><pre>'.highlight_file(D_CONTENT.'index.php',TRUE).'</pre></div>';
 echo($mycontent->display($content));