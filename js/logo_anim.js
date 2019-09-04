

window.onload= function(){
            anime({
                targets: '#logo',
                keyframes:[
                    {translateY: -0, opacity: 0, scale: 0.7},
                    {translateY: -100, opacity: 1, scale: 0.9}
                ],
                rotate: '1turn',
                easing: 'easeOutElastic(1,.8)',
                duration: 2000

            });
}

