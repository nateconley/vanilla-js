const gulp        = require( 'gulp' );
const sass        = require( 'gulp-sass' );
const browserSync = require( 'browser-sync' );

gulp.task( 'browser-sync', () => {
	browserSync.init( {
		files: [
			'**/*.php',
			'**/*.css',
			'**/*.js',
		],
		proxy: {
			target: 'http://vanillajs.dev',
		},
	} );
} );

gulp.task( 'sass', () => {
	gulp.src( './assets/sass/style.scss' )
		.pipe( sass( {
			style          : 'expanded',
			sourceComments : false,
		} ) )
		.pipe( gulp.dest( './assets/dist/css' ) )
} );

gulp.task( 'watch',  () => {
	gulp.watch( 'assets/sass/**/*.scss', ['sass'] );
	gulp.watch( 'assets/images/**/*.{ png, jpg, gif, svg }' ).on( 'change', browserSync.reload );
});

gulp.task( 'default', [ 'sass', 'browser-sync', 'watch' ] );
