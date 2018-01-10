# SMAKK Basic Coding Test
See below for tasks + submission, this theme is a direct fork of HTML5Blank so you can access documentation there
* Project: [github.com/html5blank/html5blank](https://github.com/html5blank/html5blank)

## Getting Started with HTML5 Blank

* Go to the Wordpress' theme folder (`.../wp-content/themes`)
* In CLI, run: `git clone https://github.com/smkkstudios/html5blank.git`
* `cd html5blank` and then `npm install` (you'll need gulp install as well)
* `gulp watch` will enable `livereload` and development version
* `gulp build` for distribute version with minified `js` and `css` files
* NOTE: `src` and `dist` folders can live happily together inside the same folder (`html5blank`) that in the `theme` folder. You'll have two different instances of the theme within `Appearance > Themes` panel inside the admin


## Tasks
- Install local development server and import the wordpress install - you will receive an email with a download link for an export from WPEngine, with SQL Dump, plugin files, core Wordpress files & theme files. You will need to, import SQL dump into your local database, rename the wp-url and site-url inside the wp-options table with your local dev url, delete wp-config.php and rename wp-config-sample.php to wp-config.php replacing your local DB values with the placeholder. (This bits a little confusing, shoot me an email if you’re having trouble setting it up)
- Create a page template for the home page and extract the content from the ACF repeater and flexible content areas that I have filled with data. (Am not worried at all about styling, can just wrap in html tags)
- Loop through the SMAKK Custom Post Type and Make a list of the titles and links to the individual posts on a custom archive page.

## Submission
- Commit these changes to a seperate branch and open a PR
- If you needed to make any DB Changes dump the SQL and upload in your commit
