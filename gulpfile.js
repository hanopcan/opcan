var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function() {
  browserSync.init({
      proxy: "http://localhost:8888/opcan/"
  });
});

gulp.task('sass', function(){
  return gulp.src('scss/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest(''))
    .pipe(browserSync.reload({stream: true}));
});

// Gulp watch syntax, browserSync and sass must run first
gulp.task('watch', ['browserSync', 'sass'], function(){
  gulp.watch('scss/*.scss', ['sass']); 

  // Other watchers

  gulp.watch('*.php', browserSync.reload); 
  gulp.watch('templates/*', browserSync.reload);   
  gulp.watch('template-parts/*', browserSync.reload);    
});

gulp.task('useref', function(){
  return gulp.src('app/*.html')
    .pipe(useref())
    .pipe(gulp.dest('dist'))
});
