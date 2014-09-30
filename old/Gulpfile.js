var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    bower = require('gulp-bower');

var config = {
    sassPath: './resources/sass',
    bowerDir: './bower_components'
};

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest(config.bowerDir));
});

gulp.task('icons', function() {
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*')
        .pipe(gulp.dest('./public/fonts'));
});

gulp.task('bsscripts', function() {
    return gulp.src(config.bowerDir + '/bootstrap-sass-official/assets/javascripts/bootstrap/**.*')
        .pipe(gulp.dest('./public/js'));
});

gulp.task('jqscripts', function() {
    return gulp.src(config.bowerDir + '/jquery/dist/**.*')
        .pipe(gulp.dest('./public/js'));
});

gulp.task('pagescss', function() {
    return gulp.src(config.sassPath + '/style.scss')
        .pipe(sass({
            style: 'expanded',
            loadPath: [
                config.sassPath,
                config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                config.bowerDir + '/fontawesome/scss'
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            }))
        )
        .pipe(autoprefixer('last 20 version'))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('homecss', function() {
    return gulp.src(config.sassPath + '/home.scss')
        .pipe(sass({
            style: 'expanded',
            loadPath: [
                config.sassPath,
                config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                config.bowerDir + '/fontawesome/scss'
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            }))
        )
        .pipe(autoprefixer('last 20 version'))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('watch', function() {
    gulp.watch(config.sassPath + '/**/*.scss', ['css']);
});

gulp.task('css', ['pagescss', 'homecss']);

gulp.task('scripts',['bsscripts', 'jqscripts']);

gulp.task('default', ['bower', 'icons', 'scripts', 'css', 'watch']);