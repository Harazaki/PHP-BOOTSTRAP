# [PHP Bootstrap](https://github.com/Harazaki/PHP-BOOTSTRAP#)
Awesome ... Let's start something simple, yet magical and extraordinary. That answers all the needs of the power of programming languages and creativity of the beauty of a scintillating century popular designs today.

The main reason we believe the " elephant " as the basic building php is because he is strong and that our knowledge. You can know more about The Elephant is, how he works for you in their house that is [PHP.NET](http://php.net/).

On the other hand, Bootstrap is a contemporary design platform, which is preferred because it has a design that is very sexy. He was able to beradapdasi in various shapes and sizes of the screen. Visit [ Getboostrap.com ](http://getbootstrap.com/) to get more information and let you fall in love at first sight.

Here we do not plan to make a Content Management System, but was trying to make the frame of the house which then can be an inspiration to be developed so that we can build a home based php sexy. Make bootstrap fused with our php project up and running smoothly so that we can focus more on what we're doing and save more time.

## Table of contents
- [Overview](#overview)
- [Details](#details)
- [Get Started](#get-started)
- [Documentation](#documentation)
- [Example](#example)
- [Contributing](#contributing)
- [Credits](#credits)
- [Copyright and license](#copyright-and-license)

## Overview

Php bootstrap made only to facilitate manage project-based web applications. Coupled with the (simple) and all of it to be easy to use. Freedom of creativity will allow us to create a web-based application technology php simple yet sophisticated. That ..

##### It is so light's Framework<hr/>
Slim structure makes it very light, it's all because we only use the required course.

##### Simplicity but sophisticated <hr/>
As we know that the technology simply does not determine its sophistication, here we will continue to develop features that can make it easier to create a sophisticated application. Including the integration of various libary reliable therein. By default, Soported Features like:

- Responsive Design Component & Libary powered by Bootstrap
- Mobile Detect's core, For help you create mobile app
- Session Manager
- Mailing Manager (Coming Soon)
- Supported Localication
- Filter Helper (Coming Soon)
- Simple Database Management (Coming Soon)
- Simple User's Session Management (Coming Soon)


##### It is so Sexy <hr/>
Besides neat, indeed remarkable designed built with bootstrap. Being able to adjust in a variety of user screens and this will make them beautiful and sexy.

##### It is so Secure <hr/>
Providing full customization on the application so that he was not ambiguous and that you can act on the security you want. For example, changing the structure of the application in the first page of the file with the helper to filter the data transfer will continue to be developed in the future development.

##### Easy for novice developers <hr/>
It is suitable for all people, both for experts and beginners. Structure simple application designed so as not to kink so that in time can instantly understand. And can easily create extensions, the template without the course again, Because the function is common to use php syntax. Also available libraries are possible if you want to use to help.

## Details
Currently using Bootstrap version 3.3.7

## Get Started

Before going any further, let's for a moment to learn about php bootstrap

### Requirements
PHP Bootstrap excess is not necessary specifications to make it work properly . If you have a following, it is good:
 - PHP >= 5.3
 - .htaccess with mod_rewrite

'While there may be additional required when using extension etc.'
<hr/>

### Instalation

1. Download the latest [Php Bootstrap](https://github.com/Harazaki/PHP-BOOTSTRAP/archive/master.zip), the way you like.
2. Upload it to your Web server mainstay.
3. Perform [Initial Setup](#settings-instructions)

<hr/>

### Settings Instructions 

By default, You can [find these settings](https://github.com/Harazaki/PHP-BOOTSTRAP/blob/master/SET_/APP_SETTING_.php) in the file `BASE/SET_/APP_SETTING_.php` ( If you have not changed ) .

What will be set ?
- A Cool Name For Your Application
- Directory / Patch setting's
- Your APPLICATION URL
- Current THEME's And Controller Setting's
- Languange & Device Setting's

<hr/>
##### File Structure

Look, like This...

```
PHP-BOOTSTRAP/
├── CORE/...
│   ├── CLASS_/...
│   ├── FUNC__/...
│   ├── LIB_/...
├── SET_/...
│   ├── CONTENT_/...
│   ├── CONTROLER_/...
│   ├── LANG_/...
│   ├── THEME_/...
|   └── APP_SETTING_.php
|   └── Another Set File
└── STATIC/
|   ├── LIB/...
|   ├── TEMPLATE/...
└── .htaccess
└── base_init.php
└── index.php
```

## Documentation

In the future, you can find documentation on our [PHP Bootstrap wiki page](https://github.com/Harazaki/PHP-BOOTSTRAP/wiki).

## Example

While this is an example of incomplete , will be added over time development.

##### Use Or Creating a controller

Create a file called `mycontrolllername.php` in your ` D_CONTROL ` directory. Like this:

```php
 $GET_CONTENT = my_awesome_fuction();
```
<hr/>
##### Use Or Creating a content

Create a file called `hello_word.php` in your `D_CONTENT` directory. Like this:

```php
 $page = new PHP_BOOTSTRAP;
 $page->title = 'Hello Word';
 $mycontent = '<div class="container"> <h1>Welcome to my Pages<h1> </div>';
 // if using controller, Get Data
 $mycontent .= ( ($GET_CONTENT) ? $GET_CONTENT : null );
 $page->display($mycontent));
```
<hr/>
###### Another Examples
Still Not Enough? Find More examples will soon be available on the [wiki page php bootstrap](https://github.com/Harazaki/PHP-BOOTSTRAP/wiki/Using-Example).

## Contributing

We invite friends who wish to join in this project. We would greatly appreciate any contribution from you to jointly develop in order to be useful to everyone on this planet. For those of you who would like to contribute, please [fork - edit - commit](https://github.com/Harazaki/PHP-BOOTSTRAP/fork) or [pull request](https://github.com/Harazaki/PHP-BOOTSTRAP/pulls). For bug report, please [submit issues](https://github.com/Harazaki/PHP-BOOTSTRAP/issues).

## Credits

- [Harazaki Main Heveloper](https://github.com/Harazaki/PHP-BOOTSTRAP/)
- [Twbs (twitter.inc)](https://github.com/twbs/)
- [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect)
- [And all Developers](https://github.com/Harazaki/PHP-BOOTSTRAP/graphs/contributors)

## Copyright and license

Code and Documentation of PHP-BOOTSTRAP copyright 2014-2015 PT.Harazakida. Code released under [MIT license](https://github.com/Harazaki/PHP-BOOTSTRAP/blob/master/LICENSE). Document source released under [Creative Commons](https://github.com/Harazaki/PHP-BOOTSTRAP/blob/master/docs.licence).
Code of BOOTSTRAP copyright Twitter, Inc. Code released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).
And Licence's of Open Source other woods owned on each - each related organization in it that can be found in the source.
