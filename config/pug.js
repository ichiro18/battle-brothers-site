const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = function(path) {
    return {
        module: {
            rules: [
                {
                    test: /\.(pug|jade)$/,
                    loader: 'pug-loader',
                    options: {
                        pretty: true
                    }
                }
            ]
        },
        plugins: [
            // ================ errors ==========================
            new HtmlWebpackPlugin({
                title: './dist/index.html',
                chunks: ['index'],
                template: path + '/pug/pages/index.pug'
            }),
        ]
    };
};