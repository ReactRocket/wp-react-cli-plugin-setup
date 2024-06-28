module.exports = {
    webpack: {
      configure: {
        output: {
          filename: 'static/js/[name].js',
          chunkFilename: 'static/js/[name].chunk.js',
        },
      },
    },
  };
  