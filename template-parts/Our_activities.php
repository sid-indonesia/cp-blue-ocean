<?php
if (pll_current_language() == 'en') {
    $s_activities = "<p>Summit Activities</p>
                        <h2>Our Activities</h2>";
    $btn_activities = "Read More";
} else if (pll_current_language() == 'id') {
    $s_activities = "<p>Aktivitas Summit</p>
                          <h2>Aktivitas Kami</h2>";
    $btn_activities = "Selengkapnya";
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading text-center">
                <?php echo $s_activities;  ?>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- ***** OUR Activities Area Start ***** -->
<section class="clearfix d-sm-flex clearfix">
    <div class="container">
        <div class="row justify-content-center text-center my-3 d-flex">
                <?php
                if (pll_current_language() == 'en') {
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'category_name' => 'aktivitas-en',
                        'posts_per_page' => 4,
    			'numberposts' => '4'
                    );
                } else if (pll_current_language() == 'id') {
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'category_name' => 'aktivitas-id',
                        'posts_per_page' => 4,
                    );
                }
                $arr_posts = new WP_Query($args);

                if ($arr_posts->have_posts()) :
                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                        ?>
                    <div class="col-md-3" id="post-<?php the_ID(); ?>">
                        <figure class="snip1581">
                              <?php if (has_post_thumbnail($post->ID)) {
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <img class="profile-sample2" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">

                            <?php } else {  ?>
                                <img class="profile-sample2" src="<?php bloginfo('template_directory'); ?>/img/core-img/default-thumbnail2.png" alt="<?php the_title(); ?>" />
                            <?php  }  ?>
      
                            <figcaption>
                                <h3><?php the_title(); ?></h3>
                                <hr>
                                <button type="button" class="btn btn-primary btn-lg"><?php echo $btn_activities ?></button>
                            </figcaption><a href="<?php the_permalink(); ?>"></a>
                        </figure>
                    </div>
                <?php
                    endwhile;
                endif
                ?>
        </div>
    </div>
</section>
<!-- ***** OUR Activities Area End ***** -->
