import LazySizes from './components/lazysizes';
import Loader from './components/loader';
import Links from './components/links';
import Embeds from './components/embeds';
const App = {
    init: async () => {
        await Loader.init();
        await Links.init();
        await Embeds.init();
        const events = document.querySelectorAll('.event')
        events.forEach(e => {
            e.addEventListener('mouseenter', App.events.open)
            e.addEventListener('mouseleave', App.events.close)
        })

        App.current = document.querySelector('.event[data-current=true]')
        App.currentImage = document.querySelector('.hero[data-current=true]')
        if (App.current) {
          App.current.classList.add('active')
          App.currentImage.classList.add('active')
        }
        Loader.loaded();
    },
    events: {
        open: e => {
            document.body.classList.add('events')
            const img = document.querySelector('.hero[data-id="'+e.currentTarget.dataset.id+'"]')
            document.querySelectorAll('.hero').forEach(e => {
              e.classList.remove('active')
            })
            img.classList.add('active')
        },
        close: e => {
            document.body.classList.remove('events')
            document.querySelectorAll('.hero').forEach(e => {
              e.classList.remove('active')
            })
            App.currentImage.classList.add('active')
        }
    }
};
export default App;
