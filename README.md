# [HTML5 Blank](http://html5blank.com)

Powerful shell for rapidly deploying your WordPress projects.

* Project: [github.com/toddmotto/html5blank](https://github.com/toddmotto/html5blank)
* Website: [html5blank.com](http://html5blank.com)
* Twitter: [@html5blank](http://twitter.com/html5blank)
* Author : [Todd Motto](http://toddmotto.com) // [@toddmotto](http://twitter.com/toddmotto)


## Getting Started with HTML5 Blank

* Go to the Wordpress' theme folder (`.../wp-content/themes`)
* In CLI, run: `git clone https://github.com/toddmotto/html5blank.git`
* `cd html5blank` and then `npm install` and then `bower install` (you'll need gulp install as well)
* `gulp watch` will enable `livereload` and development version
* `gulp build` for distribute version with minified `js` and `css` files
* NOTE: `src` and `dist` folders can live happily together inside the same folder (`html5blank`) that in the `theme` folder. You'll have two different instances of the theme within `Appearance > Themes` panel inside the admin


## Get involved! Make HTML5 Blank better

There are a few ways to get involved, submit a Pull Request, or submit a comment on the website - [html5blank.com](http://html5blank.com)

## Features

### HTML5
* Basic Semantic HTML5 Markup
* W3C Valid Code Foundations
* Responsive Ready, ViewPort meta data
* HTML Class support for IE7, IE8, IE9 Conditionals (HTML5 Boilerplate)
* Clean, neatly organised code, with PHP annotations

### jQuery + JavaScript
* Replaced built-in WordPress enqueue with Google CDN
* Protocol relative jQuery if Google CDN offline (HTML5 Boilerplate)
* Conditionizr for cross-platform/device detects and enhancements
* Modernizr feature detection, HTML5 element support for legacy, progressive enhancement (HTML5 Boilerplate)
* DOM Ready JavaScript file setup (scripts.js) for instant JavaScript development
* JavaScript files enqueued using WordPress functions into wp_head

### CSS3
* HTML5 Boilerplate reset
* Media Queries framework for instant development using @media
* @font-face empty framework with Fonts folder setup ready for new custom fonts
* CSS3 custom selection styles
* Inline print styles (HTML5 Boilerplate)
* Body element config, including Optimize Legibility for kerning and font-smoothing
* Replaced focus styles to avoid blue blur in field elements, replaced with border
* Stylesheet enqueued using WordPress functions into wp_head

### Preloaded Functions (functions.php)
* Enqueue Scripts functions setup
* Enqueue Styles functions setup
* Dynamic WordPress Menu Navigation Support, preloaded with 3 Dynamic menus
* Cleaned up dynamic nav output (Remove outer 'div')
* Remove all injected classes from nav items, ID's, Page ID's
* Custom Post Type x1 preloaded for demonstration, supporting: Category, Tags, Post Thumbnails, Excerpts
* Dynamic Sidebar with x2 Widget Areas, and sidebar.php setup
* WordPress Thumbnail Support, no Plugin image cropping, custom Arrays and Thumbnail settings
* Custom Excerpt callbacks, with changeable callback numbers
* Replaced 'Read More' button for custom Excerpt callbacks
* Demo Shortcodes included, with Nested Shortcode capability
* Add Slug to body class (Starkers Theme credit)
* wp_head functions stripped right down, remove excess injected junk
* All functions annotated, categorised into sections, filters, actions, shortcodes etc.
* Space for development, neatly organised code with Modules/External files

### Theme Files and Functionality
* Built in Pagination, no plugins (strips out prev + next post and gives page numbers)
* Optimised Google Analytics in footer (HTML5 Boilerplate)
* Widget Area Sidebar support, functions in place to get developing
* Custom Search Form included (searchform.php) - fully editable
* Tags support for showing Post Tags
* Category support for showing the Category of post
* Author support showing the author
* Demo Custom Page Template for expansion

## Contributors
Thanks to all the awesome [contributors](https://github.com/toddmotto/html5blank/graphs/contributors)!
