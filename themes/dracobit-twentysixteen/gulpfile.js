var gulp         = require( 'gulp' );
var autoprefixer = require( 'gulp-autoprefixer' );
var browserify   = require( 'gulp-browserify' );
var concat       = require( 'gulp-concat' );
var cssmin       = require( 'gulp-cssmin' );
var jscs         = require( 'gulp-jscs' );
var jshint       = require( 'gulp-jshint' );
var phpcs        = require( 'gulp-phpcs' );
var rename       = require( 'gulp-rename' );
var uglify       = require( 'gulp-uglify' );
var wpPot        = require( 'gulp-wp-pot' );
var plumber      = require( 'gulp-plumber' );

gulp.task( 'default', ['fonts', 'i18n', 'phpcs', 'scripts', 'stylesheets', 'vendors'] );

gulp.task( 'fonts', function( done ) {
	gulp.src( 'bower_components/font-awesome/fonts/*' )
	    .pipe( gulp.dest( 'fonts' ) )
	    .on( 'end', done );
});

gulp.task( 'i18n', function( done ) {
	gulp.src( '**/*.php' )
	    .pipe( wpPot({ domain: 'dracobit', destFile: 'dracobit.pot' }) )
	    .pipe( gulp.dest( 'languages' ) )
	    .on( 'end', done );
});

gulp.task( 'phpcs', function( done ) {
	gulp.src( '**/*.php' )
	    .pipe( phpcs({ standard: 'WordPress', warningSeverity: 0 }) )
	    .pipe( phpcs.reporter( 'log' ) )
	    .on( 'end', done );
});

gulp.task( 'scripts', function( done ) {
	gulp.src( 'js/src/dracobit.js' )
			.pipe( plumber({
				handleError: function( err ) {
					console.log( err );
					this.emit( 'end' );
				}
			}) )
	    .pipe( jshint() )
	    .pipe( jshint.reporter( 'jshint-stylish' ) )
	    .pipe( jscs() )
	    .pipe( browserify() )
	    .pipe( uglify() )
	    .pipe( rename({ suffix: '.min' }) )
	    .pipe( gulp.dest( 'js' ) )
	    .on( 'end', done );
});

gulp.task( 'audit', function( done ) {
	gulp.src( 'js/src/**/*.js' )
		.pipe( plumber({
			handleError: function( err ) {
				console.log( err );
				this.emit( 'end' );
			}
		}) )
    .pipe( jshint() )
    .pipe( jshint.reporter( 'jshint-stylish' ) )
    .pipe( jscs() );
});

gulp.task( 'stylesheets', function( done ) {
	gulp.src( 'style.css' )
	    .pipe( autoprefixer() )
	    .pipe( cssmin({ 'keepSpecialComments': false }) )
	    .pipe( rename({ suffix: '.min' }) )
	    .pipe( gulp.dest( '.' ) )
	    .on( 'end', done );
});

gulp.task( 'vendors', function( done ) {
	gulp.src([
		'vendors/css/bootstrap.min.css',
		'vendors/css/font-awesome.min.css',
		'vendors/css/cssshake.min.css',
		'vendors/css/hover-min.css',
		'vendors/css/jquery-ui.min.css',
		'vendors/css/animate.css',
	]).pipe( concat( 'vendors.css' ) )
	  .pipe( rename({ suffix: '.min' }) )
	  .pipe( gulp.dest( 'css' ) );

	gulp.src([
		'vendors/js/jquery-2.1.4.min.js',
		'vendors/js/bootstrap.min.js',
		'vendors/js/jquery.flip.min.js',
		'vendors/js/jquery-ui.min.js',
		'vendors/js/moment.js'
	]).pipe( concat( 'vendors.js' ) )
	  .pipe( rename({ suffix: '.min' }) )
	  .pipe( gulp.dest( 'js' ) );
});

gulp.task( 'watch', function() {
	// gulp.watch( '**/*.php', ['phpcs', 'i18n'] );
	gulp.watch( 'js/src/**/*.js', ['scripts'] );
	gulp.watch( 'style.css', ['stylesheets'] );
});

gulp.task( 'audit-watch', function() {
	gulp.watch( '**/*.php', ['phpcs', 'i18n'] );
	gulp.watch( 'js/src/**/*.js', ['audit'] );
});
