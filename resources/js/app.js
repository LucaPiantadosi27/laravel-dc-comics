import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss';

// JS Bootstrap
import '~bootstrap/js/index.esm.js';


// Precompilazione immagini
import.meta.glob([
    '../img/**'
    ]);