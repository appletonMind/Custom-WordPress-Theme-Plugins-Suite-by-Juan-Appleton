const bekommenhamburguesamenu = document.querySelectorAll(".menuamburguesa");
const individualamburhguesa = document.querySelector(".menuamburguesa");
const contenedorclick = document.querySelector(".containermenu");
const header = document.querySelector(".header");
const pageitems = document.querySelectorAll(".page_item");
const seleccionarmenumobil = document.querySelector(".clasemobilcontainer");

function abrirmenu() {
  bekommenhamburguesamenu.forEach((abrirmenu) => {
    abrirmenu.classList.toggle("voltearmenu");
    header.classList.toggle("cambiarcolorheader");
    abrirmenu.children[0].classList.toggle("bewegunslinea1");
    abrirmenu.children[1].classList.toggle("bewegunslinea2");
    abrirmenu.children[2].classList.toggle("bewegunslinea3");
    abrirmenu.nextElementSibling.classList.toggle("traermenu");
    console.log("probando");
  });
}

if (seleccionarmenumobil) {
  individualamburhguesa.addEventListener("click", abrirmenu);
}

// submenu

const submenu = document.querySelectorAll(".sub-menu");

if (submenu ) {
  document.addEventListener("DOMContentLoaded", () => {
    submenu.forEach((submen) => {
      const crearflexha = document.createElement("img");
      crearflexha.setAttribute("alt", "arrow");
      crearflexha.classList.add("arrow", "arrovoltear");
      
      crearflexha.setAttribute(
        "src",
        "http://localhost:8888/miproyectofinalseoparaempresas/wp-content/themes/appletonseoagenture/assets/img/arrow.png"
      );

      submen.previousElementSibling.appendChild(crearflexha);
      submen.classList.add("versionmovilocultar");
    });

    const seleccionarbotonmovil = document.querySelector(
      ".versionmovilocultar"
    );
    const arrowclase = document.querySelector(".arrow");
    const agarrarmenumovil = document.querySelectorAll(".versionmovilocultar");
    let verdadero = false;
    const seleccionarli = document.querySelector("a[aria-current='page']");

    if (screen.width <= 760 && seleccionarli.nextElementSibling) {
      seleccionarbotonmovil.parentElement.addEventListener("click", (e) => {
        verdadero = !verdadero;

        e.preventDefault();
        arrowclase.classList.toggle("moverlaflecha");
        if (e.target.parentElement.id == "menu-item-41") {
          setTimeout(() => {
            window.location.href = "/pia-pagina-web/kontakt/";
          }, 400);
        }
        if (e.target.parentElement.id == "menu-item-20") {
          setTimeout(() => {
            window.location.href = "/pia-pagina-web/ueber-uns/";
          }, 400);
        }

        if (e.target.parentElement.id == "menu-item-43") {
          setTimeout(() => {
            window.location.href = "/pia-pagina-web/inicio/";
          }, 400);
        }

        if (verdadero) {
          agarrarmenumovil.forEach((agarrarmenumovi) => {
            agarrarmenumovi.classList.add("ponermenuentamano");
            agarrarmenumovi.parentElement.style.marginBottom = `${
              agarrarmenumovi.clientHeight + 30
            }px`;
            agarrarmenumovi.parentElement.style.marginTop = `${
              agarrarmenumovi.clientHeight + 30
            }px`;
            let heigth = 0;
            console.log(agarrarmenumovi.clientHeight);
          });
        } else {
          e.preventDefault();
          agarrarmenumovil.forEach((agarrarmenumovi) => {
            agarrarmenumovi.classList.remove("ponermenuentamano");

            agarrarmenumovi.parentElement.style.marginBottom = "0px";
            agarrarmenumovi.parentElement.style.marginTop = "0px";
            let heigth = 0;
            console.log(agarrarmenumovi.clientHeight);
          });
        }
      });
    } else {
      return null;
    }
  });
}

const limitesubmenu = document.querySelector("#menu-item-28");

limitesubmenu.addEventListener("click", () => {
  const submenus = document.querySelectorAll(".sub-menu");
  const arrows = document.querySelectorAll(".arrow"); // Cambié el nombre de la variable para indicar que es una lista de flechas

  submenus.forEach((submenu, index) => { // Usamos el índice para obtener el elemento correspondiente en arrows
    if (submenu.style.height === "0px" || submenu.style.height === "") {
      submenu.style.height = submenu.scrollHeight + "px";
      arrows[index].classList.remove('arrovoltear'); // Usamos el índice para acceder al elemento de flecha correspondiente
    } else {
      submenu.style.height = "0px";
      arrows[index].classList.add('arrovoltear'); // Usamos el índice para acceder al elemento de flecha correspondiente
    }
  });
});
