const {mix} = require('laravel-mix');

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

mix.js('resources/assets/js/web.js', 'public/js')
    .scripts([
        'resources/assets/js/vanilla/menu.js',
        'resources/assets/js/vanilla/analytics.js'
    ], 'public/js/all.js');
