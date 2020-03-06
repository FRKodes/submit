let gulp = require('gulp');
let sass = require('gulp-sass');
let rename = require('gulp-rename');
let concat = require('gulp-concat');
let cleanCSS = require('gulp-clean-css');

sass.compiler = require('node-sass');

gulp.task('styles', () => {
    return gulp.src('./assets/sass/app.sass')
        .pipe(sass())
        .pipe(rename('app.css'))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('concat', () => {
  console.log('Concating and moving all the css files');
  return gulp.src([
			'./assets/css/base.css',
			'./assets/css/00-bootstrap.css',
			'./assets/css/lightbox.css',
      './assets/css/app.css'])
    .pipe(concat('/assets/css/submit-styles.css'))
    .pipe(gulp.dest('./'));
});

gulp.task('concat-js', () => {
  console.log('Concating JS and moving all the files');
  return gulp.src([
			'./assets/js/jquery.js',
			'./assets/js/bootstrap.js',
			'./assets/js/lightbox.js',
      './assets/js/app.js'])
    .pipe(concat('submit-scripts.js'))
    .pipe(gulp.dest('./assets/js/'));
});

gulp.task('minify-css', () => {
  return gulp.src('./assets/css/submit-styles.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', () => {
    gulp.watch(['./assets/sass/app.sass', './assets/js/app.js'], gulp.series(['styles', 'concat', 'minify-css', 'concat-js']));
});

gulp.task('default', gulp.parallel('styles', 'concat'));