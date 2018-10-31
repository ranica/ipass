//const mix = require('laravel-mix');
let mix = require('laravel-mix');
mix
   // Javascripts
   .js('resources/assets/js/app.js', 'public/js')
 //  .js('resources/assets/js/theme.js', 'public/js')
 //  .js('resources/assets/js/login.js', 'public/js')

   // SASS
   .sass('resources/assets/sass/fonts.scss', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css')
  //.sass('resources/assets/sass/chart.scss', 'public/css')
   .sass('resources/assets/sass/misc.scss', 'public/css')
 //  .sass('resources/assets/sass/login.scss', 'public/css')

   // Directories
   .copyDirectory('resources/assets/vendor/theme/', 'public/theme')
   .copyDirectory('resources/assets/images/', 'public/images')

   // Configs
   .disableNotifications()
   .version();


// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
