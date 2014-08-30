/* jshint node: true */
"use strict";

var gulp = require( "gulp" ),
	/** @type {Object} Loader of Gulp plugins from `package.json` */
	$ = require( "gulp-load-plugins" )(),
	/** @type {Array} JS source files to concatenate and uglify */
	uglifySrc = [
		/** Modernizr */
		"src/bower_components/modernizr/modernizr.js",
		/** Conditionizr */
		"src/js/lib/conditionizr-4.3.0.min.js",
		/** jQuery */
		"src/bower_components/jquery/dist/jquery.js",
		/** Page scripts */
		"src/js/scripts.js"
	],
	/** @type {Array} CSS source files to concatenate and minify */
	cssminSrc = [
		/** The banner of `style.css` */
		"src/css/banner.css",
		/** Normalize */
		"src/bower_components/normalize.css/normalize.css",
		/** Theme style */
		"src/css/style.css"
	];

/** Clean */
gulp.task( "clean", require( "del" ).bind( null, [ ".tmp", "dist" ] ) );

/** Copy */
gulp.task( "copy", function() {
	return gulp.src([
			"src/*.{php,png,css}",
			"src/modules/*.php",
			"src/img/**/*.{jpg,png,svg,gif,webp,ico}",
			"src/fonts/*.{woff,woff2,ttf,otf,eot,svg}",
			"src/languages/*.{po,mo,pot}"
		], {
			base: "src"
		})
		.pipe( gulp.dest( "dist" ) );
});

/** CSS and preprocessors - DEV */
gulp.task( "stylesDev", function() {
	return gulp.src([
			"src/css/banner.css",
			"src/css/style.css"
		])
		.pipe( $.concat( "style.css" ))
		.pipe( $.autoprefixer( "last 2 version" ) )
		.on( "error", function( e ) {
			console.error( e );
		})
		.pipe( gulp.dest( "src" ) );
});

/** CSS and preprocessors - PRODUCTION */
gulp.task( "stylesProduction", function() {
	return gulp.src( cssminSrc )
		.pipe( $.concat( "style.css" ))
		.pipe( $.autoprefixer( "last 2 version" ) )
		.pipe( $.csso() )
		.on( "error", function( e ) {
			console.error( e );
		})
		.pipe( gulp.dest( "src" ) );
});

/** JSHint */
gulp.task( "jshint", function () {
	/** Test all `js` files exclude those in the `lib` folder */
	return gulp.src( "src/js/{!(lib)/*.js,*.js}" )
		.pipe( $.jshint() )
		.pipe( $.jshint.reporter( "jshint-stylish" ) )
		.pipe( $.jshint.reporter( "fail" ) );
});

/** Templates - DEV */
gulp.task( "templateDev", function() {
	return gulp.src( "src/dev-templates/is-debug.php" )
		.pipe( $.template({ is_debug: "true" }) )
		.pipe( gulp.dest( "src/modules" ) );
});

/** Templates - PRODUCTION */
gulp.task( "templateProduction", function() {
	return gulp.src( "src/dev-templates/is-debug.php" )
		.pipe( $.template({ is_debug: "false" }) )
		.pipe( gulp.dest( "src/modules" ) );
});

/** Uglify */
gulp.task( "uglify", function() {
	return gulp.src( uglifySrc )
		.pipe( $.concat( "scripts.min.js" ) )
		.pipe( $.uglify() )
		.pipe( gulp.dest( "dist/js" ) );
});

/** Livereload */
gulp.task( "watch", [ "templateDev", "stylesDev", "jshint" ], function() {
	var server = $.livereload();

	/** Watch for livereoad */
	gulp.watch([
		"src/js/**/*.js",
		"src/*.php",
		"src/*.css",
	]).on( "change", function( file ) {
		console.log( file.path );
		server.changed( file.path );
	});

	/** Watch for autoprefix */
	gulp.watch( "src/css/*.css", [ "stylesDev" ] );

	/** Watch for JSHint */
	gulp.watch( "src/js/{!(lib)/*.js,*.js}", ["jshint"] );
});

/** Build */
gulp.task( "build", [
	"clean",
	"templateProduction",
	"stylesProduction",
	"jshint",
	"copy",
	"uglify"
], function () {
  console.log("Build is finished");
});
