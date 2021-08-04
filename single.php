<?php get_header(); ?>
<!-- ***** Breadcumb Area Start ***** -->
<div class="summit-breadcumb-area"
    style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>
                       <?php
								if (pll_current_language() == 'en') {
									echo "Our News";
								} else if (pll_current_language() == 'id') {
									echo "Berita";
								}
							?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->
<!-- ***** Single Area Start ***** -->
<section class="news-area section_padding_100">
    <div class="container">
        <div class="row justify-content-center justify-content-md-center ">
            <div class="col-12 col-md-8">
                <div class="summit-news-posts">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 post-outer">
                            <article class="card shadow-sm">
                                <div class="card-body p-md-5">
                                <?php
                                if ( have_posts() ) : while ( have_posts() ) : the_post();
                                get_template_part( 'content-single', get_post_format() );
                            
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                endwhile; endif;
                                ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<!-- ***** Single Area End ***** -->

<?php get_footer(); ?>
