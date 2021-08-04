<?php get_header(); 
if ( have_posts() ):
?>
<!-- ***** Breadcumb Area Start ***** -->
<div class="summit-breadcumb-area"
	style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/breadcumb.png);">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-12">
				<div class="bradcumbContent">
                    <h4 class="text-white"><?php echo __('Search Results'); ?> '<?php echo get_search_query(); ?>'</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ***** Breadcumb Area End ***** -->
<div class="container">
    <div class="mysearch">
        <div class="card-post my-4">
            <div class="row">
            <?php
                while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                endwhile; 
                
                wp_bootstrap_pagination(); 
                else: ?>
            <h1>

            <!-- ***** Breadcumb Area Start ***** -->
            <div class="summit-breadcumb-area"
                style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/core-img/breadcumb.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="bradcumbContent">
                                <h4 class="text-white"><?php echo __('Search Results'); ?> '<?php echo get_search_query(); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Breadcumb Area End ***** -->
                
            </h1>
            <?php endif; ?>
             </div>
        </div>
    </div>
</div>
<?php get_footer();  ?>