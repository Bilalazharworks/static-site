try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.vue = require('vue');
    window.Flickity = require('flickity/dist/flickity.pkgd');

    require('prepare-transition/preparetransition');
    require('jquery-debounce-throttle');
    require('bootstrap');
    require('flickity-as-nav-for');
    //require('flickity-sync');
    require('./common-components/lazy-load');
    require('./common-components/globals');
    require('./common-components/header');
    require('./components/find-battries');

} catch (e) {
    console.log(e);
}