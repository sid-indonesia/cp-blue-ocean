<?php
get_header();
if (have_posts()) :
	?>
	<!-- ***** Breadcumb Area Start ***** -->
	<div class="summit-breadcumb-area" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/core-img/breadcumb.png);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="bradcumbContent">
						<h3> 
							<?php
								echo __('Tag : ');
								echo single_tag_title('', false);
							?>							
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Breadcumb Area End ***** -->
	<article class="card-post section_padding_50 ">
		<div class="container">
			<div class="row justify-content-center justify-content-md-center ">
				<?php
				 if (have_posts()) : while (have_posts()) : the_post();
							get_template_part('content', get_post_format());
						endwhile;
					endif;
				?>
			</div>
			<div class="row ">
				<div class="col-12 ">
					<?php wp_bootstrap_pagination(); ?>
				</div>
			</div>
		</div>
	</article>
	<?php else : ?>
	<h3>
		<?php
			if (pll_current_language() == 'en') {
				echo __('No posts to display in ');
				echo single_tag_title('', false);
				echo single_tag_title('', false);
			} else if (pll_current_language() == 'id') {
				echo __('Tidak di temukan tagar '); 
				echo single_tag_title('', false);																		
			}
		?>
	</h3>
<?php endif; ?>
<?php get_footer();   ?>