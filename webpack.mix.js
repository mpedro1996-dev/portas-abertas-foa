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
    .js('node_modules/jquery/dist/jquery.js','public/js')
    .copy('node_modules/font-awesome/fonts', 'public/fonts')
    .copy('node_modules/scrollreveal/dist/scrollreveal.js', 'public/js')
    .copy('node_modules/scrollreveal/dist/scrollreveal.min.js', 'public/js');
