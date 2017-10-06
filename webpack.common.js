const ProvidePlugin = require('webpack/lib/ProvidePlugin'); 

/*
 * Sass loader (required for Bootstrap 4)
 */
{
  test: /\.css$/,
  use: ['raw-loader']
},

{
  test: /\.scss$/,
  use: ['raw-loader', 'sass-loader']
},

/*
 * Bootstrap 4 loader
 */
{
  test: /bootstrap\/dist\/js\/umd\//,
  use: 'imports-loader?jQuery=jquery'
},

/*
 * Font loaders, required for font-awesome-sass-loader and bootstrap-loader
 */
{
  test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
  loader: "url-loader?limit=10000&mimetype=application/font-woff"
},
{
  test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
  loader: "file-loader"
},