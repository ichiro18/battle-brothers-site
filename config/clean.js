const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = function() {
    var pathsToClean = [
        'dist',
        'revel/public'
    ];

// the clean options to use
    var cleanOptions = {
        root:     path.join(__dirname, '../..', 'test3'),
        exclude:  ['shared.js'],
        verbose:  true,
        dry:      false
    };
    return {
        plugins: [
            new CleanWebpackPlugin(pathsToClean, cleanOptions),
        ],
    };
};