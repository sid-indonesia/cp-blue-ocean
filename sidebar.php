<?php
if (pll_current_language() == 'en') {
    $s_last_news = "Last News";
    $s_categories  = "Categories";
} else if (pll_current_language() == 'id') {
    $s_last_news = "Berita Terkini";
    $s_categories  = "Kategori";
}
?>
<div class="col-12 col-md-4">
    <aside>
        <div class="summit-news-sidebar">
            <!-- Facebook Page area start -->
            <div class="facebook-page ">
                <iframe
                    data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSummitMediaCenter%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=152759108115365"
                    width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" a=""
                    llowtransparency="true" allow="encrypted-media" data-size="auto" class=" blur-up lazyloaded "
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSummitMediaCenter%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=152759108115365">
                </iframe>
            </div>
            <!-- Facebook Page area End -->
            <div class="latest-news-posts mb-50">
                <h3><?php echo $s_last_news  ?></h3>
                <hr>
                <!-- Single Latest news Post -->
                <?php                        
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                 ?>
                <div class="single-latest-news-post d-flex">
                    <div class="latest-news-post-thumb">
                          <img class="rounded" src="
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            if ( has_post_thumbnail( $recent["ID"]) ) {
                                echo  get_the_post_thumbnail_url($recent["ID"]);
                            }else {
                                bloginfo('template_directory');
                                echo'/img/core-img/default-thumbnail2.png';
                                  }  ?>"
                        
                        alt="<?php echo $recent["post_title"]; ?>">
                    </div>
                    <div class="latest-news-post-content">
                        <h6><a
                                href="<?php echo get_permalink($recent["ID"])  ?>"><?php echo $recent["post_title"]; ?></a>
                        </h6>
                        <div class="post-meta">
                            <h6><a href="#"><?php echo date_i18n('d F Y', strtotime($recent['post_date']));?></a></h6>
                        </div>
                    </div>
                </div>
                <!-- Single Latest news Post -->
                <?php
                        }
                 wp_reset_query();
                ?>

            </div>
            <div class="news-post-categories mb-50">
                <h3><?php echo $s_categories ; ?></h3>
                <hr>
                <ul class="list-items categories" style="list-style: none;">
                <?php $category_ids = get_all_category_ids(); ?>
                <?php
                $args = array(
                'orderby' => 'slug',
                'parent' => 0
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) {
                echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">' . $category->name .  '' . $category->description . '</a></li>';
                }
                ?>
                </ul>
            </div>
        </div>
    </aside>
</div>
