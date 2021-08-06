<?php
if (pll_current_language() == 'en') {
    $s_news = " <p>Summit News</p>
                            <h2>Latest News</h2>";
    query_posts(array(
        'category_name'  => 'berita-en',
		    'numberposts' => 3, 
	   'posts_per_page' => 3,
    ));
} else if (pll_current_language() == 'id') {
    $s_news = " <p>Berita Summit</p>
                             <h2>Berita</h2>";
    query_posts(array(
        'category_name'  => 'berita-id',
        'numberposts' => 3, 
	   'posts_per_page' => 3,
    ));
}
?>

<!-- ***** News Area Start ***** -->
<section class="summit-clients-area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <?php echo $s_news;  ?>
                    <hr>
                </div>
            </div>
            <article class="card-post ">
                <div class="container">
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
                </div>
            </article>
        </div>
    </div>
</section>
<!-- ***** News Area End ***** -->
