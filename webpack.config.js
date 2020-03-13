const util = require('gulp-util');
const isProduction = util.env.production ? true : false;
const config = {
    webpack: {
        mode: isProduction ? 'production' : 'development',
        output: {
            filename: 'app.js',
        },
        devtool: isProduction ? 'source-map' : 'cheap-source-map',
        optimization :{
            minimize: isProduction ? true : false
        },
        module: {
            rules: [
                {
                    test: /\.(js|jsx)$/,
                    exclude: /(node_modules)/,
                    loader: 'babel-loader',
                    query: {
                        presets: [
                            "@babel/preset-env",
                        ],
                    },
                },
            ],
        },
    },
    isProduction: isProduction
}

module.exports = config;