Emijo Starter Theme 
=================

This is a clean WordPress starter theme based on the Emi starter theme.  A solid starting point when thinking about structure, SEO and other functionality.


Set Up
------------
Find and replace the following strings, keeping the same general format as shown:

`themeName` > `Theme Name`

`themeHandle` > `Theme_Name`

`themeFunction` > `theme_name`

`themeTextDomain` > `theme-name`

There are additional variables in `scss/styles.scss` you'll want to update one at a time, and a few in `footer.php` as well.

If you want to get even more automated, there's also a Yeoman generator that configures Emijo for you: https://github.com/jomurgel/yo-emi


Workflow
------------
Install [Gulp](http://gulpjs.com/) to automate the following tasks:

From terminal
```
$ cd themefolderlocation

$ npm install gulp

$ npm install gulp-autoprefixer gulp-ruby-sass gulp-minify-css gulp-livereload
```
If errors occur, try `sudo` before `npm`.

This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS
* [LiveReload](http://livereload.com/)

Changelog
------------
2.2 Updated screenshot.png and added Apple Icon, Favicon and Windows Icon Support
2.1 Added pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
2.0 Added Schema, Google Fonts/Typekit support 
1.1 General cleanup and tidying  
1.0 Initial public release