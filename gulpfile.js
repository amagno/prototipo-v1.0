var gulp = require('gulp');
var bowerFiles = require('gulp-bower-files');
var inject = require('gulp-inject');




gulp.task('copy', function(){
    bowerFiles()
        .pipe(gulp.dest('./public/bower_components/'));
    bowerFiles()
        .pipe(inject('./app/views/headers/styles.blade.php'))
        .pipe(gulp.dest('./app/views/headers/'));
    bowerFiles()
        .pipe(inject('./app/views/headers/scripts.blade.php'))
        .pipe(gulp.dest('./app/views/headers/'));
});

gulp.task('angular', function(){
    gulp.src('./app/views/headers/angular.blade.php')
        .pipe(inject(gulp.src('./public/angular_modules/**/*.js'), {ignorePath: '/public/'}))
        .pipe(gulp.dest('./app/views/headers/'));
});