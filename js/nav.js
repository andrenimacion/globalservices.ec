//media query 800px screen

//animacion del menu-resp INICIO
const responsive_menu = document.getElementById('responsive-menu');
const menu_modal = document.getElementById('menu-modal');
menu_modal.style.backgroundColor = "#363636";

responsive_menu.addEventListener('click', showMenuResponsive);
responsive_menu.addEventListener('mouseover', showCursor);


function showCursor() {
    responsive_menu.style.cursor = "pointer";
}


function showMenuResponsive() {

    anime({
        targets: '#menu-modal',
        keyframes: [
            { translateY: -100, opacity: 0 },
            { translateY: 0, opacity: 1 }
        ],
        easing: 'easeOutElastic(1,.8)',
        duration: 2000
    });
    setTimeout(() => {
        anime({
            targets: '.menu-resp',
            keyframes: [
                { translateX: 0 },
                { translateX: 100 },
                { translateX: 0 }
            ],
            loop: false,
            delay: function(el, i, l) {
                return i * 100;
            },
            endDelay: function(el, i, l) {
                return (l - i) * 100;
            }
        });
    }, 1000);
}

//animacion del menu-resp FIN

//==========================//

//animacion del menu-resp INICIO



//animacion del menu-resp FIN