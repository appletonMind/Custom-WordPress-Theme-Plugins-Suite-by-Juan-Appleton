// carrusel el movimiento

const carrusel = document.querySelector('.sliderdeimagenes');
let maxscrollleft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1;

const start = () => {
    intervalo = setInterval(() => {

        carrusel.scrollLeft = carrusel.scrollLeft + step
        if (carrusel.scrollLeft === maxscrollleft) {
            step = step * -1;
        } else if (carrusel.scrollLeft === 0) {
            step = step * -1;
        }
    }, 10);

};

const stop = () => {
    clearInterval(intervalo)
};

const cajitadeevento = document.querySelectorAll('cadacajitadeproyecto')

document.addEventListener('DOMContentLoaded', start)

carrusel.addEventListener('mouseover', stop);
carrusel.addEventListener('mouseout', start)




