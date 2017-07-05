/*
 * Dependencias
 */
var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename')

/*
 * Configuración de la tarea 'concatenar'
 */
gulp.task('concatenar', function () {
  gulp.src('Views/js/*.js')
    .pipe(concat('general.js'))
    .pipe(rename('general.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('Views/js/GulpComprimido/'))
});
gulp.task('css', function () {
  gulp.src('Views/js/*.js')
    .pipe(concat('general.js'))
    .pipe(uglify())
    .pipe(gulp.dest('Views/js/GulpComprimido/'))
});