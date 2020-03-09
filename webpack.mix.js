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

mix
    .js('resources/js/app.js', 'public/js')

    //THEME
    .js('resources/js/theme/bootstrap.min.js', 'public/js/theme')
    .js('resources/js/theme/bootstrap-tagsinput.min.js', 'public/js/theme')
    .js('resources/js/theme/carvelley.js', 'public/js/theme')
    .js('resources/js/theme/infobox.min.js', 'public/js/theme')
    .js('resources/js/theme/isotope.pkgd.js', 'public/js/theme')
    .js('resources/js/theme/jarallax.min.js', 'public/js/theme')
    .js('resources/js/theme/jarallax-video.min.js', 'public/js/theme')
    .js('resources/js/theme/jquery.nice-select.min.js', 'public/js/theme')
    .js('resources/js/theme/jquery-3.4.1.min.js', 'public/js/theme')
    .js('resources/js/theme/jquery-steps.js', 'public/js/theme')
    .js('resources/js/theme/jquery-ui.js', 'public/js/theme')
    .js('resources/js/theme/maps.js', 'public/js/theme')
    .js('resources/js/theme/markerclusterer.js', 'public/js/theme')
    .js('resources/js/theme/popper.min.js', 'public/js/theme')
    .js('resources/js/theme/slick.min.js', 'public/js/theme')
    .js('resources/js/theme/wow.js', 'public/js/theme')

    //STYLE
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/fonts', 'public/css/fonts')
    .copyDirectory('resources/css/font', 'public/css/font')
;


mix.scripts([
    //jQuery
    'resources/js/theme/jquery-3.4.1.min.js',
    //Popper
    'resources/js/theme/popper.min.js',
    //Bootstrap
    'resources/js/theme/bootstrap.min.js',
    //jarallex
    'resources/js/theme/jarallax.min.js',
    'resources/js/theme/jarallax-video.min.js',
    //Slick Slider
    'resources/js/theme/slick.min.js',
    //RangeSlider Popup
    'resources/js/theme/jquery-ui.js',
    //isotope
    'resources/js/theme/isotope.pkgd.js',
    //Nice Select
    'resources/js/theme/jquery.nice-select.min.js',
    //Steps
    'resources/js/theme/jquery-steps.js',
    //tags
    'resources/js/theme/bootstrap-tagsinput.min.js',
    //info box
    'resources/js/theme/infobox.min.js',
    //Markerclusterer js
    'resources/js/theme/markerclusterer.js',
    //Maps js
    'resources/js/theme/maps.js',
    //animation
    'resources/js/theme/wow.js',
    //Carvelley Js
    'resources/js/theme/carvelley.js',
], 'public/js/theme/all.js');

mix.styles([
    'resources/css/*.css',
], 'public/css/theme/all.css');


mix.browserSync({
    proxy: 'http://127.0.0.1:8000/'
});
