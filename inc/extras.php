<?php

/**
 * Custom comment template
 */
function shapely_cb_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	extract( $args, EXTR_SKIP );

	if ( 'ul' == $args['style'] ) {
		$tag       = 'ul';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<li <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
			<?php endif; ?>
			<div class="avatar">
				<?php if ( $args['avatar_size'] != 0 ) {
					echo get_avatar( $comment, $args['avatar_size'] );
				} ?>
			</div>
			<div class="comment">
				<b class="fn"><?php echo esc_html( get_comment_author() ); ?></b>
				<div class="comment-date">
					<time datetime="2016-01-28T12:43:17+00:00">
						<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'shapely' ), get_comment_date(), get_comment_time() ); ?></time><?php edit_comment_link( esc_html__( 'Edit', 'shapely' ), '  ', '' );
					?>
				</div>

				<?php comment_reply_link( array_merge( $args, array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				) ) ); ?>

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<p>
						<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'shapely' ); ?></em>
						<br/>
					</p>
				<?php endif; ?>

				<?php comment_text(); ?>

			</div>
			<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	</li>
	<?php
}

/*
 * Filter to replace
 * Reply button class
 */
function shapely_reply_link_class( $class ) {
	$class = str_replace( "class='comment-reply-link", "class='btn btn-sm comment-reply", $class );

	return $class;
}

/*
 * Comment form template
 */
function shapely_custom_comment_form() {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	$fields    = array(
		'author' =>
			'<input id="author" placeholder="' . esc_html__( 'Your Name', 'shapely' ) . ( $req ? '*' : '' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			'" size="30" ' . $aria_req . ' required="required" />',

		'email' =>
			'<input id="email" name="email" type="email" placeholder="' . esc_html__( 'Email Address', 'shapely' ) . ( $req ? '*' : '' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
			'" size="30"' . $aria_req . ' required="required" />',

		'url' =>
			'<input placeholder="' . esc_html__( 'Your Website (optional)', 'shapely' ) . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'" size="30" />',
	);

	$comments_args = array(
		'label_submit'  => esc_html__( 'Leave Comment', 'shapely' ),
		'comment_field' => '<textarea placeholder="' . _x( 'Comment', 'noun', 'shapely' ) . '" id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required">' .
		                   '</textarea>',
		'fields'        => apply_filters( 'comment_form_default_fields', $fields )
	);


	return $comments_args;
}