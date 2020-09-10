$('.select-option input[type="radio"]').on('change', function (e) {
    e.preventDefault();

    getJsonData();

    var $this = $(this);
    var $parent = $this.closest('.select-option');
    var $progress = $parent.data('step');

    if (!$parent.is('.selected')) {
        $('.battery-picker__showcase .content-loading').attr('class', 'content-loading step-' + $progress + '-completed');
    }

    $parent.addClass('selected').next().addClass('active');

    if ($('.select-option[data-step="4"]').is('.active')) {
        $('.battery-picker__showcase .content-loading-wrapper').addClass('d-none');
        $('.battery-picker__showcase .carousel-main').removeClass('d-none');
        $findBatteriesMain.flickity('resize');
    }
});




function getJsonData() {
    $.getJSON('https://floridalithium.com/products.json', function (response) {
        console.log(response);
    });
}



var $findBatteriesMain = $('.find-batteries .carousel-main .carousel-init');
var $findBatteriesNav = $('.find-batteries .carousel-nav .carousel-init');

$findBatteriesMain.flickity({
    wrapAround: false,
    cellAlign: "left",
    pageDots: true,
    prevNextButtons: false,
    imagesLoaded: true,
    draggable: true,
    adaptiveHeight: true,
});

$findBatteriesNav.flickity({
    cellAlign: "left",
    pageDots: false,
    prevNextButtons: false,
    contain: true,
    imagesLoaded: true,
    sync: ".find-batteries .carousel-main .carousel-init"
});
var $findBatteriesNavData = $findBatteriesNav.data('flickity');

$findBatteriesNav.on('select.flickity', function (event, index) {
    var $this = $($findBatteriesNavData.selectedElement);
    $this.parent().find('.btn').removeClass('active');
    $this.parent().find('input[type="radio"]').prop("checked", false);
    $this.find('.btn').addClass('active');
    $this.find('input[type="radio"]').prop("checked", true);
});

$('.find-batteries .carousel-nav').on('click', '.carousel-cell', function () {
    var index = $(this).index();
    $findBatteriesNav.flickity('select', index);
});