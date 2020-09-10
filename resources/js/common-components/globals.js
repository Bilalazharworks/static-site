$('a[smooth-scroll]').click(function (event) {
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 140
    }, 500);
    event.preventDefault();
});