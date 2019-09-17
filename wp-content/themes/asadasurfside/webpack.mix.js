const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'js')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery']
    })
    .stylus('resources/stylus/main.styl', './style.css')
    .options({
        processCssUrls: false,
        
        
    })
    .setPublicPath('./');

if (mix.inProduction()) {
    mix.version();
}