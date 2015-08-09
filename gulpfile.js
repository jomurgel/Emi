var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    // newer = require('gulp-newer'),
    // imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload');
    replace = require('gulp-replace');
    prompt = require('gulp-prompt')

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

var theme = [];

gulp.task('generate', ['questions'], function(){

	return gulp.src('**/*.{php,scss}')
		.pipe(replace('themeName', theme.theName))
		.pipe(replace('themeHandle', theme.theHandle))
		.pipe(replace('themeFunction', theme.theFunction))
		.pipe(replace('themeTextDomain', theme.theTextDomain))
		.pipe(replace('themeURI', theme.uri))
		.pipe(replace('themeAuthor', theme.author))
		.pipe(replace('authorURI', theme.authuri))
		.pipe(replace('themeDescription', theme.desc))
		.pipe(gulp.dest(''));

});

gulp.task('questions', function(){

	return gulp.src('**/*')
		.pipe(prompt.prompt([{
	        type: 'input',
	        name: 'themename',
	        message: 'What is your theme name?'
	    },
	    {
	        type: 'input',
	        name: 'uri',
	        message: 'What is your theme URL?'
	    },
	    {
	        type: 'input',
	        name: 'author',
	        message: 'Who is the theme author?'
	    },
	    {
	        type: 'input',
	        name: 'authuri',
	        message: 'What is the author\'s URL?'
	    },
	    {
	        type: 'input',
	        name: 'desc',
	        message: 'What is the theme\'s description?'
	    }
	    ], function(res){
	        theme.theName = res.themename;
			theme.theHandle = theme.theName.replace(new RegExp(find, ' '),'_');
			theme.theFunction = theme.theHandle.toLowerCase();
			theme.theTextDomain = theme.theFunction.replace(new RegExp(find, '_'),'-');
			theme.uri = res.uri;
			theme.author = res.author;
			theme.authuri = res.authuri;
			theme.desc = res.desc;
	    }));

});