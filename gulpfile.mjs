import gulp from "gulp";
import * as dartSass from "sass";
import gulpSass from "gulp-sass";
const sass = gulpSass(dartSass);
import webp from "gulp-webp";

/*
extensao para colocar os prefixos de regras de css para varios browsers
const prefixer = require("gulp-autoprefixer");

*/
import cssnano from "gulp-cssnano";
/* o cssnano ja tem o autoprefixer incluso */

function watchFiles() {
  gulp.watch("./sass/*", build);
}

function convertWebp() {
  return gulp
    .src("./assets/defaultimages/*.*", {
      encoding: false,
    })
    .pipe(webp())
    .pipe(gulp.dest("./assets/images"));
}

function build(cb) {
  gulp
    .src("./sass/*", { sourcemaps: true })
    .pipe(sass())
    .pipe(
      cssnano({
        autoPrefixer: {
          browsers: ["> 1%", "last 2 versions"],
          add: true,
        },
      })
    )
    .pipe(gulp.dest("./css", { sourcemaps: "." }));

  cb();
}

export default gulp.parallel(build, convertWebp);
export { watchFiles as watch };
