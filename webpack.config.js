module.exports = [
  {
    entry: {
      "anatolia-node-hero": "./app/components/anatolia-node-hero.vue",
      "widget-theme": "./app/components/widget-theme.vue",
      "theme-configure": "./app/views/theme-configure.js",
    },
    output: {
      filename: "./app/bundle/[name].js"
    },
    module: {
      loaders: [
          { test: /\.vue$/, loader: "vue" }
      ]
    }
  }
];
