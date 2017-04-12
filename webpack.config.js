module.exports = {
 entry: "./js/main.js",
 output: {
   filename: "./js/build/bundle.js"
 },
 module: {
   loaders: [
     {
       test: /\.js$/,
       exclude: /node_modules/,
       loader: 'babel-loader',
       query: {
         presets: ['es2015'] 
       }
     },
    {
      test: /\.scss$/,
      exclude: /node_modules/,
      loader: 'style-loader!css-loader!sass-loader',
    },
    { 
      test: /\.(woff|png|jpg|svg)$/, 
      loader: 'url-loader?limit=10000' 
    }
   ]
 },
}