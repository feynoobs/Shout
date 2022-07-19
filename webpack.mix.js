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


mix
    .js('resources/js/app.js', 'public/js')
    .ts('resources/js/admin/admin.ts', 'public/js/admin/')
    .sass('resources/sass/admin/login.scss', 'public/css/admin/')
    .vue();
