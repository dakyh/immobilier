const mix = require('laravel-mix');

mix.styles('resources/css/styles.css', 'public/css/styles.css')
   .scripts('resources/js/main.js', 'public/js/main.js')
   .copyDirectory('resources/img', 'public/img')
   .copy('resources/css/swiper-bundle.min.css', 'public/css/swiper-bundle.min.css')
   .copy('resources/js/swiper-bundle.min.js', 'public/js/swiper-bundle.min.js')
   .copy('resources/js/scrollreveal.min.js', 'public/js/scrollreveal.min.js');
