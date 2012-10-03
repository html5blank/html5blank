### [HTML5 Blank](http://html5blank.com) Changelog

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