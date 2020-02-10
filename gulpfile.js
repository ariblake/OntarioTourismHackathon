const gulp = require ('gulp');
const sass = require ('gulp-sass');

function compile(done) {
    gulp.src("sass/**/*.scss")
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(gulp.dest("css"))
}

function watch() {
    gulp.watch("sass/*.scss").on('change', compile);
}

exports.compile = compile;
exports.watch = watch;