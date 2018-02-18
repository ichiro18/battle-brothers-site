'use strict';
// ====================== Подключаем модули для webpack  ======================
// Внешние модули
const path              = require('path');
const webpack           = require('webpack');
const merge             = require('webpack-merge');
// Внутренние модули
const pug               = require('./config/webpack/pug');
const images            = require('./config/webpack/images');
const cssDev            = require('./config/webpack/css-dev');
const cssProd           = require('./config/webpack/css-prod');
const uglifyJS          = require('./config/webpack/js.uglify');
const clean             = require('./config/webpack/clean');
const devserver         = require('./config/webpack/devserver');
// ============================   Определяем пути   ===========================
const PATHS = {
    source: path.join(__dirname, 'src'),
    build: path.join(__dirname, 'dist'),
};

// ================ Определяем общие функции в common сценарий ================
const common = merge([
    {
        entry: {
            'index': PATHS.source + '/app.js'
        },
        output: {
            path: PATHS.public,
            filename: './js/[name].js'
        },
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                'window.jQuery': 'jquery',
                'window.$': 'jquery'
            })
        ]
    },
    pug(PATHS.source),
    images()
]);
// ===================== Определяем сценарий сборки prod ======================
const production = merge(
    common,
    clean(PATHS.build, PATHS.public),
    cssProd(),
    uglifyJS()
);

// ====================== Определяем сценарий сборки dev ======================
const development = merge(
    common,
    cssDev(),
    revelOn('development'),
    revelWatch(PATHS.revel),
    devserver()
);

// ==============  Запускаем разные сценарии сборки dev/prod ==================
module.exports = function(env) {
    if (env === 'production') {
        return production;
    }
    if (env === 'development') {
        return development
    }
};