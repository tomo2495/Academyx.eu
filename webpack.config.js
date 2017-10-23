const path = require('path');
const webpack = require('webpack');
var glob = require("glob");
var UnminifiedWebpackPlugin = require('unminified-webpack-plugin');

module.exports = {
  entry: {
    app: glob.sync("./assets/js/js/**/*.js"),
    libs: glob.sync("./assets/js/libs/**/*.js"),
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, './public/js')
  },
  plugins: [
    new webpack.ProvidePlugin({
		$: "jquery",
		jQuery: "jquery",
		"window.jQuery": "jquery",
		Tether: "tether",
		"window.Tether": "tether",
		'Popper': 'popper.js',
		"window.Popper": "popper.js"
	}),
	new webpack.optimize.UglifyJsPlugin({
        compress: {
            warnings: false
        }
    }),
    new UnminifiedWebpackPlugin()
  ]
};