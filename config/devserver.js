//const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = function(path) {
    return {
        devServer: {
            stats: 'errors-only',
            contentBase: path,
            compress: true,
            port: 9000
          }
    };
};