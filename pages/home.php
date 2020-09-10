<?php component('hero'); ?>

<section class="about text-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="content-block">
                    <svg class="mw-100">
                        <use xlink:href="#florida" />
                    </svg>

                    <h2 class="font-weight-bold">Florida Lithium proudly designs and builds the most chemically stable
                        lithium iron
                        phosphate
                        batteries in the world.</h2>

                    <p>Our 12Volt LiFeP04 batteries are available in both Deep Cycle <br />
                        (ideal for trolling motors) and Engine Start (1200 cranking amps).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Battery Management System Starts Here -->
<section class="battery-management bg-light text-center text-md-left">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-box">
                    <h3 class="font-weight-bold">Battery Management System</h3>
                    <p>Florida Lithium’s custom Battery Management System, or BMS optimizes the way your LiFeP04
                        battery
                        balances its cells by collecting and monitoring data sets including voltage and temperature
                        levels.</p>
                    <p>Each battery’s data is seamlessly analyzed and reported back to your dashboard via our
                        customizable smartphone app, ensuring you receive relevant alerts and information regarding
                        your
                        voltage levels and cellular integrity.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-wrapper text-center text-md-right">
                    <img class="lazy" src="assets/battery-management-system.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Battery Management System Ends Here -->

<section id="find-batteries" class="find-batteries product">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-md-10 mb-3 pb-2 pb-md-5">
                    <svg class="spark-before-heading">
                        <use xlink:href="#spark" />
                    </svg>
                    <h3 class="font-weight-normal">Find the <strong>perfect LiFePO<small><sub
                                    class="font-weight-bold">4</sub></small> battery</strong>for all of your needs</h3>
                </div>
            </div>
        </div>


        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="select-option" :class="{ selected: selectedVehicle }">
                    <p class="mb-1">Select <strong>Vehicle</strong></p>


                    <div class="btn-group btn-group-toggle select-vehicle">


                        <label class="btn has-svg text-center text-uppercase" v-for="(vehicle, index) in vehicles"
                            :key="index" :class="{ active: index === activeVehicle}">

                            <input type="radio" name="vehicle" :id="vehicle | slugify" :value="vehicle"
                                v-model="selectedVehicle" @change="filterVehicle(index)">

                            <span class="d-block svg-container d-flex align-items-end justify-content-center">
                                <svg :class="'icon-'+ vehicle|slugify">
                                    <use :href='vehicle|xlink' />
                                </svg>
                            </span>

                            <span class="d-block mt-1">${ vehicle }</span>

                        </label>


                    </div>
                </div>


                <div class="select-option pt-4" v-if="types.length" :class="{ selected: selectedType }">
                    <p class="mb-1">Select <strong>Type</strong></p>
                    <div class="btn-group-toggle select-type">
                        <label v-for="(type, index) in types" class="btn has-badge badge has-badge badge-pill"
                            :key="index" :class="{ active: index === activeType}">
                            <input type="radio" name="type" :id="type | slugify" autocomplete="off" :value="type"
                                v-model="selectedType" @change="filterType(index)">
                            ${type}
                        </label>
                    </div>
                </div>


                <div class="select-option pt-4" v-if="voltages.length" :class="{ selected: selectedVoltage }">
                    <p class="mb-1">Select <strong>Voltage Requirement</strong></p>
                    <div class="btn-group-toggle">
                        <label v-for="(voltage, index) in voltages" class="btn has-badge badge has-badge badge-pill"
                            :key="index" :class="{ active: index === activeVoltage}">
                            <input type="radio" name="voltage" :id="voltage | slugify" autocomplete="off"
                                :value="voltage" v-model="selectedVoltage" @change="filterVoltage(index)">
                            ${ voltage }
                        </label>
                    </div>
                </div>

                <div class="select-option pt-4" v-if="batteries.length" :class="{ selected: selectedBattery }">
                    <p class="mb-1">Select <strong>Suggested Batteries</strong></p>
                    <div class="btn-group-toggle carousel-nav">
                        <label class="btn has-badge badge has-badge badge-pill" v-for="(battery, index) in batteries"
                            :key="index">
                            <input type="radio" name="battery" :id="battery" autocomplete="off" :value="battery"
                                v-model="selectedBattery" @change="selectBattery(index)" class="d-none">
                            ${ battery }
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5 align-self-start">
                <div class="battery-picker__showcase">
                    <div class="content-loading-wrapper" :class="{ 'd-none': showProduct}">
                        <div class="content-loading" :class="loadingProgress">
                            <svg width="166" height="112" viewBox="0 0 166 112" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M163.845 5.38355H149.835V2.15342C149.835 0.966088 148.868 0 147.679 0H131.507C130.318 0 129.351 0.966088 129.351 2.15342V5.38355H36.6412V2.15342C36.6412 0.966088 35.6742 0 34.4858 0H18.3206C17.1322 0 16.1652 0.966088 16.1652 2.15342V5.38355H2.15535C0.966949 5.38355 0 6.34964 0 7.53697V18.3041C0 19.4914 0.966949 20.4575 2.15535 20.4575H5.3884V109.847C5.3884 111.034 6.35537 112 7.54378 112H158.456C159.645 112 160.612 111.034 160.612 109.847V20.4649H163.845C165.033 20.4649 166 19.4988 166 18.3115V7.54435C166 6.34964 165.033 5.38355 163.845 5.38355ZM80.3242 40.1628H61.952V58.7102H76.9362V66.8224H61.952V92.6118H50.7323V31.6597H80.3169V40.1628H80.3242ZM115.607 92.6192H88.2445V31.6671H99.3608V84.1162H115.607V92.6192ZM115.858 48.3414V41.8663H111.267L118.767 31.5565V38.061H123.387L115.858 48.3414Z"
                                    fill="#E9ECED" />
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="166"
                                    height="112">
                                    <path
                                        d="M163.845 5.38355H149.835V2.15342C149.835 0.966088 148.868 0 147.679 0H131.507C130.318 0 129.351 0.966088 129.351 2.15342V5.38355H36.6412V2.15342C36.6412 0.966088 35.6742 0 34.4858 0H18.3206C17.1322 0 16.1652 0.966088 16.1652 2.15342V5.38355H2.15535C0.966949 5.38355 0 6.34964 0 7.53697V18.3041C0 19.4914 0.966949 20.4575 2.15535 20.4575H5.3884V109.847C5.3884 111.034 6.35537 112 7.54378 112H158.456C159.645 112 160.612 111.034 160.612 109.847V20.4649H163.845C165.033 20.4649 166 19.4988 166 18.3115V7.54435C166 6.34964 165.033 5.38355 163.845 5.38355ZM80.3242 40.1628H61.952V58.7102H76.9362V66.8224H61.952V92.6118H50.7323V31.6597H80.3169V40.1628H80.3242ZM115.607 92.6192H88.2445V31.6671H99.3608V84.1162H115.607V92.6192ZM115.858 48.3414V41.8663H111.267L118.767 31.5565V38.061H123.387L115.858 48.3414Z"
                                        fill="#E9ECED" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <rect id="selection_progress" x="-1" y="1" width="167" height="112"
                                        fill="#D5D9DB" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="carousel-main" :class="{ 'd-none': !showProduct}">
                        <div class="carousel-init">
                            <div class="product product-item carousel-cell mx-auto mb-0"
                                v-for="(product, index) in filteredProducts">
                                <div class="thumbnail" v-for="(image, index) in product.images" :key="index">
                                    <img :src="image.src" class="img-fluid">
                                </div>
                                <div class="meta">
                                    <h5>${ product.title }</h5>
                                    <div class="description" v-html="product.body_html"></div>
                                </div>
                                <hr>
                                <div class="price-action">
                                    <div class="d-flex align-items-lg-center justify-content-between">
                                        <h4 class="m-0 mb-3 mb-lg-0  font-weight-normal price"
                                            v-for="(variant, index) in product.variants" :key="index">$${ variant.price
                                            }</h4>
                                        <a :href="'products/'+product.handle"
                                            class="btn btn-outline-primary text-uppercase">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</section>