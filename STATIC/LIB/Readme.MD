# PHP BOOTSTRAP [Static Library] at [Static Directory]

Is the main directory of the public libary for this application . By default this folder called static, but you can change the settings file.

library file will be used default by any template , so we put them separately in order to be used by all the themes that need

If you are using a CDN , you may need to move this file to configure it , but first , a look at the settings file named " STATIC_CDN ". But while maintaining a directory named D_STATIC , as will preparation of failure on the CDN.

Custom example: define('STATIC_LIB', APP_URL.'/STATIC/CUSTOM_LIB/');