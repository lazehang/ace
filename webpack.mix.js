let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
	'resources/assets/css/jcarousel.min.css', 
	'resources/assets/css/main.css'
	], 'public/css/style.css');

mix.scripts([
	'resources/assets/js/jcarousel.min.js',
	'resources/assets/isotope-docs/isotope.pkgd.min.js',
	'resources/assets/js/custom.js'
	], 'public/js/main.js');
	