<?php
  if(pll_current_language() == 'en') {
    $slide_btn ="ABOUT";
    $slide_title_1 ="OpenSRP";
    $slide_content_1="Digital system to assist midwives in providing real-time data-driven care.";
    $slide_link_1 = "/opensrp-platform/";
    $slide_title_2 ="WHO ANC Module";
    $slide_content_2 ="Implementing WHO ANC recommendations through mobile application.";
    $slide_link_2 = "/who-anc-module-prototype/";
    $slide_title_3 ="Malaria Rapid Diagnostic Test (RDT) Application";
    $slide_content_3 ="Establishing Open Standard for RDT through mHealth solution.";
    $slide_link_3 = "/rdt-malaria/";
  } else if(pll_current_language() == 'id') {
    $slide_btn ="Selengkapnya";
    $slide_title_1 ="OpenSRP";
    $slide_content_1="Sistem digital yang membantu bidan memberikan pelayanan kesehatan berdasarkan data.";
    $slide_link_1 = "/id/opensrp/";
    $slide_title_2 ="WHO ANC Module";
    $slide_content_2 ="Implementasi rekomendasi WHO untuk ANC melalui aplikasi mobile.";
    $slide_link_2 = "/id/who-anc-module/";
    $slide_title_3 ="RDT Malaria";
    $slide_content_3 ="Membangun standar pembuatan RDT menggunakan solusi mHealth.";
    $slide_link_3 = "/id/rdt-malaria-2/";
}
?>
<!-- ===== English Area Start =====-->
<!-- ***** Slider Area Start ***** -->
<section class="slide_area clearfix" id="home"
    style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/bg-img/bg-bluegold.jpg)">
    <div class="hero-slides owl-carousel">
        <!-- ***** Slide 1 Area Start ***** -->
        <div class="single-hero-slide d-flex align-items-center mx-auto">
            <div class="row justify-content-center ">
                <div class="col-md-4 text-center align-self-center">
                    <div class="container">
                        <h2 class="text-white "><?php echo $slide_title_1 ?></h2>
                        <h5 class="text-white"><?php echo $slide_content_1 ?> </h5>
<a class="btn btn-success my-btn" target="_blank" href="<?php echo $slide_link_1 ?> " role="button"><?php echo $slide_btn; ?></a>
                    </div>
                </div>
                <div class="col-md-6 mt-sm-3">
                    <img class="pb-slide pt-sm-3" src="<?php echo get_bloginfo( 'template_directory' );?>/img/slide-img/open SRP.png" alt="<?php echo $slide_title_1 ?>">
                </div>
            </div>
        </div>
        <!-- ***** Slide 1 Area End ***** -->
        <!-- ***** Slide 2 Area Start ***** -->
        <div class="single-hero-slide d-flex align-items-center mx-auto">
            <div class="row justify-content-center ">
                <div class="col-md-4 text-center  align-self-center">
                    <div class="container">
                        <h2 class="text-white "><?php echo $slide_title_2 ?></h2>
                        <h5 class="text-white"><?php echo $slide_content_2 ?> </h5>
                        <a target="_blank" class="btn btn-success my-btn" href="<?php echo $slide_link_2 ?>" role="button"><?php echo $slide_btn; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="pb-slide" src="<?php echo get_bloginfo( 'template_directory' );?>/img/slide-img/WHO.png" alt="<?php echo $slide_title_2 ?>">
                </div>
            </div>
        </div>
        <!-- ***** Slide 2 Area End ***** -->
        <!-- ***** Slide 3 Area Start ***** -->
        <div class="single-hero-slide d-flex align-items-center mx-auto">
            <div class="row justify-content-center ">
                <div class="col-md-4 text-center align-self-center">
                    <div class="container">
                        <h2 class="text-white "><?php echo $slide_title_3 ?></h2>
                        <h5 class="text-white"><?php echo $slide_content_3 ?> </h5>
                        <a target="_blank" class="btn btn-success my-btn" href="<?php echo $slide_link_3 ?>" role="button"><?php echo $slide_btn; ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="pb-slide" src="<?php echo get_bloginfo( 'template_directory' );?>/img/slide-img/RDT.png" alt="<?php echo $slide_title_3 ?>">
                </div>
            </div>
        </div>
        <!-- ***** Slide 3 Area End ***** -->
    </div>
</section>
<!-- ***** Slider Area End ***** -->
