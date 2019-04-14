var DashboardPlugin = require("webpack-dashboard/plugin");
const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'localhost:8000',
        scrollRestoreTechnique: 'cookie',
        files: [
            'resources/**',
            'public/**'
        ],
        scrollElements: ['.scroller']
    })
    .webpackConfig({
        plugins: [
            new DashboardPlugin(),
        ],
    });
