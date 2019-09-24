const logo = document.getElementById('logo');
logo.style.display = "none";

window.onload = function() {
    logo.style.display = "";
    anime({
        targets: '#logo',
        keyframes: [
            { translateY: -0, opacity: 0, scale: 0.7 },
            { translateY: -80, opacity: 1, scale: 0.9 }
        ],
        rotate: '1turn',
        easing: 'easeOutElastic(1,.8)',
        duration: 2000
    });
}