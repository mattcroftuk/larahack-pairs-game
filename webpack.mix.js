let mix = require('laravel-mix');
var tailwindcss = require('tailwindcss');


mix.js('resources/assets/js/app.js', 'public/js');

mix.less('resources/assets/less/app.less', 'public/css')
    .options({
        postCss: [
            tailwindcss('./tailwind.js'),
        ]
    });