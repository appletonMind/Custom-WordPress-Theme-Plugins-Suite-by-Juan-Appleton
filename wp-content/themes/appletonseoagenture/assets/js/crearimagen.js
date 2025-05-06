document.addEventListener("DOMContentLoaded", function() {
    let waehleli = document.querySelectorAll('.cajitasstyle ul li');
    if (waehleli.length === 0) {
        waehleli = document.querySelectorAll('ul.soloseleccionaresto li');
    }

    waehleli.forEach((waele) => {
        waele.classList.add('organizartodo');
        const erstellimg = document.createElement('img');
        erstellimg.setAttribute('src', custom_field_url);
        erstellimg.setAttribute('alt', 'icons');
        erstellimg.classList.add('miniarrow');
        waele.insertAdjacentElement('afterbegin', erstellimg);
    });
});