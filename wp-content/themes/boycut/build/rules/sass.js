const isdev = require('isdev')
const autoprefixer = require('autoprefixer')

const ExtractTextPlugin = require("extract-text-webpack-plugin")

const config = require('../app.config')

module.exports = {
  test: /\.pcss$/,
  // include: config.paths.sass,
  use: ExtractTextPlugin.extract({
    fallback: 'style-loader',
    use: [
      { loader: 'css-loader', options: { importLoaders: 1 } },
      'postcss-loader'
    ]
  })
}
