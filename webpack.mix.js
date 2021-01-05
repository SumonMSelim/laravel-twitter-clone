const mix = require('laravel-mix');
require('laravel-mix-postcss-config');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('postcss-nested'),
]).postCssConfig();
