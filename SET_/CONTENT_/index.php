<?php defined('PHP_BOOTSTRAP') OR handle_this('DIRECTORY_BROWSING');

 // Current's Page generate by simple CODEX, Like This :
  
 $mycontent = new PHP_BOOTSTRAP;
 $mycontent->title = 'Hello Word!';
 
 $content = '<div class="container"><h1 class="heading">Hello Word, <small>Welcome To My '.APP_NAME.'</small></h1><hr/><p>How to build a pages on a simple way? Like This:</p><pre>'.highlight_file(D_CONTENT.'index.php',TRUE).'</pre></div>';
 
 echo($mycontent->display($content));