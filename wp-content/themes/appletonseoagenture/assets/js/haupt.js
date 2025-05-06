// wenn wir uns im administratormodus befinden

window.addEventListener('DOMContentLoaded', () => {
  const holenSiesichdieadminLeisten = document.getElementById('wpadminbar');
  const holenheader = document.querySelector('header');

  if (holenSiesichdieadminLeisten) {
    const heightadminleisten = holenSiesichdieadminLeisten.offsetHeight;
    document.querySelector('header').style.marginTop = heightadminleisten + 'px';
  }

  // Calculamos y aplicamos el margen superior del main después de que el encabezado esté completamente cargado
  const headergrossa = holenheader.offsetHeight;
  const holemain = document.querySelector('main');
  holemain.style.marginTop = headergrossa + 'px';
});



//curremmenu
const seleccioanarmenuunclick = document.querySelectorAll("#menu-menu-submenu");

if (seleccioanarmenuunclick) {
  seleccioanarmenuunclick.forEach((seleccioanarmenuunclic) => {
    seleccioanarmenuunclic.childNodes[0].lastChild.classList.add("pagecurrent");
    seleccioanarmenuunclic.addEventListener("click", (e) => {
      const seleccioanarmenuunclicka = document.querySelectorAll(
        "#menu-menu-submenu li a"
      );

      seleccioanarmenuunclicka.forEach((seleccioanarmenuunclickaa) => {
        if (seleccioanarmenuunclickaa.classList.contains("pagecurrent")) {
          seleccioanarmenuunclickaa.classList.remove("pagecurrent");
        }
      });

      if (
        !e.target.classList.contains("pagecurrent") &&
        e.target.attributes.href.nodeValue.includes("#") &&
        e.target.localName == "a"
      ) {
  

        e.target.setAttribute("class", "pagecurrent");
        
      } else {
        e.target.setAttribute("class", "");
      }
    });
  });
}


function smoothScroll(target) {
  var targetElement = document.querySelector(target);
  if (targetElement) {
      window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth' // Scroll suave
      });
  }
}

