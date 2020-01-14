//plug-in
// gulp
const { src, dest, watch } = require("gulp");
var gulp     = require("gulp");
// Sassコンパイル
const sass = require("gulp-sass");
// css圧縮
var cleanCSS = require("gulp-clean-css");
// ファイル名変更
var rename   = require("gulp-rename");
// 画像圧縮
const imagemin = require('gulp-imagemin'),
      // 変更された画像だけを抽出
      changed = require('gulp-changed'),
      // 処理の終了をお知らせ
      notify = require('gulp-notify');

/**
 * 画像を圧縮するタスク
 */
const docs = '.',
      distDir =  docs + '/dist/images',
      srcDir =  docs + '/img';
gulp.task("imagemin", () => {
  return gulp.src(srcDir + '/*.+(png|jpg|gif|svg|jpeg)')
    .pipe(changed(distDir))  // src と dist を比較して異なるものだけ処理
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.jpegtran({progressive: true}),
      imagemin.optipng({optimizationLevel: 5})
      ]
    ))
    .pipe(gulp.dest(distDir))  // 保存
    .pipe(notify('&#x1f363; images task finished &#x1f363;'));
});

/**
 * CSSを圧縮するタスク
 */
gulp.task("min-css", () => {
    return gulp.src('css/style.css')
        .pipe(cleanCSS())
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest('css/'))
        .pipe(notify('&#x1f363; mincss task finished &#x1f363;'));
});

/**
 * Sassをコンパイルするタスク
 */
gulp.task("compileSass", () => {
    return gulp.src("scss/style.scss")
    // Sassのコンパイルを実行
    .pipe(sass())
    // cssフォルダー以下に保存
    .pipe(gulp.dest("css"))
    .pipe(notify('&#x1f363; compileScss task finished &#x1f363;'));
});


/**
 * タスクの自動化
 */

 gulp.task('watch',function(){
   gulp.watch("scss/**/*.scss", gulp.series('compileSass')),
   gulp.watch("css/style.css", gulp.series('min-css')),
   gulp.watch(srcDir + '/*.+(png|jpg|gif|svg|jpeg)', gulp.series('imagemin'));
 });

 gulp.task("default",
  gulp.series(
    'watch'
  )
);
