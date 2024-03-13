var gulp = require( 'gulp' ),
	uglify = require( 'gulp-uglify' ),
	sass = require( 'gulp-sass' ),
	livereload = require( 'gulp-livereload' ),
	imagemin = require( 'gulp-imagemin' ),
	prefix = require( 'gulp-autoprefixer' );

function errorLog ( error ) {
	console.error.bind( error );
	this.emit( 'end' );
}

// Scripts Task
// Uglifies
gulp.task( 'scripts', function () {
	// minifying my javascript
	gulp.src( 'javascript/uncompressed/**/*.js' )
		.pipe( uglify() )
		.on( 'error', errorLog )
		.pipe( gulp.dest( 'javascript/compressed' ) );
});

// Styles Task
gulp.task( 'styles', function () {
	gulp.src( 'sass/**/*.scss' )
		.pipe( sass({outputStyle: 'expanded'}).on('error', sass.logError) )
		.on( 'error', errorLog )
		.pipe( prefix( 'last 2 versions' ) )
		.pipe( gulp.dest( 'css/' ) )
		.pipe( livereload() );
});

gulp.task( 'image', function () {
	gulp.src( 'img/*' )
		.pipe( imagemin() )
		.pipe( gulp.dest( 'img' ) )
});

// Watch Task
gulp.task( 'watch', function () {
	var server = livereload();

	gulp.watch( 'javascript/uncompressed/**/*.js', [ 'scripts' ] );
	gulp.watch( 'sass/**/*.scss', [ 'styles' ] );
	// gulp.watch( 'img/*', [ 'image' ] );
});

// gulp.task( 'default', [ 'scripts', 'styles', 'image', 'watch' ]);
gulp.task( 'default', [ 'scripts', 'styles', 'watch' ]);