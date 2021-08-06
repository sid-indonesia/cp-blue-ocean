<?php
/** COMMENTS WALKER */
class wp_walker_comment extends Walker_Comment {
	
	// init classwide variables
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

	/** CONSTRUCTOR
	 * You'll have to use this if you plan to get to the top of the comments list, as
	 * start_lvl() only goes as high as 1 deep nested comments */
	function __construct() { ?>
		
		<h3 id="comments-title" class="blockquote-footer" style="font-size: 20px;">Berkomentarlah dan <cite title="Source Title">mari berdiskusi</cite></h3>
		<ul id="comment-list" class="p-0 list-unstyled m-0" style="font-size: 13px;">
		
	<?php }
	
	/** START_LVL 
	 * Starts the list before the CHILD elements are added. Unlike most of the walkers,
	 * the start_lvl function means the start of a nested comment. It applies to the first
	 * new level under the comments that are not replies. Also, it appear that, by default,
	 * WordPress just echos the walk instead of passing it to &$output properly. Go figure.  */
	function start_lvl( &$output, $depth = 0, $args = array() ) {		
		$GLOBALS['comment_depth'] = $depth + 1; ?>

				<ul class="children list-unstyled pl-5">
	<?php }

	/** END_LVL 
	 * Ends the children list of after the elements are added. */
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1; ?>

		</ul><!-- /.children -->
		
	<?php }
	
	/** START_EL */
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment; 
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>
		
		<li <?php comment_class( $parent_class ); ?> id="comment-<?php comment_ID() ?>">
			<div id="comment-body-<?php comment_ID() ?>" class="comment-body border border-secondary border-top-0 border-right-0 p-2">
			
				<div class="comment-author vcard author">
					<?php echo ( $args['avatar_size'] != 0 ? get_avatar( $comment, $args['avatar_size'], '', '', array('class'=> array('rounded-circle', 'float-left')) ) :'' ); ?>
					<cite class="fn n author-name ml-2 font-weight-bold"><?php echo get_comment_author_link(); ?></cite>
				</div><!-- /.comment-author -->

				<div class="comment-meta comment-meta-data ml-5">
					<a href="<?php echo htmlspecialchars( get_comment_link( get_comment_ID() ) ) ?>" class="text-secondary"><?php comment_date(); ?> at <?php comment_time(); ?></a> <?php edit_comment_link( '(Edit)' ); ?>
				</div><!-- /.comment-meta -->

				<div id="comment-content-<?php comment_ID(); ?>" class="mt-2">
					<?php if( !$comment->comment_approved ) : ?>
					<em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>
					
					<?php else: comment_text(); ?>
					<?php endif; ?>
				</div><!-- /.comment-content -->

				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 
							'depth' 	=> $depth,
							'max_depth'	=> $args['max_depth'] )));
						?>
				</div><!-- /.reply -->

			</div><!-- /.comment-body -->

	<?php }

	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
		
		</li><!-- /#comment-' . get_comment_ID() . ' -->
		
	<?php }
	
	/** DESTRUCTOR
	 * I just using this since we needed to use the constructor to reach the top 
	 * of the comments list, just seems to balance out :) */
	function __destruct() { ?>
	
	</ul><!-- /#comment-list -->

	<?php }
}