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
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/assets/guest_template/modules/bootstrap/css/bootstrap.min.css',
    'public/assets/guest_template/css/style.css',
    'public/assets/guest_template/css/components.css',
], 'public/css/template-guest.css').version();

mix.scripts([
    'public/assets/guest_template/modules/jquery.min.js',
    'public/assets/guest_template/modules/popper.js',
    'public/assets/guest_template/modules/tooltip.js',
    'public/assets/guest_template/modules/bootstrap/js/bootstrap.min.js',
    'public/assets/guest_template/modules/nicescroll/jquery.nicescroll.min.js',
    'public/assets/guest_template/modules/moment.min.js',
    'public/assets/guest_template/js/stisla.js',
    'public/assets/guest_template/js/scripts.js',
    'public/assets/guest_template/js/custom.js',
], 'public/js/template-guest.js').version();