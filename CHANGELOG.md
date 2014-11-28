### [HTML5 Blank](http://html5blank.com) Changelog

## MASTER

* Remove deprecated actions: (index_rel_link, parent_post_rel_link, start_post_rel_link, adjacent_posts_rel_link, adjacent_posts_rel_link_wp_head)

## 1.5.0 (10 September, 2014)

* Dates are configure from admin and more semantic
* Starting using Gulp
* Starting using Bower
* Starting using SCSS
* Now you can build `dev` and `production` version
* Now you can automaticly minify your code

## 1.4.3 (02 December, 2013)

* Update [conditionizr](http://conditionizr.com) to version 4.0.0
* Update jQuery to v1.10.2
* Update Google Analytics snippet to _new_ universal snippet
* Improved SVG script
* Removed empty conditionizr asset directories for `js` and `css`
* Remove redundant Modernizr file, loading from CDN

## 1.4.2 (15 June, 2013)

* Add _font-size:62.5%;_ to the HTML element in CSS for _rem_ (relative-ems) sizing
* Update jQuery 1.9.1 to 1.10.1

## 1.4.1 (26 April, 2013)

* Removed protocol-relative scripts/styles function as causes some disruption on some local development environments
* Removed hard-coded jQuery from footer as was causing issues with plugins that relied on jQuery being enqueued
* Removed jQuery CDN fallback, jQuery 1.9.1 and theme scripts will be enqueued in the &lt;head&gt; from now on to avoid conflicts with WordPress jQuery checks/detects

## 1.4.0 (09 April, 2013)

* Move pagination into it's own file (pagination.php) and include in necessary template files
* Enhanced clearfix in CSS to micro clearfix hack (works by using parent element for clear)
* Change all HTML structural comments to lower case for cleaner look
* Add apple-touch-icon-precomposed to &lt;head&gt;
* Moved favicon.ico to 'img/icons'
* Moved new apple touch icon to 'img/icons'
* Remove Conditionizr default &lt;head&gt; setup and add config URL (cleaner code from install) please see [conditionizr](http://conditionizr.com/docs.html) for configuration
* Reordered some meta, links in &lt;head&gt; for better readability/consistency
* Add a few structural (but empty) classes into CSS for fast styling upon install
* Few CSS comments added to label areas/components better

## 1.3.9 (07 April, 2013)

* Added WAI-ARIA landmark roles to enrich semantics and improve accessibility. [Stacey Cordoni](https://github.com/staceycordoni) [#32](https://github.com/toddmotto/html5blank/pull/32)
* Added WAI-ARIA 'role=button' to search form &lt;button&gt;
* Upgrade search input type from 'type=text' to 'type=search' for better use of HTML5 alongside WAI-ARIA

## 1.3.8 (02 April, 2013)

* Load Modernizr from CloudFlare CDN (same as Conditionizr)
* Load only Conditionizr and Modernizr through the &lt;head&gt;, with Conditionizr call too.
* Load jQuery CDN (Google) in footer, with jQuery CDN fallback (CloudFlare)
* Separated WordPress script enqueue to load Conditionizr, Modernizr in head: 'function html5blank_header_scripts()'
* Hard-coded jQuery and CDN fallback into footer.php above custom theme scripts, more reliable fallback method
* Load custom theme scripts in footer: 'function html5blank_footer_scripts()'
* Loading scripts before closing &lt;/body&gt; tag is best practice and not seen often in WordPress sites
* Lowercase &lt;!doctype html&gt; in header.php
* Remove empty line at end of functions.php

## 1.3.7 (01 April, 2013)

* Added Portuguese (Brazil) language translation file to /languages/ from [Wesllei Henrique](https://github.com/wesllei)

## 1.3.6 (30 March, 2013)

* Protocol relative jQuery and Conditionizr URLs
* Protocol relative URLs for all enqueued scripts and styles
* Added French language translation file to /languages/ from [Kevin Plattret](https://twitter.com/kevinplattret)
* Fixed search form bug by adding name="s" attribute
* Neater comments for headings in functions.php (same as style.css)
* Add date ordered contributors to ReadMe.

## 1.3.5 (26 March, 2013)

* Update jQuery CDN to use $_SERVER['SERVER_PORT'] to server HTTPS if needed
* Edit Google Analytics string to cater for SSL/HTTPS (footer.php)
* Added Spanish language translation file to /languages/ from Carlos Pinar
* Indent &lt;head&gt; and &lt;body&gt; elements for better code readability
* Add X-UA-Compatible meta tag to &lt;head&gt; to force Chrome Frame/latest document mode in IE (edge)
* Format the &lt;head&gt; by grouping similar elements
* Enhance footer.php indentation
* Change footer.php fallback text
* Removed HTML comments from comments.php and changed ID to class
* Improve Conditionizr formatting in header.php
* Set Conditionizr scripts/styles to _false_ by default (classes true)
* Change pagination ID to class for better CSS
* Improve indentation in 404.php for child element
* Update screenshot.png
* Update default HTML5 Blank logo and gravatar

## 1.3.4 (22 March, 2013)

* Update Conditionizr to version 2.2.0
* Replaced &lt;aside&gt; id with a class for better CSS
* Better naming conventions for search form, more class focused
* Removed JavaScript onfocus/onblur events in search input
* Replaced onfocus/onblur events with HTML5 placeholder for 'Search' (this is fine for non-supporting browsers as the search button indicates it's a search input)
* Search &lt;input&gt; has been replaced to a &lt;button&gt; for more flexibility, allows HTML content
* Removed font-smoothing from Opera and Mozilla as no longer supported

## 1.3.3 (03 March, 2013)

* Hook up Conditionizr to theme Directory using WordPress theme URI hooks

## 1.3.2 (22 February, 2013)

* Optimise body CSS declaration to shorthand
* Remove inner wrapper inside header element, wrapper now wraps all content
* Added header and footer classes to elements to encourage class styling over element declaration (i.e. header {} always use .header {} class etc.)

## 1.3.1 (13 February, 2013)

* Restructured CSS file, better architecture
* Focused CSS document on a more OOCSS approach (part of restructure)
* Split CSS into; Main, Structure, Pages, Images, Typography, Responsive, Misc, Print
* Moved away from single-line CSS formatting to multiple-line formatting for clearer code
* CSS indentation formatting, new lines for shared selectors
* Update jQuery to version 1.9.1, Google CDN and CloudFlare CDN
* Update Conditionizr to CDNJS CloudFlare v2.1.1
* Removed mediaqueries.min.js, do we really need older browsers to be responsive, HTML5Shiv (built-in Modernizr) is enough
* Updated scripts.js to ride off Modernizr.svg feature detect and remove custom script detect

## 1.3.0 (09 February, 2013)

* Remove jquery.min.js 'local' fallback from /js/ folder, simply fallback to another CDN (CloudFlare), see footer.php, saves code and maintenance across all sites
* Remove Google Analytics and jQuery fallback from functions.php injection, added manually in footer.php
* Setup Conditionizr to supply an HTML5Shim to Less Than IE9 browsers
* Updates Conditionizr to v1.2.0, enhanced retina detection and unlimited 'customScript', for polyfill usage (e.g. using respond.js and html5shim together)
* Added Romanian language translation file to /languages/

## 1.2.9 (03 February, 2013)

* Readded [//conditionizr.com](Conditionizr), the raw JavaScript version 50% faster, previously removed to work on jQuery-free Conditionizr

## 1.2.8 (30 January, 2013)

* Added Google Analytics DNS Prefetch to header.php to reduce [DNS latency](//www.chromium.org/developers/design-documents/dns-prefetching)

## 1.2.7 (23 January, 2013)

* Update to jQuery 1.9.0
* Removed [Conditionizr](http://conditionizr.com)
* Remove Apple Touch Icons

## 1.2.6 (24 December, 2012)

* [Conditionizr](http://conditionizr.com) legacy script and style loader added
	* Conditional statements removed from HTML tag (HTML classes added dynamically with Conditionizr)
	* Conditional statement for mediaqueries.min.js removed (added dynamically with Conditionizr, included inside scripts.js)
	* conditionizr.min.js and conditionizr.js enqueued
	* /css/conditionizr/ added with browser styles
	* /js/conditionizr/ added with browser scripts
* Shortened ViewPort meta tag with user scalable enabled

## 1.2.5 (09 December, 2012)

* Added SVG support in scripts.js for SVG graphics
* Shorten DOM ready function call to shorthand
* Removed web app capable meta tag, kept viewport
* CSS3 Media Queries JavaScript polyfill added to header.php
* Included default .wrapper style for fluid-first responsive approach
* Upgraded jQuery to 1.8.3
* Split stylesheets with separate call for Normalize as reset
* Global Box Sizing and Font-Smoothing on all elements

## 1.2.4 (15 October, 2012)

* Custom Comments callback - wp_list_comments('type=comment&callback=html5blankcomments'); editable comments now in functions.php
* Custom default Gravatar now built in, with demo gravatar.jpg inside the 'img' folder, swap it out
* Changed date format from the_date to the_time('F j, Y')
* Changed time format from the_time to the_time('g:i a')
* Changes above show the exact same when parsed, but have been changed due to the way WordPress works, which only shows one 'Date' for posts created on the same day. [More here](http://codex.wordpress.org/Function_Reference/the_date).

## 1.2.3 (13 October, 2012)

* Responsive Thumbnail support, added a function which removes width and height dynamic attributes from thumbnail

## 1.2.2 (09 October, 2012)

* Modified function - jQuery CDN fallback to get_template_directory_uri() instead of bloginfo('template_url')
* Add Support for Custom Header
* Tweaked support for Custom Background, added default color and placeholder background image

## 1.2.1 (07 October, 2012)

* Custom callback for wp_nav_menu, now in functions.php with html5blank_nav(); in header.php
* JavaScript added to 'scripts.js', hides URL bar after page load on iPhone/iPad, great for responsive projects
* Meta tag 'apple-mobile-web-app-capable' added to header.php
* Meta tag 'apple-mobile-web-app-status-bar-style' added to header.php

## 1.2.0 (03 October, 2012)

* Merged pull request from J-Rabe
* Localisation-support for all theme strings and empty *.pot for further translations
* German translation added by J-Rabe
* Functions.php includes new function 'load_theme_textdomain' for language support
* Loop.php created to handle the Loop core, with get_template_part inclusion for relevant files
* Loop.php includes conditional result for search results
* Swapped bloginfo('template_url'); for echo get_template_directory_uri(); on Logo + Favicon
* home_url instead of bloginfo('home')

## 1.1.2 (02 October, 2012)

* Merged pull request for comments.php code changes
* Merged pull request to remove 'rel' attribute from categories
* Filter added to remove autop paragraph function from Excerpts (Manual only)
* Filter added to allow shortcodes to execute inside Excerpts (Manual only)
* Filter added to strip autop tags altogether from Excerpts

## 1.1.1 (30 September, 2012)

* Enhanced author template
* Enhanced 404 page with return home link
* Semantic HTML enhancements
* Added 'published by the_author' hooks as a default
* Suggested include of WordPress Core CSS styles, now added

## 1.1.0 (29 September, 2012)

* Core template files restructure
* Semantic HTML enhancements
* Google analytics (optimised) dynamically loaded through functions.php in footer
* jQuery protocol relative fallback dynamically loaded through functions.php in footer
* Hardcoded footer.php content (analytics and jquery) removed as it's dynamically loaded now
* The Loop 'if, while, the' all inline, now inside parent section element
* Pagination links brought inside section element, outside of The Loop after our article
* Section elements brought outside The Loop to hold all page content
* The Loop 'else' content wrapper in article tag for markup/layout consistencies
* Post ID and Post Class added to article elements
* Category support for 'the category' title
* Enhanced Default Template page and Template Demo Page (page.php and template-demo.php)
* Threaded comments support
* Few obvious annotations removed
* Small typo in annotation 'function.php' changed to 'functions.php'
* Update theme default logo with new branding
* CSS tweak for default hyperlink color change to match Logo blue

## 1.0.2 (28 September, 2012)

* Update CDN and local jQuery fallbacks from 1.8.1 to 1.8.2
* Conditional page loads script added to functions.php
* Added Custom Background support into functions.php
* Remove WordPress Admin bar by default
* Remove 'text/css' from enqueued stylesheet
* Updated screenshot.png logo to new HTML5 Blank branding
* CSS change, :focus changed to input:focus as FireFox was adding focus styles to any element
* CSS change, new Chrome updates renders fonts thicker, reduced font-weight on body from 400 to 300
* CSS change, create non-semantic section below media queries, moved text-selection colors etc
* CSS change, default font-family for h1-h6 Helvetica Neue with Helvetica/Arial fallbacks (previous Georgia)
* CSS header theme details updated to new URL
* Move toddmotto.com/html5blank/ to new html5blank.com domain
* Favicon support for theme directory favicon.ico
* Apple touch icon support, drag into root folder
* LICENSE.md and README.md added and fully updated

## 1.0.1 (27 September, 2012)

* Commit CHANGELOG.md
* Commit README.md
* Commit of Empty Fonts folder with readme.txt inside (for GitHub detection)

## 1.0.0 (16 September, 2012)

* Initial commit
