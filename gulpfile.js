var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    // newer = require('gulp-newer'),
    // imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload');

// var imgSrc = 'assets/images/originals/*';
// var imgDest = 'assets/images';
    
gulp.task('styles', function(){
	gulp.src('scss/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass.sync().on('error', function (err) {
			console.error('Error!', err.message);
		}))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(sourcemaps.write('.', {includeContent: false}))
		.pipe(gulp.dest(''))
		.pipe(livereload());
});

// gulp.task('images', function() {
// 	return gulp.src(imgSrc, {base: 'assets/images/originals'})
// 		.pipe(newer(imgDest))
//         .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
//         .pipe(gulp.dest(imgDest));
// });

//gulp.task('default', ['styles', 'images']);

gulp.task('default',['styles']);

gulp.task('watch', function() {
	
	livereload.listen();
	
	// Watch .scss files
	gulp.watch('scss/*.scss', ['styles']);
	gulp.watch('scss/**/*.scss', ['styles']);

	// watch original images directory
	//gulp.watch('assets/images/originals/**', ['images']);

});