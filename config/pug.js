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
                filename: '../app/views/errors/404.html',
                chunks: ['index'],
                template: path + '/pug/pages/errors/404.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/errors/403.html',
                chunks: ['index'],
                template: path + '/pug/pages/errors/403.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/errors/500.html',
                chunks: ['index'],
                template: path + '/pug/pages/errors/500.pug',
                inject: false
            }),
            // ================ App ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/App/Index.html',
                chunks: ['index'],
                template: path + '/pug/pages/App/Index.pug',
                inject: false
            }),
            // ================ User ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/User/Index.html',
                chunks: ['user'],
                template: path + '/pug/pages/User/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/User/UpdateProfile.html',
                chunks: ['user'],
                template: path + '/pug/pages/User/UpdateProfile.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/User/Login.html',
                chunks: ['login'],
                template: path + '/pug/pages/User/Login.pug',
                inject: false
            }),
            // ================ Profile ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Index.html',
                chunks: ['profileList'],
                template: path + '/pug/pages/Profile/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Create.html',
                chunks: ['createProfile'],
                template: path + '/pug/pages/Profile/Create.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Read.html',
                chunks: ['readProfile'],
                template: path + '/pug/pages/Profile/Read.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Update.html',
                chunks: ['updateProfile'],
                template: path + '/pug/pages/Profile/Update.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Delete.html',
                chunks: ['deleteProfile'],
                template: path + '/pug/pages/Profile/Delete.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Profile/Revert.html',
                chunks: ['revertProfile'],
                template: path + '/pug/pages/Profile/Revert.pug',
                inject: false
            }),
            // ================ Roles ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/Role/Index.html',
                chunks: ['roleList'],
                template: path + '/pug/pages/Role/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Role/Create.html',
                chunks: ['roleCreate'],
                template: path + '/pug/pages/Role/Create.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Role/Read.html',
                chunks: ['roleRead'],
                template: path + '/pug/pages/Role/Read.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Role/Update.html',
                chunks: ['roleUpdate'],
                template: path + '/pug/pages/Role/Update.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Role/Delete.html',
                chunks: ['roleDelete'],
                template: path + '/pug/pages/Role/Delete.pug',
                inject: false
            }),
            // ================ Settlement Account ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/SettlementAccount/Index.html',
                chunks: ['settlementAccountList'],
                template: path + '/pug/pages/SettlementAccount/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/SettlementAccount/Read.html',
                chunks: ['settlementAccountRead'],
                template: path + '/pug/pages/SettlementAccount/Read.pug',
                inject: false
            }),
            // ================     Shop        ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/Shop/Index.html',
                chunks: ['shopList'],
                template: path + '/pug/pages/Shop/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/Shop/Read.html',
                chunks: ['shopRead'],
                template: path + '/pug/pages/Shop/Read.pug',
                inject: false
            }),
            // ================     POS        ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/POS/Index.html',
                chunks: ['posList'],
                template: path + '/pug/pages/POS/Index.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/POS/Create.html',
                chunks: ['posCreate'],
                template: path + '/pug/pages/POS/Create.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/POS/Read.html',
                chunks: ['posRead'],
                template: path + '/pug/pages/POS/Read.pug',
                inject: false
            }),
            new HtmlWebpackPlugin({
                filename: '../app/views/POS/Activate.html',
                chunks: ['posActivate'],
                template: path + '/pug/pages/POS/Activate.pug',
                inject: false
            }),
            // ================     Invoice        ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/Invoice/Index.html',
                chunks: ['invoiceList'],
                template: path + '/pug/pages/Invoice/Index.pug',
                inject: false
            }),
            // ================     Report         ==========================
            new HtmlWebpackPlugin({
                filename: '../app/views/Report/Index.html',
                chunks: ['report'],
                template: path + '/pug/pages/Report/Index.pug',
                inject: false
            }),
        ]
    };
};