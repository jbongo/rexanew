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

mix.styles(
   	[
   	'resources/assets/front/css/style.css',
   	'resources/assets/front/css/bootstrap.min.css',
   	'resources/assets/front/css/animate.css',
   	'resources/assets/front/css/font-awesome.min.css',
   	], 

   	'public/css/app.css')

   .scripts(
   	[
   	'resources/assets/front/js/bootstrap.bundle.min.js',
   	'resources/assets/front/js/bootstrap.min.js',
   	'resources/assets/front/js/contactform.js',
   	'resources/assets/front/js/easing.min.js',
   	'resources/assets/front/js/hoverIntent.js',
   	'resources/assets/front/js/jquery.min.js',
   	'resources/assets/front/js/jquery-migrate.min.js',
   	'resources/assets/front/js/main.js',
   	'resources/assets/front/js/superfish.min.js',
   	'resources/assets/front/js/waypoints.min.js',
   	'resources/assets/front/js/wow.min.js',
   	
   	],
   	'public/js/app.js');
