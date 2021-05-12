const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/volt.scss', 'public/css');
    // mix.sass('resources/sass/volt.scss', 'public/css');
/* 
    mix.js('resources/js/app.js', 'public/js')
    .postCSS('resources/scss/app.css', 'public/css');
 */