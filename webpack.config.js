const path = require('path');
const webpack = require('webpack');
const NodemonPlugin = require( 'nodemon-webpack-plugin' );
var glob = require("glob");

module.exports = {
  entry: {
    js: glob.sync("./assets/js/**/*.js"),  
  },
  output: {
    filename: 'bundle.js',
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
  "window.Popper": "popper.js",
  'Swiper': 'swiper.js',
  "window.Swiper": "swiper.js"
}),
  ]
};