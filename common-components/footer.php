<footer class="site-footer" id="site-footer">
    <div class="pre-footer bg-dark text-white">
        <div class="container">

            <div class="row">
                <div class="col-xl-8 col-lg-9 col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-block brand">
                                <svg>
                                    <use xlink:href="#brand" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-block">
                                <h6 class="text-secondary">Contact Us</h6>

                                <address class="mb-0">
                                    <a href="mailto:info@floridalithium.com">info@floridalithium.com</a>
                                </address>

                                <address>
                                    <a href="tel:866 123.1234">866 123.1234</a>
                                </address>

                                <ul class="nav list-inline social-media mt-4">
                                    <li class="list-inline-item">
                                        <a href="">
                                            <svg>
                                                <use xlink:href="#facebook" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="">
                                            <svg>
                                                <use xlink:href="#youtube" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="">
                                            <svg>
                                                <use xlink:href="#instagram" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-block">
                                <h6 class="text-secondary">Florida Lithium</h6>
                                <address>1225 Produce AllyDeland, FL, 32724</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3"></div>
            </div>

        </div>
    </div>
    <div class="post-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">©2020 Florida Lithium. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p class="designed-in">Proudly designed in
                        <svg>
                            <use xlink:href="#florida" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/scripts.js"></script>
<script src="https://unpkg.com/spritespin@4.0.11/release/spritespin.js" type="text/javascript"></script>

<script>
$(function() {
    $('.spritespin').spritespin({
        source: [
            '/assets/product/battery-1.png',
            '/assets/product/battery-2.png',
            '/assets/product/battery-3.png',
            '/assets/product/battery-4.png',
        ],
        width: 480,
        height: 327,
        sense: 1,
        animate: false,
        plugins: [
            '360'
        ],
        onFrame: function(e, data) {
            $('.spritespin-slider').val(data.frame)
        },
        onInit: function(e, data) {
            $('.spritespin-slider')
                .attr("min", 0)
                .attr("max", data.source.length - 1)
                .attr("value", 0)
                .on("input", function(e) {
                    SpriteSpin.updateFrame(data, e.target.value);
                })
        }
    });
});
</script>

</body>

</html>