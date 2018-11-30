import './src/css/app.styl';
import App from './src/js';
require('viewport-units-buggyfill').init();

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
