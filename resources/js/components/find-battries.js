import Vue from 'vue';

new Vue({
    el: "#find-batteries",
    delimiters: ["${", "}"],
    data: {
        products: [],
        filteredProducts: [],

        vehicles: ['Auto', 'Boat', 'Golf Cart', 'RV', 'Tractor'],
        types: [],
        voltages: [],
        batteries: [],

        selectedVehicle: null,
        selectedType: null,
        selectedVoltage: null,
        selectedBattery: null,

        loadingProgress: null,
        showProduct: false,


        activeVehicle: null,
        activeType: null,
        activeVoltage: null,
        activeBattery: null,

    },

    created() {
        this.fetchProducts();
    },

    methods: {


        filterVehicle(index) {

            this.filteredProducts = this.products.filter(product => product.tags.includes('Vehicle:' + this.selectedVehicle));

            this.activeVehicle = index;

            this.types = [];

            this.voltages = [];

            this.batteries = [];

            this.selectedType = "";

            this.selectedVoltage = "";

            this.selectedBattery = "";

            this.activeType = null;

            this.showProduct = false;

            this.loadingProgress = "step-1-completed";

            this.types = this.removeDuplicates(this.computeTag(this.selectedVehicle + '-Type:').sort());

        },

        filterType(index) {

            this.filteredProducts = this.products.filter(product => ((product.tags.includes(this.selectedVehicle + '-Type:' + this.selectedType)) && (product.tags.includes('Vehicle:' + this.selectedVehicle))));

            this.activeType = index;

            this.voltages = [];

            this.batteries = [];

            this.selectedVoltage = "";

            this.selectedBattery = "";

            this.activeVoltage = null;

            this.showProduct = false;

            this.loadingProgress = "step-2-completed";

            this.voltages = this.removeDuplicates(this.computeTag('Voltage:').sort());

        },

        filterVoltage(index) {

            this.filteredProducts = this.products.filter(product => ((product.tags.includes('Voltage:' + this.selectedVoltage)) && (product.tags.includes(this.selectedVehicle + '-Type:' + this.selectedType)) && (product.tags.includes('Vehicle:' + this.selectedVehicle))));

            this.activeVoltage = index;

            this.batteries = [];

            this.selectedBattery = "";

            this.activeBattery = null;

            this.showProduct = false;

            this.loadingProgress = "step-3-completed";

            this.batteries = this.removeDuplicates(this.computeTag('Suggestion:'));

        },


        selectBattery(index) {

            this.initProducts();

            this.activeBattery = index;

            this.showProduct = true;

        },

        computeTag(tagType) {
            let tagArray = [];
            this.filteredProducts.forEach((product, index) => {
                product.tags.forEach((tag, index) => {
                    if (tag.includes(tagType)) {
                        let types = tag.split(tagType);
                        tagArray.push(types[types.length - 1]);
                    }
                });
            });
            return tagArray;
        },

        removeDuplicates(array) {
            return [...new Set(array)];
        },

        initProducts() {
            setTimeout(function () {


                const MainCarousel = new Flickity('.find-batteries .carousel-main .carousel-init', {
                    wrapAround: false,
                    cellAlign: "left",
                    cellSelector: '.product',
                    pageDots: true,
                    prevNextButtons: false,
                    imagesLoaded: true,
                    draggable: true,
                    adaptiveHeight: true,
                });

                const NavCarousel = new Flickity('.find-batteries .carousel-nav', {
                    cellSelector: '.btn',
                    pageDots: false,
                    prevNextButtons: false,
                    draggable: false,
                    contain: true,
                    asNavFor: ".find-batteries .carousel-main .carousel-init"
                });



            }, 10);
        },

        async fetchProducts() {
            let response = await fetch("http://localhost:1234/jsons/products.json");
            let data = await response.json();
            this.products = data.products;
        },

    },
    filters: {

        slugify: function (value) {
            value = value.toLowerCase();
            value = value.replace(/[á|ã|â|à]/gi, "a");
            value = value.replace(/[é|ê|è]/gi, "e");
            value = value.replace(/[í|ì|î]/gi, "i");
            value = value.replace(/[õ|ò|ó|ô]/gi, "o");
            value = value.replace(/[ú|ù|û]/gi, "u");
            value = value.replace(/[ç]/gi, "c");
            value = value.replace(/[ñ]/gi, "n");
            value = value.replace(/[á|ã|â]/gi, "a");
            value = value.replace(/\W/gi, "-");
            value = value.replace(/(\-)\1+/gi, "-");
            return value;
        },

        xlink: function (value) {
            value = value.toLowerCase();
            value = value.replace(/[á|ã|â|à]/gi, "a");
            value = value.replace(/[é|ê|è]/gi, "e");
            value = value.replace(/[í|ì|î]/gi, "i");
            value = value.replace(/[õ|ò|ó|ô]/gi, "o");
            value = value.replace(/[ú|ù|û]/gi, "u");
            value = value.replace(/[ç]/gi, "c");
            value = value.replace(/[ñ]/gi, "n");
            value = value.replace(/[á|ã|â]/gi, "a");
            value = value.replace(/\W/gi, "-");
            value = value.replace(/(\-)\1+/gi, "-");
            return '#' + value;
        }



    }
});