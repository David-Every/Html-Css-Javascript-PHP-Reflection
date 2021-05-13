// // const { src } = require('gulp');
// const gulp = require ('gulp');
// const babel = require ('gulp-babel');
// const uglifycss = require('gulp-uglifycss');


// //writing gulp es6 will run this task
// //compile ES5 to es5 for older browsers
// gulp.task('es6', () => {
//     return gulp.src('src/app.js')
//         .pipe(babel({
//             presets: ['es2015']
//         }))
//         .pipe(gulp.dest('build'));
// });
// // gulp.task('default', function(){
// //      gulp.watch('src/app.js', gulp.series('es6'));
// // });


// //Uglify CSS
// // var uglifycss = require('gulp-uglifycss');

// gulp.task('css', function () {
//     gulp.src('./*.css')
//     .pipe(uglifycss({
//         // "maxLineLen":80,
//         "uglyComments": true
//     }))
//     .pipe(gulp.dest('./dist'));
// });

// gulp.task('run',['css']);
// gulp.task('watch', function () {
//     gulp.watch('./*.css',[css]);
// });

// gulp.task('default',['run' , 'watch']);


