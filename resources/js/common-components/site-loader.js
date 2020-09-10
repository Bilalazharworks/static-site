import gsap from 'gsap';

$(function () {

    const rect = $('.site-loader svg rect');

    const tween = gsap.fromTo(rect,
        {
            attr: {
                "y": "112"
            }
        },
        {
            attr: {
                "y": "-112"
            },
            duration: 3.5,
            ease: "back.in",
            repeat: -1,
            repeatDelay: 0.5,
        }
    );



});
