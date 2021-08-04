<?php
get_header();
?>
<?php if (have_posts()) : ?>
	<!-- ***** Breadcumb Area Start ***** -->
	<div class="summit-breadcumb-area" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/core-img/breadcumb.png);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="bradcumbContent">
						<h2>
							<?php
								if (pll_current_language() == 'en') {
									echo __('Our '); ?> <?php echo single_cat_title('', false);
								} else if (pll_current_language() == 'id') {
									echo single_cat_title('', false);
								}
							?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Breadcumb Area End ***** -->
	<article class="card-post section_padding_50 ">
		<div class="container">
			<div class="row justify-content-center justify-content-md-center ">
				<?php while (have_posts()) : the_post();
						get_template_part('content', get_post_format());
						?>
				<?php endwhile; ?>
			</div>
			<div class="row ">
				<div class="col-12 ">
					<?php wp_bootstrap_pagination(); ?>
				</div>
			</div>
		</div>
	</article>
<?php else : ?>
	<h1>
		<?php
			if (pll_current_language() == 'en') {
				echo __('No posts to display in');
				echo single_cat_title('', false);
			} else if (pll_current_language() == 'id') {
      			echo __('tidak di temukan'); ?> <?php echo single_cat_title('', false);
			}
		 ?>
	</h1>
<?php endif;
get_footer();
?>