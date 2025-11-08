var gulp = require('gulp'),
  sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var merge = require('merge-stream');

//browserSync
var browserSync = require('browser-sync').create();

//ブラウザの設定
gulp.task('browser-init', function (done) {
  browserSync.init({
    files: ["index.html"],
    port: 3010,
    server: {
      baseDir: "./" // Change this to your web root dir
    }
  });
  done();
});

//リロード実行タスク
gulp.task('bs-reload', function (done) {
  browserSync.reload();
  done();
});



gulp.task('sass', function () {
  var style = gulp.src('./assets/scss/style.scss')
    .pipe(sass.sync({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./assets/css'));


  return merge(style);
});



gulp.task('watch', function () {
  gulp.watch('./assets/scss/*.scss', gulp.task('sass'));


  gulp.watch('./assets/scss/*.scss', gulp.series('bs-reload'));
  gulp.watch('./assets/scss/wp-parts/*.scss', gulp.series('bs-reload'));
  gulp.watch('./assets/js/*.js', gulp.series('bs-reload'));
  gulp.watch('./assets/img/**/*.(png|jpg|gif|svg|jpeg)', gulp.series('bs-reload'));

  gulp.watch('./*.php', gulp.series('bs-reload'));
  gulp.watch('./wp-parts/*.php', gulp.series('bs-reload'));

});





gulp.task("default", gulp.parallel('sass', 'browser-init', 'watch'), function () { });
