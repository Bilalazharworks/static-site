<?php component('hero'); ?>

<section class="skew-before collection">

    <div class="container">
        <div class="row">
            <?php $products = ['1','2','3','4'];?>
            <?php foreach($products as $product) :?>

            <div class="col-md-6">

                <div class="product product-item bg-light">

                    <div class="thumbnail">
                        <img src="assets/battery.png" class="img-fluid">
                    </div>

                    <div class="meta">
                        <h5>FL100D</h5>
                        <p class="m-0">12v 100Ah Deep Cycle</p>
                        <p class="m-0">Lithium Iron Phosphate</p>
                        <p class="m-0">LiFeP0 Battery</p>
                    </div>

                    <hr>

                    <div class="price-action">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="m-0 font-weight-normal price">$799.00</h4>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-outline-primary text-uppercase btn-block">View</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php component('need-help'); ?>