let mix = require('laravel-mix');
let ImageminPlugin    = require('imagemin-webpack-plugin').default;
let CopyWebpackPlugin = require('copy-webpack-plugin');
let imageminMozjpeg   = require('imagemin-mozjpeg');

mix.sass('assets/src/scss/app.scss', 'css')
    .js('assets/src/js/app.js', 'js')
    .webpackConfig({
        plugins: [
            new CopyWebpackPlugin({
                patterns: [
                    {
                        from: 'assets/src/img/',
                        to: 'img/',
                    },
                ],
            }),
            new ImageminPlugin({
                disable: !mix.inProduction(),
                test: /\.(jpe?g|png|gif|svg)$/i,
                optipng: {
                    optimizationLevel: 5,
                },
                gifsicle: {
                    optimizationLevel: 2,
                },
                jpegtran: {
                    progressive: false,
                },
                plugins: [
                    imageminMozjpeg({
                        quality: 80,
                    })
                ]
            })
        ]
    }) // Theme and plugin img
    .setPublicPath('assets/dist')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    })
    .extract()
    .version()
    .disableSuccessNotifications();
