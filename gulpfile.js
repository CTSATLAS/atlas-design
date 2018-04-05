const gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    include = require('gulp-include'),
    rename = require('gulp-rename');

gulp.task('sass', function() {
  return gulp.src(['webroot/scss/application.scss'])
      .pipe(sass({ includePaths: ['./node_modules']}))
      .pipe(gulp.dest('webroot/css'));
});


// Concatenates all files that it finds in the manifest
// and creates two versions: normal and minified.
gulp.task( 'js', function() {
  return gulp.src('./webroot/js/application.js')
      .pipe(include())
      .pipe(rename({ basename: 'application' }))
      .pipe(gulp.dest('./webroot/js/dist'))
      // Normal done, time to create the minified javascript (scripts.min.js)
      // remove the following 3 lines if you don't want it
      .pipe(uglify())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('./webroot/js/dist'))

});

gulp.task('imagemin', function () {
  gulp.src('./webroot/img/*')
      .pipe(imagemin())
      .pipe(gulp.dest('./webroot/img'))
});

gulp.task('watch', function() {
  gulp.watch('./webroot/scss/**/*.scss', ['sass']);
  gulp.watch('./webroot/js/*.js', ['js']);
});

gulp.task('default', ['sass', 'js', 'imagemin', 'watch']);
