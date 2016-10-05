var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['app.scss','style.scss','popup.scss','fancybox.scss','multi-select.scss']);
    mix.scripts(["app.js", "jquery.fancybox.js","jquery.magnific-popup.js","responsive-nav.js","jquery.multi-select.js"]); // ,"jquery.easydropdown.js"
});
