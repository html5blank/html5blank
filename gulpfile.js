/* jshint node: true */
"use strict";

var gulp = require( "gulp" ),
	$ = require( "gulp-load-plugins" )();

/** CSS and preprocessors */
gulp.task( "styles", function() {
	return gulp.src( "src/css/style.css" )
		.pipe( $.autoprefixer( "last 2 version" ) )
		.on( "error", function( e ) {
			console.error( e );
		})
		.pipe( gulp.dest( "src" ) );
});

/** JSHint */
gulp.task( "jshint", function () {
	/** Test all `js` files exclude those in the `lib` folder */
	return gulp.src( "src/js/{!(lib)/*.js,*.js}" )
		.pipe($.jshint())
		.pipe($.jshint.reporter( "jshint-stylish" ))
		.pipe($.jshint.reporter( "fail" ));
});

/** JSConcat */
gulp.task( "jsconcat", function () {
   /** Combine all `js` files exclude those in the `min` folder */
    return gulp.src ("src/js/{!(min)/*.js,*.js}")
        .pipe($.concat("src/js/{!(min)/*.js,*.js}"))
        .pipe($.uglify())
        .pipe($.gulp.dest("src/js/min/scripts.js"))
});

/** Livereload */
gulp.task( "watch", [ "styles" ], function() {
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
	gulp.watch( "src/css/*.css", [ "styles" ] );
});
