<?php
    $amount_People_Served = 124628;
    $amount_Villages =  289;
    $amount_Child_Save = 10273;
  if(pll_current_language() == 'en') {
        $Impact_Area = "Our Impact";
        $People_served = "People Served";
        $Villages = "Villages";
        $Child_Save = "Lives Saved";
  }else if(pll_current_language() == 'id') {
        $Impact_Area = "Pengaruh Penelitian";
        $People_served = "Orang Terlayani";
        $Villages = "Desa";
        $Child_Save = "Anak Terselamatkan";
  }
?>
   <!-- ***** Impact Area Start ***** -->
    <section class="summit-cool-facts-area service-page bg-img section_padding_100"
        style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/bg-img/bg-bluegold300.jpg);">
        <div class="container">
            <div class="col-12">
                <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="section-heading">
                        <h2 class="text-white"><?php echo $Impact_Area;  ?></h2>
                    </div>
                    <div class="row justify-content-center text-center text-white">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h1 class="text-white">
                                        <i class="fa fa-user " aria-hidden="true">
                                        </i>
                                        <span class="counter"><?php echo $amount_People_Served;  ?></span></h1>
                                </div>
                                <div class="cool-facts-content">
                                    <p><?php echo $People_served;  ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h1 class="text-white"><i class="fa fa-map-marker-alt pr-2" aria-hidden="true"></i><span class="counter">
                                        <?php echo $amount_Villages;  ?></span>
                                    </h1>
                                </div>
                                <div class="cool-facts-content">
                                    <p><?php echo $Villages; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact">
                                <div class="counter-area">
                                    <h1 class="text-white"><i class="fa fa-child pr-2" aria-hidden="true"></i><span
                                            class="counter"><?php echo $amount_Child_Save;  ?></span>
                                    </h1>
                                </div>
                                <div class="cool-facts-content">
                                    <p><?php echo $Child_Save;  ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Impact Area End ***** -->
