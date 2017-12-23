var webpack = require('webpack');
var path = require('path');

var BUILD_DIR = path.resolve(__dirname, 'dist/js');
var APP_DIR = path.resolve(__dirname, 'src/js');

var config = {
  entry: APP_DIR + '/index.js',
  output: {
    path: BUILD_DIR,
    filename: 'ann-options.js'
  },

  devServer: {
     //inline: true,
     port: 8080
  },
  externals: {
    jquery: 'jQuery'
  },
  module : {
    loaders : [
      {
        test : /\.js?/,
        include : APP_DIR,
        exclude: /node_modules/,
        loader : 'babel-loader'
      }
    ]
  }

};

module.exports = config;
