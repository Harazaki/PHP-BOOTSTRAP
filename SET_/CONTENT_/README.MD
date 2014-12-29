# PHP BOOTSTRAP [Content Directory]

Is the main directory of the public file for this application . By default this folder called static ,but you can change the settings file.

  - Let all the files open to the public to be here
  - And do not put the file system in this directory environment

If you are using a CDN , you may need to move this file to configure it , but first , a look at the settings file named " STATIC_CDN ". But while maintaining a directory named D_STATIC , as will preparation of failure on the CDN.

###### Url are stored web public assets, example:
  
 define('STATIC_URL', APP_URL.'/STATIC/');
 define('STATIC_CDN', http://urlcdn/mycdnpatch);