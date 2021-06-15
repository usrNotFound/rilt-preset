const mix = require('laravel-mix');

let productionSourceMaps = false;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sourceMaps(productionSourceMaps, 'eval-source-map');

if (mix.inProduction()) {
    let ASSET_URL = process.env.ASSET_URL + '/';

    mix.webpackConfig(webpack => {
        return {
            plugins: [
                new webpack.DefinePlugin({
                    'process.env.ASSET_PATH': JSON.stringify(ASSET_URL)
                })
            ],
            output: {
                publicPath: ASSET_URL,
            }
        };
    });
}
