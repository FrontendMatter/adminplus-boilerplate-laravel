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
    mix.sass('app.scss', null, { importer: require('sass-importer-npm') });
    mix.copy('node_modules/simplebar/dist/simplebar.css', 'public/vendor/simplebar.css');
    mix.browserify('main.js');
});
