# PHP BOOTSTRAP [Static Theme Files] at [Static Directory]

This is the directory where we put all the theme files are open ( not the file system of a theme ).

  - Let all the files open to the public to be here
  - And do not put the file system in this directory environment

If you are using a CDN , you may need to move this file to configure it , but first , a look at the settings file named " STATIC_CDN ". But while maintaining a directory named D_STATIC , as will preparation of failure on the CDN.

##### The static url of Current template
define('STATIC_THEME', $URL_PATCH);