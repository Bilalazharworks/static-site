<?php component('hero'); ?>

<section class="product product-single">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8">
                <div class="row">

                    <div class="col-xl-6 col-lg-5">

                        <div class="meta pb-4">
                            <h4 class="mb-2 font-weight-bold">FL100D</h4>
                            <p class="m-0">12v 100Ah Deep Cycle</p>
                            <p class="m-0">Lithium Iron Phosphate</p>
                            <p class="m-0">LiFeP0 Battery</p>
                        </div>

                        <div class="download-technical-specs pb-4">
                            <a href="">
                                <svg>
                                    <use xlink:href="#download-cloud" />
                                </svg>Download Technical Specs
                            </a>
                        </div>

                        <hr>

                        <div class="select-option active pt-4">
                            <p class="mb-1">Select <strong>Terminal Options</strong></p>

                            <div class="btn-group-toggle" data-toggle="buttons">

                                <?php $options = ['Stud Terminal', 'Dual Post Marine', 'Drop Terminals', 'AT Terminals'];?>

                                <?php foreach($options as $option): ?>

                                <label class="btn has-badge badge badge-pill">
                                    <input type="radio" name="options" id="<?php slugify($option); ?>"
                                        autocomplete="off">
                                    <?php echo $option;?>
                                </label>

                                <?php endforeach; ?>

                            </div>


                        </div>

                        <div class="price-action">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="m-0 font-weight-normal price">$799.00</h4>
                                </div>
                                <div class="col">
                                    <a href="" class="btn btn-outline-primary text-uppercase btn-block">Add To
                                        Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="spritespin"></div>
                        <input class="spritespin-slider" type="range">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php component('need-help'); ?>