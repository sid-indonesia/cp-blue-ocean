<?php
if (pll_current_language() == 'en') {
    $s_career = "<h2>We Are Hiring</h2>";
    $btn_career = "Read More";
} else if (pll_current_language() == 'id') {
    $s_career = "<h2>Lowongan Kerja</h2>";
    $btn_career = "Selengkapnya";
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading text-center">
              <h2><?php echo  $s_career;  ?></h2>  
              <hr>
            </div>
        </div>
    </div>
</div>
<!-- ***** OUR careerArea Start ***** -->
<section class="clearfix d-sm-flex clearfix">
    <div class="container">
        <div class="row justify-content-center text-center my-3 d-flex">
                <?php
                if (pll_current_language() == 'en') {
                    $args = array(
                        'post_status' => 'publish',
                        'category_name' => 'career-en',
                    );
                } else if (pll_current_language() == 'id') {
                    $args = array(
                        'post_status' => 'publish',
                        'category_name' => 'career-id',
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
                                <img class="profile-sample2" src="<?php bloginfo('template_directory'); ?>/img/core-img/default-thumbnail2.jpg" alt="<?php the_title(); ?>" />
                            <?php  }  ?>
                            <figcaption>
                                <h3><?php the_title(); ?></h3>
                                <hr>
                                <button type="button" class="btn btn-primary btn-lg"><?php echo $btn_career ?></button>
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
<!-- ***** OUR career Area End ***** -->
