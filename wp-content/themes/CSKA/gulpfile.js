/******************************Пути*************************************/
var npmDir           = './node_modules',
    main_src         = './assets',
    dirHtml_src      = './templates',
    dirStyles_src    = main_src+'/styles',
    dirScripts_src   = main_src+'/scripts',
    dirImg_src       = main_src+'/images',
    dirFonts_src     = main_src+'/fonts',

    main_dist        = './dist',
    dirHtml_dist     = main_dist,
    dirStyles_dist   = main_dist+'/css',
    dirScripts_dist  = main_dist+'/js',
    dirImg_dist      = main_dist+'/images',
    dirFonts_dist    = main_dist+'/fonts';

/**************************Зависимости*************************************/
var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    browserSync   = require('browser-sync').create(),
    concat        = require('gulp-concat'),
    uglify        = require('gulp-uglify'),
    cssnano       = require('gulp-cssnano'),
    rename        = require('gulp-rename'),
    del           = require('del'),
    imagemin      = require('gulp-imagemin'),
    pngquant      = require('imagemin-pngquant'),
    cache         = require('gulp-cache'),
    autoprefixer  = require('gulp-autoprefixer'),
    postcss       = require('gulp-postcss'),
    htmlmin       = require('gulp-htmlmin'),
    inlineCss     = require('gulp-inline-css'),
    nunjucks      = require('gulp-nunjucks'),
    pump          = require("pump"),
    csso          = require("gulp-csso"),
    plumber       = require('gulp-plumber'),
    wait          = require('gulp-wait'),
    nunjucksRender= require('gulp-nunjucks-render');

/**************************Компиляция SASS*************************************/
gulp.task('sass', function() {
    return gulp.src(dirStyles_src + '/*.{sass, scss}')
    .pipe(plumber())
    .pipe(wait(500))
    // .pipe(concat("main.css"))
    .pipe(
        sass({
            outputStyle: 'compressed'
        })
    )
    .pipe(autoprefixer(['last 25 versions', 'ie 8', 'ie 7'], {
        cascad: true
    }))
    .pipe(csso({
        restructure: false
    }))
    .pipe(gulp.dest(dirStyles_dist))
    .pipe(concat("main.min.css"))
    .pipe(gulp.dest(dirStyles_dist))
    .pipe(browserSync.stream());
});

/**************************Vendor СSS*****************************************/
gulp.task("css-libs", function () {
    return gulp.src([
            npmDir + '/swiper/dist/css/swiper.css',
            npmDir + '/reset-css/reset.css',
            npmDir + '/flexboxgrid/css/flexboxgrid.min.css',
            // npmDir + '/aos/dist/aos.css'
        ])
        .pipe(concat("vendor.min.css"))
        // .pipe(uglify())
        .pipe(gulp.dest(dirStyles_dist));
});

/**************************Vendor JS*******************************************/
gulp.task('scripts_libs', function() {
    return gulp.src([
        npmDir + '/jquery/dist/jquery.min.js',
        npmDir + '/swiper/dist/js/swiper.js',
    ])
    .pipe(concat('libs.min.js'))
    // .pipe(uglify())
    .pipe(gulp.dest(dirScripts_dist))
    .pipe(browserSync.stream());
});

/**************************main JS*******************************************/
gulp.task('scripts_main', function() {
    return gulp.src(dirScripts_src+'/*.js')
        .pipe(plumber())
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(dirScripts_dist));
});

/**************************Browser Sync****************************************/
gulp.task('browser-sync', function(){
    browserSync.init({
        server: {
            baseDir: "./"
        },
        notify:false
    });

    gulp.watch([dirStyles_src +'/**/*.{sass, scss}'], ['sass']).on("change", browserSync.reload);
    gulp.watch([dirImg_src]).on("change", browserSync.reload);
    gulp.watch([dirScripts_src+'/**/*.js']) .on("change", browserSync.reload);
    gulp.watch([dirFonts_src], ["fonts"]).on("change", browserSync.reload);
//   gulp.watch([dirHtml_src+ "/**/*.html"]).on("change", browserSync.reload);
});


gulp.task('clean', function(){
    return del.sync(main_dist);
});

gulp.task('cleare', function(){
    return cache.clearAll();
});

/**************************Уменьшение изображений******************************/
gulp.task('img', function(){
    return gulp.src(dirImg_src+'/**/*')
        // .pipe(cache(imagemin({
        //     interlaced: true,
        //     progressive: true,
        //     svgoPlugins: [{removeViewBox: false}],
        //     use: [pngquant()]
        // })))
        .pipe(gulp.dest(dirImg_dist));
});

/************************************Replase fonts******************************/
gulp.task('fonts', function() {
  return gulp.src(dirFonts_src+'/**/*')
    .pipe(gulp.dest(dirFonts_dist));
});

/**************************Инлайн CSS******************************************/
/*gulp.task('inlineCss', function() {
 return gulp.src('app/*.html')
 .pipe(inlineCss({
 applyStyleTags: true,
 applyLinkTags: true,
 removeStyleTags: true,
 removeLinkTags: true
 }))
 });*/

/**************************************Сжатие html******************************/
gulp.task('minify_html', function() {
    return gulp.src(dirHtml_src+'/*.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest(main_dist));
});

/*******************************Обработчик ошибок******************************/
function log(error) {
    console.log([
        '',
        "----------ERROR MESSAGE START----------".bold.red.underline,
        ("[" + error.name + " in " + error.plugin + "]").red.bold.inverse,
        error.message,
        "----------ERROR MESSAGE END----------".bold.red.underline,
        ''
    ].join('\n'));
    this.end();
}

/*************************************WATCH************************************/
gulp.task('watch', ['sass', 'img', 'css-libs', 'scripts_main', 'scripts_libs', 'fonts'], function() {
    gulp.watch([dirStyles_src + '/**/*.{sass, scss}'], ['sass']);
    gulp.watch([dirImg_src]);
    gulp.watch([dirScripts_src + '/**/*.js'], ['scripts_main']);
    gulp.watch([dirFonts_src], ["fonts"]);
});

gulp.task('default', ['watch']);


/*************************************СБОРКА***********************************/
gulp.task('build', ['clean', 'img', 'scripts_main', 'scripts_libs', 'css-libs', 'sass', 'fonts']);
