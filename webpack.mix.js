let mix = require('laravel-mix');

// mix.copyDirectory('node_modules/font-awesome/css', 'public/fonts/vendor/font-awesome/css');
// mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts/vendor/font-awesome/fonts');

mix.react('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .scripts([
   	'node_modules/jquery/dist/jquery.min.js',
   	'node_modules/materialize-css/dist/js/materialize.min.js',
   	'node_modules/sweetalert/dist/sweetalert.min.js'
   	], 'public/js/vendor.js');
