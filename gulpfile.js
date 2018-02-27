var gulp = require('gulp');
var concat = require('gulp-concat');
var stylus = require('gulp-stylus');
var minifyCSS = require('gulp-minify');
var rename = require('gulp-rename');

gulp.task('scripts', function() {
    gulp.src([
            './resources/js/*.js'
        ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./wp-content/themes/virtual-cycling-club/js'))
})

gulp.task('styles', function() {
    gulp.src([
            './resources/stylus/app.styl'
        ])
        .pipe(stylus())
        .pipe(minifyCSS())
        .pipe(rename('style.css'))
        .pipe(gulp.dest('./wp-content/themes/virtual-cycling-club'))
})


gulp.task('default', function() {

    gulp.watch(
        './resources/js/*', function(event) {
        gulp.run('scripts');
    })

    gulp.watch('./resources/css/**', function(event) {
        gulp.run('styles');
    })
})
