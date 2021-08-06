<?php
if (pll_current_language() == 'en') {

    query_posts(array(
        'category_name'  => 'berita-en',
		    'numberposts' => 6, 
	   'posts_per_page' => 6,
    ));
} else if (pll_current_language() == 'id') {

    query_posts(array(
        'category_name'  => 'berita-id',
        'numberposts' => 6, 
	   'posts_per_page' => 6,
    ));
}
?>

<!-- ***** News Area Start ***** -->
        <div class="row justify-content-center justify-content-md-center ">
            <div class="card-deck">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('content', get_post_format());
                endwhile;
            endif;
            ?>
                </div>
        </div>
        <div class="row ">
				<div class="col-12 ">
					<?php wp_bootstrap_pagination(); ?>
				</div>
			</div>
<!-- ***** News Area End ***** -->
