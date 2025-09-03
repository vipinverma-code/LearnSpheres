'use strict';
const {series, src, dest, parallel, watch} = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const CleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const npmdist = require("gulp-npm-dist");
const rtlcss = require("gulp-rtlcss");

const paths = {
    baseDistAssets: "public/assets/",      // output directory in Laravel public folder
    baseSrcAssets: "resources/assets/",    // SCSS source in Laravel resources folder
};

// Copy vendor plugins from node_modules to public/assets/vendor
const plugins = function () {
    const out = paths.baseDistAssets + "vendor/";
    return src(npmdist(), {base: "./node_modules"})
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest(out));
};

// Compile SCSS to CSS + Minify + RTL
const scss = function () {
    const out = paths.baseDistAssets + "css/";

    // Normal LTR CSS
    src(paths.baseSrcAssets + "scss/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(autoprefixer({ overrideBrowserslist: ["last 2 versions"] }))
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write("./"))
        .pipe(dest(out));

    // RTL CSS
    return src(paths.baseSrcAssets + "scss/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(autoprefixer({ overrideBrowserslist: ["last 2 versions"] }))
        .pipe(rtlcss())
        .pipe(rename({suffix: "-rtl"}))
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write("./"))
        .pipe(dest(out));
};

// Watch SCSS files for changes
function watchFiles() {
    watch([paths.baseSrcAssets + "scss//*.scss"], series(scss));
}

// Default Task for Development
exports.default = series(
    parallel(plugins, scss),
    parallel(watchFiles)
);

// Build Task for Production
exports.build = series(
    plugins,
    parallel(scss)
);