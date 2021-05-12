const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
mix.js('resources/js/main.js','public/js')
mix.js('resources/js/jquery.fancybox.min.js','public/js')
mix.copy('resources/css/app.css','public/css/main.css')
mix.copy('resources/css/fancybox.min.css','public/css/fancybox.min.css')
mix.copy('resources/img', 'public/img')
