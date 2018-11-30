const Loader = {
  node: null,
  init: () => {
    Loader.node = document.querySelector('#loader');
  },
  loading: () => {},
  loaded: () => {
    if(Loader.node) Loader.node.style.display = 'none';
    setTimeout(function() {
      document.body.classList.add('loaded')
    }, 1300);
    setTimeout(function() {
      document.body.classList.add('full')
    }, 2300);
  }
}

export default Loader;