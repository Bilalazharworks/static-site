import greenSockAnimationPlatform from 'gsap';

$(function () {

    const nav = $('.site-navbar');
    const navAnimation = greenSockAnimationPlatform.timeline({
        paused: true
    });
    const topThreshold = 2;

    $(window).scroll(function () {
        if (getCurrentPosition() >= topThreshold) {
            navAnimation.play();
        } else {
            navAnimation.reverse();
        }
    });

    function getCurrentPosition() {
        return $(window).scrollTop();
    }

    navAnimation.to(nav, 0.5, {
        backgroundColor: '#025BA6',
        ease: "back.inOut(0.5)"
    });
});

// Site Navigation Overflow Stopped on Navbar Toggle
$('#main-nav').on('shown.bs.collapse', function () {
    $('body').addClass('overflow-stopped');
    $('.site-header').addClass('menu-shown');

}).on('hide.bs.collapse', function () {
    $('body').removeClass('overflow-stopped');
    $('.site-header').removeClass('menu-shown');
});

$(document).on(
    'click',
    function (event) {
        var target = $(event.target);
        var _mobileMenuOpen = $(".navbar-collapse").hasClass("show");
        if (_mobileMenuOpen === true && !target.hasClass("navbar-toggler")) {
            $('#main-nav').collapse('hide');
        }
    }
);