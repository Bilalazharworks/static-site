const mix = require('laravel-mix');



/*
 |--------------------------------------------------------------------------
 | Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix
//     .js('resources/js/scripts.js', '../dev-theme/assets/')
//     .sass('resources/sass/styles.scss', '../dev-theme/assets/');


mix
    .js('resources/js/scripts.js', './assets/')
    .sass('resources/sass/styles.scss', './assets/');


/*
|--------------------------------------------------------------------------
| Mix Options
|--------------------------------------------------------------------------
|
| Add options as per your application requirement
|
*/

mix.options({
    processCssUrls: false
});



/*
 |--------------------------------------------------------------------------
 | BrowserSync Configuration
 |--------------------------------------------------------------------------
 |
 | Enable BrowserSync configuration. Set Proxy, Port and Base directory
 | for your laravel application. By default, we are serving the html
 | files from the root of the application.
 |
 */

mix.browserSync({
    proxy: false,
    port: 3000,
    server: {
        baseDir: './'
    }
});