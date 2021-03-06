var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');
    //mix.less('admin-lte/AdminLTE.less');
    //mix.less('bootstrap/bootstrap.less');
    //
    //mix.scripts([
    //    'sweetalert-dev.js'
    //]);
    //
    //mix.styles([
    //    'sweetalert.css',
    //    'pricingtables.css'
    //]);

    mix.scripts([
        'notifications-shotout.js'
    ]);
    mix.browserify('main.js');
});
