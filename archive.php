
<?php 
get_header();
if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
	<h1>
		<?php echo __('Archive'); ?>: <?php echo  get_the_date( 'D M Y' ); ?>
	</h1>							
<?php elseif ( is_month() ) : ?>
	<h1>
		<?php echo __('Archive'); ?>: <?php echo  get_the_date( 'M Y' ); ?>
	</h1>	
<?php elseif ( is_year() ) : ?>
	<h1>
		<?php echo __('Archive'); ?>: <?php echo  get_the_date( 'Y' ); ?>
	</h1>								
<?php else : ?>
	<h1>
		<?php echo __('Archive'); ?>
	</h1>	
<?php endif; ?>

<ul class="media-list">
	<?php while ( have_posts() ) : the_post(); ?>
	<li class="media">
		<div class="media-body">
			 <h2 class="media-heading">
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			 </h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
				<?php the_date(); ?> <?php the_time(); ?>
			</time>
			<?php the_content(); ?>
		</div>
	</li>
	<?php endwhile; ?>
</ul>

<?php else: ?>
	<h1>
		<?php echo __('No posts to display'); ?>
	</h1>	
<?php endif; 

get_footer();

?>
