<?php
if (pll_current_language() == 'en') {
    $f_last_news = "Last Posts";
    $f_contact_info = "Contact Info";
} else if (pll_current_language() == 'id') {
    $f_last_news = "Populer";
    $f_contact_info = "Hubungi Kami";
}
?>
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix gradasi">
        <!-- Top Fotter Area -->
        <div class="top-footer-area section_padding_100_0">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12 col-sm-6 col-lg-4 col-md-4">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-15  d-block">
                                <img width="134px" height="26px" src="<?php echo get_bloginfo('template_directory'); ?>/img/Logo-SUmmit-FIX.png" alt="logo SID">
                            </a>
                            <div class="single-footer-widget mb-100">
                                <div class="footer-single--news-post">
                                    <a href="#" class="news-post-date">
                                        <p class="text-white"><?php
                                            echo get_option('blogdescription');
                                            ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="single-footer-widget mb-100">
                            <h5><?php echo $f_last_news;  ?></h5>
                            <?php
                            $args = array('numberposts' => '3');
                            $recent_posts = wp_get_recent_posts($args);
                            foreach ($recent_posts as $recent) {
                                ?>
                                <div class="footer-single--news-post ">
                                    <a href="<?php echo get_permalink($recent["ID"])  ?>" class="news-post-date">
                                        <p class="text-white"><?php echo date_i18n('d F Y', strtotime($recent['post_date'])); ?></p>
                                    </a>
                                    <a href="<?php echo get_permalink($recent["ID"])  ?>" class="news-post-title">
                                        <h6 class="text-white" ><?php echo $recent["post_title"]; ?></h6>
                                    </a>
                                </div>
                            <?php
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-md-4">
                        <div class="single-footer-widget mb-100">
                            <h5><?php echo $f_contact_info;  ?></h5>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon ">
                                    <a class="text-white" href="#"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></a>
                                </div>
                                <a href="https://www.google.com/maps/place/Summit+Institute+Of+Development/@-8.582361,116.119254,19z/data=!4m5!3m4!1s0x0:0x5e1c833f1ff4023a!8m2!3d-8.582361!4d116.1192541?hl=en-US">
                                    <p class="text-white">Jl. Bung Hatta No. 28 Mataram, Nusa Tenggara Barat, Indonesia</p>
                                </a>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <a class="text-white" href="#" ><i class="fa fa-phone" aria-hidden="true"></i></a>
                                </div>
                                <p class="text-white">(0370) 644347</p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <a class="text-white" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                </div>
                                <p class="text-white">human-resource@sid-indonesia.org</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fotter Bottom Area -->
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 small text-white">© <?php echo date("Y");?> Copyright SUMMIT Institute for Development</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!-- Facebook -->
                    <a class="mr-2" href="https://www.facebook.com/SummitMediaCenter" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/sosmed-img/facebook-with-circle.svg" width="32" height="32" alt="Facebook"></a>
                    <!-- Instagram -->
                    <a class="mr-2" href="https://twitter.com/SID_Indonesia" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/sosmed-img/twitter_circle.svg" width="32" height="32" alt="Twitter SID"></a>
                    <!-- Google +-->
                    <a class="mr-2" href="https://www.linkedin.com/company/summit-institute-of-development/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/sosmed-img/linkedin.svg" width="32" height="32" alt="Linkedin SID"></a>
                    <!--youtube -->
                    <a class="mr-2" href="https://www.instagram.com/sid_indonesia/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/sosmed-img/instagram-with-circle.svg" width="32" height="32" alt="Instagram SID"></a>
                    <!--rsfeed-->
                    <a class="mr-2" href="https://feeds.feedburner.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/sosmed-img/rss-with-circle.svg" width="32" height="32" alt="RSS Feed"></a>
                </div>
            </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jsbundel.min.js"></script>
      <?php wp_footer(); ?>
