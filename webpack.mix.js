const mix = require('laravel-mix');

mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
});


mix.js('resources/js/app.js', 'public/js').vue();
mix.js('resources/js/admin.js', 'public/js').vue();
mix.sass('resources/sass/app.scss', 'public/css');