import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener("DOMContentLoaded", function() {
    document.body.style.display = "block";
});

Alpine.start();
