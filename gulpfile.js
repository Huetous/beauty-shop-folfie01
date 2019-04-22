var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css'),
    notify = require("gulp-notify");

gulp.task('browser-sync', function () {
    browserSync({
        proxy: "folfie2",
        notify: false,
        // tunnel: true,
        // tunnel: "projectmane", //Demonstration page: http://projectmane.localtunnel.me
    });
});

gulp.task('js', function () {
    return gulp.src([
        'libs/jquery/dist/jquery.min.js',
        'libs/carousel/owl.carousel.min.js',
        'js/common.js',
        'js/common.min.js', // Всегда в конце
    ])
        .pipe(concat('scripts.min.js'))
        .pipe(uglify()) // Минимизировать весь js (на выбор)
        .pipe(gulp.dest('js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('sass', function () {
    return gulp.src('src/sass/main.sass')
        .pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
        .pipe(cleanCSS())
        .pipe(gulp.dest('src/css'))
        .pipe(browserSync.stream())
});

gulp.task('watch', ['sass', 'js', 'browser-sync'], function () {
    gulp.watch('src/sass/**/*.sass', ['sass']);
    gulp.watch(['src/libs/**/*.js', 'app/js/common.js'], ['js']);
    gulp.watch('app/**/*.php', browserSync.reload);
});

gulp.task('default', ['watch']);
