'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function () {
  return gulp.src('scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
     }))
    .pipe(gulp.dest('dist'));
});

gulp.task('default', function () {
  gulp.watch('scss/*.scss', ['css']);
});
