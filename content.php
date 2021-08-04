<div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
    <div class="card shadow rounded my-news w-100">
        <a href="<?php the_permalink(); ?>" style="overflow: hidden;">
                      <?php if (has_post_thumbnail($post->ID)){
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <img class="card-img-top img-fluid  wp-post-image" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                 
                <?php }else{  ?>
                    <img class="card-img-top img-fluid  wp-post-image"  src="<?php bloginfo('template_directory'); ?>/img/core-img/default-thumbnail.jpg" alt="<?php the_title(); ?>" />
                    <?php  }  ?>
        </a>
        <div class="card-body w-100">
            <h5 class="card-title font-weight-bold mb-0">
                <a class="text-dark" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h5>
            <time class="badge badge-info"> 
            <?php echo get_the_date(); ?>
            </time>
        </div>
    </div>
</div>