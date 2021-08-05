var hypernova = require('hypernova/server');

hypernova({
  devMode: true,

  getComponent(name) {
    if (name === 'HypernovaExampleReact.js') {
      return require('./components/MyComponent.jsx');
    }
    return null;
  },

  port: 3030,
});
