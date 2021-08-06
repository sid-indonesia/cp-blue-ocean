<?php
  if(pll_current_language() == 'en') {
        $s_btn           = "Read More";
        $s_vision        = "Our Vision";
        $s_mission       = "Our Mission";
        $s_history       = "History";
        $content_history = "The Summit Institute for Development (SID) was legally established in 2007. " ;
        $content_vision  = "Improvement in health and human development at the community level through research and evidence-based programs, participatory decision-making, and sustainable action.";
        $content_mission ="Improved participation for every member of the community in decision-making, use of data and information, ideas, suggestions and opinions.";
	$link_history    = "/history/";
        $link_vision	 = "/our-vision/";
        $link_mission    = "/our-mission/";
  } else if(pll_current_language() == 'id') {
        $s_btn           = "Selengkapnya";
        $s_vision        = "Visi Kami";
        $s_mission       = "Misi Kami";
        $s_history       = "Sejarah";
        $content_history = "Yayasan Institut Pengembangan Suara Mitra atau dikenal juga sebagai SUMMIT Institute for Development (SID) secara resmi berdiri pada tahun 2007.";
        $content_vision  ="Peningkatan kesehatan dan pembangunan manusia di tingkat masyarakat melalui
                           pengambilan keputusan partisipatif berbasis bukti dan aksi kelanjutan";
        $content_mission ="Peningkatan partisipasi setiap anggota masyarakat dalam pengambilan keputusan, dalam bentuk informasi, ide saran atau pendapat.";
	$link_history    = "/sejarah/";
        $link_vision	 = "/visi-kami/";
        $link_mission    = "/misi-kami/";
  }
?>
<!-- ***** Vision And Mission Area Start ***** -->
<section class="summit--services-area section_padding_100">
    <div class="container">
        <div class="row text-center ">
            <!-- ***** History Start ***** -->
            <div class="col-12 col-sm-6 col-md-4 d-flex pt-3">
                <div class="card rounded-lg">
                    <div class="card-body Regular shadow rounded-lg">
                        <div class="single-feature-area">
                            <div class="feature-icon pb-1">
                                <img class="img-fluid"
                                    src="<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/sejarah-min.png"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h4><?php echo $s_history ; ?></h4>
                                <p><?php echo $content_history ; ?></p>
                                <a class="btn btn-primary my-btn" href="<?php echo get_home_url().'/'. $link_history; ?>"
                                    role="button"><?php echo $s_btn ; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** History End ***** -->
            <!-- ***** Vision Start ***** -->
            <div class="col-12 col-sm-6 col-md-4 d-flex pt-3">
                <div class="card rounded-lg">
                    <div class="card-body Regular shadow rounded-lg">
                        <div class="single-feature-area">
                            <div class="feature-icon pb-1">
                                <img class="img-fluid"
                                    src="<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/visi-min.png"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h4><?php echo $s_vision ; ?></h4>
                                <p><?php echo $content_vision ; ?></p>
                                <a class="btn btn-primary my-btn" href="<?php echo get_home_url().'/'.  $link_vision; ?>"
                                    role="button"><?php echo $s_btn ; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Vision End ***** -->

            <!-- ***** Mission Start ***** -->
            <div class="col-12 col-sm-6 col-md-4 d-flex pt-3">
                <div class="card rounded-lg">
                    <div class="card-body Regular shadow rounded-lg">
                        <div class="single-feature-area">
                            <div class="feature-icon pb-1">
                                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/misi-min.png"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h4><?php echo $s_mission ; ?></h4>
                               <p><?php echo $content_mission ; ?></p>
                                <a class="btn btn-primary my-btn" href="<?php echo get_home_url() .'/'.  $link_mission; ?>"
                                    role="button"><?php echo $s_btn ; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Mission End ***** -->
</section>
<!-- ***** Vision And Mission Area End ***** -->
