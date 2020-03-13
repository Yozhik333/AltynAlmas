const gulp = require('gulp');
const consolidate = require('gulp-consolidate');
const iconfont = require('gulp-iconfont');
const gulpLoadPlugins = require('gulp-load-plugins');
const autoprefixer = require('autoprefixer');
const assets = require('postcss-assets');
const browserSync = require('browser-sync');
const del = require('del');
const cssnano = require('cssnano');
const pxtorem = require('postcss-pxtorem');
const selectorMatches = require('postcss-selector-matches');
const watch = require('gulp-watch');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
const webpackConfig = require('./webpack.config.js').webpack;

const uglify = require('gulp-uglify-es').default;

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

const PATHS = {
  build: 'dist',
  temp: '.tmp',
  src: 'app'
};
// **********************************************************************

gulp.task('views', () => {
  return gulp.src(PATHS.src +'/templates/**/*.html')
    .pipe($.plumber({errorHandler: $.notify.onError("Error: <%= error.message %>")}))
    .pipe($.nunjucksRender({path: PATHS.src +'/templates'}))
    .pipe(gulp.dest( PATHS.temp ))
    .pipe(reload({stream: true}));
});

gulp.task('iconfont', function () {
   return gulp.src(PATHS.src+'/images/svg-src/*.svg')
        .pipe(iconfont({
            fontName: 'iconfont',
            formats: ['ttf', 'woff', 'svg'],
            appendCodepoints: true,
            appendUnicode: false,
            normalize: true,
            fontHeight: 1000,
            centerHorizontally: true
        }))
        .on('glyphs', function (glyphs, options) {
            gulp.src(PATHS.src+'/styles/iconfont-source/_icons-source.scss')
                .pipe(consolidate('underscore', {
                    glyphs: glyphs,
                    fontName: options.fontName,
                    fontDate: new Date().getTime()
                }))
                .pipe($.rename('_icons.scss'))
                .pipe(gulp.dest(PATHS.src+'/styles'));

            gulp.src(PATHS.src+'/styles/iconfont-source/_icons-source.html')
                .pipe(consolidate('underscore', {
                    glyphs: glyphs,
                    fontName: options.fontName
                }))
                .pipe(gulp.dest(PATHS.build+'/iconfont'));
        })
        .pipe(gulp.dest(PATHS.src+'/fonts'));
});

gulp.task('styles', () => {
  return gulp.src( PATHS.src +'/styles/**/*.scss')
    .pipe($.plumber({errorHandler: $.notify.onError("Error: <%= error.message %>")}))
    .pipe($.sourcemaps.init())
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 10,
      includePaths: ['.'],
    }).on('error', $.sass.logError))
    .pipe($.postcss([
      assets({
        basepPath: PATHS.src +'/',
        cachebuster: true,
        loadPaths: [ PATHS.src +'/images/'],
      }),
      selectorMatches(),
      pxtorem({
        propWhiteList: [
          'font', 'font-size', 'line-height',
          'margin', 'margin-top', 'margin-right', 'margin-bottom', 'margin-left',
          'padding', 'padding-top', 'padding-right', 'padding-bottom', 'padding-left',
          'left', 'right', 'top', 'bottom',
          'width', 'height', 'min-width', 'max-width', 'max-height', 'min-height',
          'border-radius', 'border-top-left-radius', 'border-top-right-radius', 'border-bottom-left-radius', 'border-bottom-right-radius',
          'border-width', 'border-left-width', 'border-right-width', 'border-top-width', 'border-bottom-width', 'border'
        ],
      }),
      autoprefixer({
        browsers: ['last 4 versions'],
        cascade: false
      }),
    ]))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest( PATHS.temp +'/styles'))
    .pipe(reload({stream: true}));
});

// gulp.task('scripts', () => {
//   return gulp.src( PATHS.src +'/scripts/**/*.js')
//     .pipe($.plumber({errorHandler: $.notify.onError("Error: <%= error.message %>")}))
//     .pipe($.sourcemaps.init())
//     .pipe($.babel({
//         presets: ['@babel/env']
//     }))
//     .pipe($.sourcemaps.write('.'))
//     .pipe(gulp.dest( PATHS.temp +'/scripts'))
//     .pipe(reload({stream: true}));
// });
gulp.task('scripts', () => {
  return gulp.src( PATHS.src +'/scripts/app.js')
    .pipe($.plumber({errorHandler: $.notify.onError("Error: <%= error.message %>")}))
    .pipe(webpackStream(webpackConfig), webpack)
    .pipe(gulp.dest( PATHS.temp +'/scripts'))
    .pipe(reload({stream: true}));
});

gulp.task('html', ['views', 'styles', 'scripts'], () => {
  return gulp.src( PATHS.temp +'/*.html')
    .pipe($.prettify({
      indent_size: 2,
      wrap_attributes: 'auto', // 'force'
      preserve_newlines: false,
      end_with_newline: true
    }))
    .pipe($.useref({
      searchPath: [ PATHS.temp, PATHS.src, '.'],
      noAssets: false
    }))
    .pipe(gulp.dest( PATHS.build ));
});

gulp.task('images', () => {
  return gulp.src(PATHS.src +'/images/*.*')
    .pipe(gulp.dest( PATHS.build +'/images'));
});

gulp.task('svg', () => {
  return gulp.src(PATHS.src +'/images/svg/*.svg')
    .pipe(gulp.dest( PATHS.build +'/images/svg'));
});

gulp.task('samples', () => {
  return gulp.src(PATHS.src +'/images/samples/*.*')
    .pipe($.cache($.imagemin()))
    .pipe(gulp.dest( PATHS.build +'/images/samples'));
});

gulp.task('fonts', () => {
  return gulp.src( PATHS.src +'/fonts/**/*')
    .pipe(gulp.dest( PATHS.build +'/fonts'));
});

gulp.task('extras', () => {
  return gulp.src([
    PATHS.src +'/*.*',
    '!'+ PATHS.src +'/*.html',
  ], {
    dot: true
  }).pipe(gulp.dest( PATHS.build ));
});
// **********************************************************************

gulp.task('minify:css', () => {
  return gulp.src( PATHS.build +'/css/*.css')
    .pipe($.cache($.postcss([cssnano({autoprefixer: false})])))
    .pipe(gulp.dest( PATHS.build +'/css' ));
});

gulp.task('minify:js', () => {
  return gulp.src( PATHS.build +'/js/*.js')
    .pipe(uglify({
      compress: true
    }))
    .pipe(gulp.dest( PATHS.build +'/js' ));
});

gulp.task('minify', ['minify:css','minify:js'], () => {
  return gulp.src( PATHS.build +'/**/*');
});
// **********************************************************************

gulp.task('clean', del.bind(null, [ PATHS.temp, PATHS.build ]));

gulp.task('serve', ['views', 'styles', 'scripts', 'iconfont'], () => {
  browserSync({
    port: 9000,
    server: {
      baseDir: [ PATHS.temp, PATHS.src],
      routes: {
        '/node_modules': 'node_modules',
        '/bower_components': 'bower_components',
      }
    },
    logLevel: 'info', // 'debug', 'info', 'silent', 'warn'
    logConnections: false,
    logFileChanges: true,
    notify: false,
    ghostMode: false,
  });

  watch([
    PATHS.src +'/scripts/**/*.js',
    PATHS.src +'/images/**/*',
    PATHS.temp +'/fonts/**/*',
    PATHS.temp +'/**/*.html',
  ], reload);

  watch(PATHS.src +'/styles/**/*.scss', () => {
    gulp.start('styles');
  });
  watch(PATHS.src +'/scripts/**/*.js', () => {
    gulp.start('scripts');
  });
  watch(PATHS.src +'/images/svg-src/*.svg', () => {
    gulp.start('iconfont');
  });
  watch(PATHS.src +'/fonts/**/*', () => {
    gulp.start('fonts');
  });
  watch(PATHS.src +'/templates/**/*.html', () => {
    gulp.start('views');
  });
});

gulp.task('build', ['html','iconfont', 'images', 'fonts', 'samples','svg', 'extras'], () => {
  gulp.start('minify');
});

gulp.task('default', ['clean'], () => {
  gulp.start('build');
});
