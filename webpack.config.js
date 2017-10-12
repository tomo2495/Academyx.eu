const path = require('path');
const webpack = require('webpack');
var glob = require("glob");

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
  ]
};