<?php get_header(); 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!-- ***** Breadcumb Area Start ***** -->
<div class="summit-breadcumb-area"
    style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->
<div style="padding-bottom: 32px;padding-top: 32px">
    <article>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-md-5">
                            <?php
                            get_template_part( 'page-single', get_post_format() );
                            endwhile; endif;
                            ?>
                        </div>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.continer -->
    </article>
</div>
<?php get_footer(); ?>
