Emijo Starter Theme 
=================

This is a clean WordPress starter theme based on the Emi starter theme.  A solid starting point when thinking about structure, SEO and other functionality.

Features
------------
* @media queries via [Breakpoint](http://breakpoint-sass.com/) - Right in your _mixins.scss file. 
* Host of other [mixins](https://gist.github.com/jomurgel/a457e491a475e71a4ac3) like collumns, retina images, rotation and more.
* Simple URL redirect template from [Dave Stewart](http://www.davestewart.co.uk).
* Added [Schema](http://www.schema.org) support.
* Added Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
* Icon, Google Fonts and Typekit enqueue support.

Set Up
------------
Find and replace the following strings, keeping the same general format as shown:

`themeName` > `Theme Name`

`themeHandle` > `Theme_Name`

`themeFunction` > `theme_name`

`themeTextDomain` > `theme-name`

There is also an option to do this automatically by running `gulp generate`. This will ask a few questions about the theme and update all the required files.

There are additional variables in `scss/styles.scss` you'll want to update one at a time, and a few in `footer.php` as well.

Workflow
------------
Install [Gulp](http://gulpjs.com/) to automate the following tasks:

From terminal
```
$ cd themefolderlocation

$ npm install
```
Or if that doesn't work, try a manual install of gulp and all the required plugins

```
$ npm install gulp

$ npm install gulp-sass gulp-autoprefixer gulp-minify-css gulp-sourcemaps gulp-livereload gulp-replace gulp-prompt
```
If errors occur, try `sudo` before `npm`.

This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS
* [LiveReload](http://livereload.com/) `$ npm gulp watch`
* Gulp Sourcemaps

Changelog
------------
2.3 A great feature (gulp-replace) added by [lachieh](https://github.com/lachieh) for replacing strings such as ThemeName, etc. using gulp-generate. Thanks!

2.2.1 Gulpfile.js adds gulp-sourcemaps, updated package.json license.

2.2 Updated screenshot.png and added Apple Icon, Favicon and Windows Icon Support

2.1 Added pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin

2.0 Added Schema, Google Fonts/Typekit support 

1.1 General cleanup and tidying  

1.0 Initial public release
