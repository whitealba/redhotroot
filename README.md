Redhotroot v 2.0.0
================

Redhotroot wordpress theme based on Roots/Bootstrap

I couldn't find a Wordpress starter theme based on Bootstrap 3  until I found Roots. Redhotroot is based on Roots with various tweaks and
changes. Use it as you like.

Add Glyphicon to Menu items for navbar:
(Appearance → Menus) . You just add the <i> tag in the Navigation Label box where you put the text for each menu item. For example:
e.g.
<i class="glyphicon glyphicon-home"></i> Home
or
<span class="glyphicon glyphicon-calendar"></span>
<span class="glyphicon glyphicon-copyright-mark glyphicon-2x"></span>


Add font awesome:

e.g <i class="fa fa-flag fa-2x pull-left"></i>
e.g. <i class="fa fa-calendar fa-1x"></i>

Option Tree:
------------
- Add Blog Title in Option-Tree
- Add Logo 372x81 in Option-Tree


http://getbootstrap.com/components/


Installation:
-------------
- create page "disclaimer"
- add Revolution Slider. Install slider.zip as an example file
- Install disqus plugin
- feature picture size for frontpage blog picture = 260 × 320
- change favicon in /assets/img/favicon.ico


Plugins
-----------
https://github.com/filipstefansson

Updates  since version 1.0.0

## Roots details


[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

Roots is a WordPress starter theme based on [HTML5 Boilerplate](http://html5boilerplate.com/) & [Bootstrap](http://getbootstrap.com/) that will help you make better themes.

* Source: [https://github.com/roots/roots](https://github.com/roots/roots)
* Homepage: [http://roots.io/](http://roots.io/)
* Documentation: [http://roots.io/docs/](http://roots.io/docs/)
* Twitter: [@rootswp](https://twitter.com/rootswp), [@retlehs](https://twitter.com/retlehs), [@swalkinshaw](https://twitter.com/swalkinshaw), [@Foxaii](https://twitter.com/Foxaii), [@c2foryou](https://twitter.com/c2foryou)
* Newsletter: [Subscribe](http://roots.io/subscribe/)
* Forum: [http://discourse.roots.io/](http://discourse.roots.io/)

## Features

* [Grunt](http://roots.io/using-grunt-for-wordpress-theme-development/) for compiling LESS to CSS, checking for JS errors, live reloading, concatenating and minifying files, versioning assets, and generating lean Modernizr builds
* [Bower](http://bower.io/) for front-end package management
* [HTML5 Boilerplate](http://html5boilerplate.com/)
  * The latest [jQuery](http://jquery.com/) via Google CDN, with a local fallback
  * The latest [Modernizr](http://modernizr.com/) build for feature detection, with lean builds with Grunt
  * An optimized Google Analytics snippet
* [Bootstrap](http://getbootstrap.com/)
* Organized file and template structure
* ARIA roles and microformats
* [Theme activation](http://roots.io/roots-101/#theme-activation)
* [Theme wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/)
* Cleaner HTML output of navigation menus
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](http://roots.io/wpml/) and over 30 available [community translations](https://github.com/roots/roots-translations)

### Additional features

Install the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Root relative URLs
* Nice search (`/search/query/`)
* Cleaner output of `wp_head` and enqueued assets markup
* Image captions use `<figure>` and `<figcaption>`

## Installation

Clone the git repo - `git clone git://github.com/roots/roots.git` - or [download it](https://github.com/roots/roots/zipball/master) and then rename the directory to the name of your theme or website.

If you don't use [Bedrock](https://github.com/roots/bedrock), you'll need to add the following to your `wp-config.php` on your development installation:

```php
define('WP_ENV', 'development');
```

## Theme activation

Reference the [theme activation](http://roots.io/roots-101/#theme-activation) documentation to understand everything that happens once you activate Roots.

## Configuration

Edit `lib/config.php` to enable or disable theme features and to define a Google Analytics ID.

Edit `lib/init.php` to setup navigation menus, post thumbnail sizes, post formats, and sidebars.

## Theme development

Roots uses [Grunt](http://gruntjs.com/) for compiling LESS to CSS, checking for JS errors, live reloading, concatenating and minifying files, versioning assets, and generating lean Modernizr builds.

If you'd like to use Bootstrap Sass, look at the [Roots Sass](https://github.com/roots/roots-sass) fork.

### Install Grunt

**Unfamiliar with npm? Don't have node installed?** [Download and install node.js](http://nodejs.org/download/) before proceeding.

From the command line:

1. Install `grunt-cli` globally with `npm install -g grunt-cli`.
2. Navigate to the theme directory, then run `npm install`. npm will look at `package.json` and automatically install the necessary dependencies. It will also automatically run `bower install`, which installs front-end packages defined in `bower.json`.

When completed, you'll be able to run the various Grunt commands provided from the command line.

### Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Documentation

* [Roots 101](http://roots.io/roots-101/) — A guide to installing Roots, the files, and theme organization
* [Theme Wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://roots.io/using-grunt-for-wordpress-theme-development/) — A look into how Roots uses Grunt
* [Roots Sidebar](http://roots.io/the-roots-sidebar/) — Understand how to display or hide the sidebar in Roots

## Contributing

Everyone is welcome to help [contribute](CONTRIBUTING.md) and improve this project. There are several ways you can contribute:

* Reporting issues (please read [issue guidelines](https://github.com/necolas/issue-guidelines))
* Suggesting new features
* Writing or refactoring code
* Fixing [issues](https://github.com/roots/roots/issues)
* Replying to questions on the [forum](http://discourse.roots.io/)

## Support

Use the [Roots Discourse](http://discourse.roots.io/) to ask questions and get support.

