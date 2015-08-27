var gulp       = require ('gulp'),
    livereload = require('gulp-livereload'),
    uglifyJS   = require ('gulp-uglify'),
    htmlmin    = require('gulp-html-minifier'),
    del        = require('del');

// ===================================================

gulp.task ('default', function () {

  livereload.listen ();

  ['./root/guide/*.html', './root/guide/css/**/*.css', './root/guide/js/**/*.js'].forEach (function (t) {
    gulp.watch (t).on ('change', function () {
      gulp.run ('reload');
    });
  });
});
gulp.task ('reload', function () {
  livereload.changed ();
  console.info ('\n== ReLoad Browser! ================================================\n');
});

// ===================================================

gulp.task ('minify', function () {
  gulp.run ('js-uglify');
  gulp.run ('minify-html');
});
gulp.task ('js-uglify', function () {
  gulp.src ('./root/guide/js/**/*.js')
      .pipe (uglifyJS ())
      .pipe (gulp.dest ('./root/guide/js/'));
});
gulp.task ('minify-html', function () {
  gulp.src ('./root/guide/*.html')
      .pipe (htmlmin ({collapseWhitespace: true}))
      .pipe (gulp.dest ('./root/guide/'));
});

// ===================================================

gulp.task ('gh-pages', function () {
  del (['./root']);
});