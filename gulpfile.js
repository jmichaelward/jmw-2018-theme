const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const webpack = require('webpack-stream');

let autoprefixerOptions = {
    browsers: ['last 4 versions', '> 5%', 'Firefox ESR']
};

gulp.task('browser-sync', ()=> {
    browserSync.init({
        proxy: 'jmichaelward.dev'
    });

    gulp.watch('assets/src/scss/**/*.scss', ['sass']);
    gulp.watch('assets/src/js/**/*.js', ['js']).on('change', browserSync.reload);
    gulp.watch(['./src/**/*.php', '*.php']).on('change', browserSync.reload);
});

gulp.task('js', ()=> {
    return gulp.src('assets/src/js/app.js')
        .pipe(webpack(require('./webpack.config.js')))
        .pipe(gulp.dest('assets/dist/js'));
});

gulp.task('sass', ()=> {
    return gulp.src('assets/src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/dist/css'))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(browserSync.stream());
});

gulp.task('watch', ['browser-sync']);
gulp.task('default', ['sass', 'js']);
