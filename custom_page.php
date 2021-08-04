<?php /* Template Name: Custom_Page */ 


get_header(); 

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

<!-- ***** Breadcumb Area End ***** -->
<?php get_header(); 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="bg-light">
    <article>
    <?php the_content(); 
     endwhile; endif;
     ?>
    </article>
</div>



<?php 

get_footer();

?>