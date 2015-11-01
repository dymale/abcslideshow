
<!-- header image/slider -->
<div class="header_bot header_slider">
    <div class="container">


        <section>

            <!-- showcase slider -->
            <div id="showcase" class="showcase">


                <div class="slider-wrapper theme-default">
                    <div id="slidesjs-slides" class="">
                        <?php foreach ($showonpage['images'] as $key => $img): ?>
                            <img src="/myd7/sites/default/files/<?php print $img; ?>" data-thumb="/myd7/sites/default/files/<?php print $img; ?>" alt="0<?php print $key; ?>" />
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
            <!--/ showcase slider -->
        </section>
    </div>
</div>
<!--/ header image/slider -->
