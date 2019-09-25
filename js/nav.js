//<=====================================================>//

//<img src="./ul/menu-ico.png" alt="menu icono">

//creacion del icono
const figureA = document.getElementById('figure-activeA');
const figureB = document.getElementById('figure-activeB');
//cambio de Icono

//<=====================================================>//
//cambio de icono y reconocimiento del mismo INICIO

//cambio de icono y reconocimiento del mismo FIN

//media query 800px screen

//toma de datos para la animacion del menu-resp INICIO
const responsive_menu = document.getElementById('responsive-menu');
const menu_modal = document.getElementById('menu-modal');
menu_modal.style.backgroundColor = "#363636";

//toma de datos para la animacion del menu-resp FIN

//================================================//

//animacion del menu-resp INICIO

function visualElement(element, option, optionAnime, op1, op2, sc1, sc2) {
    anime({
        targets: optionAnime,
        keyframes: [{
                opacity: op1,
                scale: sc1
            },
            {
                opacity: op2,
                scale: sc2
            }
        ],
        easing: 'easeOutElastic(1,.8)',
        duration: 1200
    });
    setTimeout(() => {
        element.style.display = option;
    }, 1200);
}

figureA.addEventListener('click', iconActiveA);

function iconActiveA() {
    visualElement(figureA, "none", '#figure-activeA', 1, 0, 1, 0);
    visualElement(figureB, "flex", '#figure-activeB', 0, 1, 0, 1);
    animacionEntradaDiv(-100, 0, 0, 1);
    animacionEntradaLi(-100, 100, 0);
}

figureB.addEventListener('click', iconActiveB);

function iconActiveB() {
    visualElement(figureB, "none", '#figure-activeB', 1, 0, 1, 0);
    visualElement(figureA, "flex", '#figure-activeA', 0, 1, 0, 1);
    animacionEntradaDiv(0, 1, -100, 0);
    animacionEntradaLi(0, -100, -100);
}

function animacionEntradaLi(a, b, c) {
    setTimeout(() => {
            anime({
                targets: '.menu-resp',
                keyframes: [
                    { translateX: a },
                    { translateX: b },
                    { translateX: c }
                ],
                loop: false,
                delay: function(el, i, l) {
                    return i * 100;
                },
                endDelay: function(el, i, l) {
                    return (l - i) * 100;
                }
            });
        },
        1000);
}

function animacionEntradaDiv(a, b, c, d) {
    anime({
        targets: '#menu-modal',
        keyframes: [
            { translateY: a, opacity: b },
            { translateY: c, opacity: d }
        ],
        easing: 'easeOutElastic(1,.8)',
        duration: 2000
    });

}

//animacion del menu-resp FIN


//detecto el tamaño de pantalla INICIO

if (screen.width > 801) {
    figureA.style.display = "none";
}

//detecto el tamaño de pantalla FIN