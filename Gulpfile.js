var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            errLogToConsole: true
        }))
        .pipe(rename('styles.css'))
        .pipe(gulp.dest('./css/'));
});

gulp.task('default', function() {
    gulp.watch('sass/**/*.scss',['styles']);
});