var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),

    sassFiles = [
        'css/**/*.sass'
    ];

gulp.task('sass', function() {
    gulp.src(sassFiles, {base: 'css'})
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'));
});

// watch task
gulp.task('default',function() {
    gulp.watch(sassFiles,['sass']);
});
