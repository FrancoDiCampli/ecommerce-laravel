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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
            'resources/front/fonts/icomoon/style.css',
            'resources/front/css/bootstrap.min.css',
            'resources/front/css/jquery-ui.css',
            'resources/front/css/owl.carousel.min.css',
            'resources/front/css/owl.theme.default.min.css',
            'resources/front/css/jquery.fancybox.min.css',
            'resources/front/css/bootstrap-datepicker.css',
            'resources/front/fonts/flaticon/font/flaticon.css',
            'resources/front/css/aos.css',
            'resources/front/css/style.css',
        ],'public/css/app.css')
        .scripts([
            'resources/front/js/jquery-3.3.1.min.js',
            'resources/front/js/jquery-migrate-3.0.1.min.js',
            'resources/front/js/jquery-ui.js',
            'resources/front/js/popper.min.js',
            'resources/front/js/bootstrap.min.js',
            'resources/front/js/owl.carousel.min.js',
            'resources/front/js/jquery.stellar.min.js',
            'resources/front/js/jquery.countdown.min.js',
            'resources/front/js/bootstrap-datepicker.min.js',
            'resources/front/js/jquery.easing.1.3.js',
            'resources/front/js/aos.js',
            'resources/front/js/jquery.fancybox.min.js',
            'resources/front/js/jquery.sticky.js',
            'resources/front/js/main.js'],'public/js/app.js');
