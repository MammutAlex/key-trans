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
    .js('resources/assets/js/welcome.js', 'public/js/welcome.js')
    .scripts([
        'resources/assets/js/js/jquery-1.11.1.min.js',
        'resources/assets/js/js/slick.js',
        'resources/assets/js/js/intlTelInput.js',
        'resources/assets/js/js/chosen.jquery.js',
        'resources/assets/js/js/datepicker.js',
        'resources/assets/js/js/map.js',
        'resources/assets/js/js/scripts.js',
    ], 'public/js/all.js')
    .less('resources/assets/less/style.less', 'public/css')
    .version();
