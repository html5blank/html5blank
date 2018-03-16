/* global $: true */
'use strict';
const eslint = require( 'gulp-eslint' );
const ftp = require( 'vinyl-ftp' );

//const ftpConfig = require('./ftp.config.json');

var gulp = require( 'gulp' ),

	/** @type {Object} Loader of Gulp plugins from `package.json` */
	$ = require( 'gulp-load-plugins' )(),

	/** @type {Array} JS source files to concatenate and uglify */
	uglifySrc = [

		/** Modernizr */
		/*"src/js/lib/modernizr.js",*/
		/** Conditionizr */
		/*"src/js/lib/conditionizr-4.3.0.min.js",*/
		/** jQuery */
		/*"node_modules/jquery/dist/jquery.js",*/
		/** Fancy */
		'src/js/lib/jquery.fancybox.min.js',

		/** Marka */
		'src/js/lib/marka.min.js',

		/** Slick */
		'src/js/lib/slick.min.js',

		/** Page scripts */
		'src/js/scripts.js'
	],

	/** @type {Object of Array} CSS source files to concatenate and minify */
	cssminSrc = {
		development: [

			/** The banner of `style.css` */
			'src/css/banner.css',

			/** Theme style */
			'src/css/style.css'
		],
		production: [

			/** The banner of `style.css` */
			'src/css/banner.css',

			/** Normalize */
			'node_modules/normalize.css/normalize.css',

			/** Fancy */
			'src/css/lib/jquery.fancybox.min.css',

			/** Marka */
			'src/css/lib/marka.min.css',

			/** Slick */
			'src/css/lib/slick.css',

			/** Slick-theme */
			'src/css/lib/slick-theme.css',

			/** Theme style */
			'src/css/style.css'
		]
	},

	/** @type {String} Used inside task for set the mode to 'development' or 'production' */
	env = ( function() {

		/** @type {String} Default value of env */
		var env = 'development';

		/** Test if there was a different value from CLI to env
			Example: gulp styles --env=production
			When ES6 will be default. `find` will replace `some`  */
		process.argv.some( function( key ) {
			var matches = key.match( /^\-{2}env\=([A-Za-z]+)$/ );

			if ( matches && 2 === matches.length ) {
				env = matches[1];
				return true;
			}
		});

		return env;
	} () );

/** Clean */
gulp.task( 'clean', require( 'del' ).bind( null, [ '.tmp', 'dist' ]) );

/** Copy */
gulp.task( 'copy', function() {
	return gulp.src([
			'src/*.{php,png,css,gif}',
			'src/modules/*.php',
			'src/img/**/*.{jpg,png,svg,gif,webp,ico}',
			'src/fonts/*.{woff,woff2,ttf,otf,eot,svg}',
			'src/languages/*.{po,mo,pot}'
		], {
			base: 'src'
		})
		.pipe( gulp.dest( 'dist' ) );
});

/** CSS Preprocessors */
gulp.task( 'sass', function() {
	return gulp.src( 'src/css/sass/style.scss' )
		.pipe( $.plumber() )
		.pipe( $.sourcemaps.init() )
		.pipe( $.sass() )
		.pipe( $.sourcemaps.write( '.' ) )
		.on( 'error', $.sass.logError )
		.pipe( gulp.dest( 'src/css' ) );
});

/** STYLES */
gulp.task( 'styles', [ 'sass' ], function() {

	var stream = gulp.src( cssminSrc[ env ])
	.pipe( $.concat( 'style.css' ) )
	.pipe( $.autoprefixer( 'last 2 version' ) );

	console.log( '`styles` task run in `' + env + '` environment' );

	if ( 'production' === env ) {
		stream = stream.pipe( $.csso() );
	}

	return stream.on( 'error', function( e ) {
			console.error( e );
		})
		.pipe( gulp.dest( 'src' ) );
});

gulp.task( 'lint', () => {

    // ESLint ignores files with "node_modules" paths.
    // So, it's best to have gulp ignore the directory as well.
    // Also, Be sure to return the stream from the task;
    // Otherwise, the task may end before the stream has finished.
    return gulp.src([ 'src/js/{!(lib)/*.js,*.js}', '!node_modules/**' ])
        // eslint() attaches the lint output to the "eslint" property
        // of the file object so it can be used by other modules.
        .pipe( eslint() )
        // eslint.format() outputs the lint results to the console.
        // Alternatively use eslint.formatEach() (see Docs).
        .pipe( eslint.format() );

        // To have the process exit with an error code (1) on
        // lint error, return the stream and pipe to failAfterError last.
        // .pipe(eslint.failAfterError());
});

/** Templates */
gulp.task( 'template', function() {
	var isDebug = ( 'production' === env ? 'false' : 'true' );
	console.log( '`template` task run in `' + env + '` environment' );

    return gulp.src( 'src/dev-templates/is-debug.php' )
        .pipe( $.template({ isDebug: isDebug }) )
        .pipe( gulp.dest( 'src/modules' ) );
});

/** Modernizr **/
gulp.task( 'modernizr', function() {
	var modernizr = require( 'modernizr' ),
		config = require( './node_modules/modernizr/lib/config-all' ),
		fs = require( 'fs' );

		modernizr.build( config, function( code ) {
			fs.writeFile( './src/js/lib/modernizr.js', code );
		});
});

/** Uglify */
gulp.task( 'uglify', function() {
	return gulp.src( uglifySrc )
		.pipe( $.concat( 'scripts.min.js' ) )
		.pipe( $.uglify() )
		.pipe( gulp.dest( 'dist/js' ) );
});

/** jQuery **/
gulp.task( 'jquery', function() {
	return gulp.src( 'node_modules/jquery/dist/jquery.js' )
		.pipe( $.sourcemaps.init() )
		.pipe( $.sourcemaps.write( '.' ) )
		.pipe( gulp.dest( 'src/js/lib' ) );
});

gulp.task( 'normalize', function() {
	return gulp.src( 'node_modules/normalize.css/normalize.css' )
		.pipe( gulp.dest( 'src/css/lib' ) );
});

/** `env` to 'production' */
gulp.task( 'envProduction', function() {
	env = 'production';
});

/** Livereload */
gulp.task( 'watch', [ 'template', 'styles', 'lint', /*"modernizr",*/ /*"jquery",*/ 'normalize' ], function() {
	var server = $.livereload;
	server.listen();

	/** Watch for livereoad */
	gulp.watch([
		'src/js/**/*.js',
		'src/*.php',
		'src/*.css'
	]).on( 'change', function( file ) {
		console.log( file.path );
		server.changed( file.path );
	});

	/** Watch for autoprefix */
	gulp.watch([
		'src/css/*.css',
		'src/css/sass/**/*.scss'
	], [ 'styles' ]);

	/** Watch for JSHint */
	gulp.watch( 'src/js/{!(lib)/*.js,*.js}', [ 'lint' ]);
});

/** Build */
gulp.task( 'build', [
	'envProduction',
	'clean',
	'template',
	'styles',

	/*"modernizr",*/
	'lint',
	'copy',
	'uglify'
], function() {
	console.log( 'Build is finished' );
});

/** Gulp default task */
gulp.task( 'default', [ 'watch' ]);

/** Deploy */
gulp.task( 'deploy', [ 'build' ], function() {
	var conn = ftp.create( ftpConfig.connection );
	var globs = [ 'dist/**' ];

	if ( ! ftpConfig ) {
		throw new Error( 'Ftp configuration object does not exist' );
	} else if ( ! ftpConfig.connection ) {
		throw new Error( 'Ftp connection is not defined' );
	}

	// turn off buffering in gulp.src for best performance

    return gulp.src( globs, { base: '.', buffer: false })
        .pipe( conn.newer( ftpConfig.destination ) ) // only upload newer files
        .pipe( conn.dest( ftpConfig.destination ) );

});

/* Prepares server for online watch */
gulp.task( 'watch:online:init', [ 'template', 'styles', 'lint', /*"modernizr",*/ /*"jquery",*/ 'normalize' ], function() {
    var conn = ftp.create( ftpConfig.connection );
	var globs = [ 'src/**' ];

	if ( ! ftpConfig ) {
		throw new Error( 'Ftp configuration object does not exist' );
	} else if ( ! ftpConfig.connection ) {
		throw new Error( 'Ftp connection is not defined' );
	}

    return gulp.src( globs, {base: '.', buffer: false})
        .pipe( conn.dest( ftpConfig.destination ) );
});

/* Watch and deploy to server - use in DEVELOPMENT ONLY */
gulp.task( 'watch:online', [ 'template', 'styles', 'lint', /*"modernizr",*/ /*"jquery",*/ 'normalize' ], function() {

	var globs = [ 'src/**' ];
    var watcher = gulp.watch( globs );
	var conn = ftp.create( ftpConfig.connection );
	var server = $.livereload;
	server.listen();

	/** Watch for livereoad */
	gulp.watch([
		'src/js/**/*.js',
		'src/*.php',
		'src/*.css'
	]).on( 'change', function( file ) {
		console.log( file.path );
		server.changed( file.path );
	});

	/** Watch for autoprefix */
	gulp.watch([
		'src/css/*.css',
		'src/css/sass/**/*.scss'
	], [ 'styles' ]);

	/** Watch for JSHint */
	gulp.watch( 'src/js/{!(lib)/*.js,*.js}', [ 'lint' ]);


	/* Deploy source files to server when they change */
	if ( ! ftpConfig ) {
		throw new Error( 'Ftp configuration object does not exist' );
	} else if ( ! ftpConfig.connection ) {
		throw new Error( 'Ftp connection is not defined' );
	}
    watcher.on( 'change', function( event ) {
        console.log(
            'File "' + event.path + '" ' + event.type + ' - uploading...' );
        return gulp.src([ event.path ], { base: '.', buffer: false })
			.pipe( conn.newer( ftpConfig.destination ) ) // only upload newer files
			.pipe( conn.dest( ftpConfig.destination ) );
    });
});
