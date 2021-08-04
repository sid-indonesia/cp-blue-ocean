<?php // Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
if ( post_password_required() ) { ?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
	return;
}

// add a microid to all the comments
function comment_add_microid($classes) {
	$c_email=get_comment_author_email();
	$c_url=get_comment_author_url();
	if (!empty($c_email) && !empty($c_url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
		$classes[] = $microid;
	}
	return $classes;	
}
add_filter('comment_class','comment_add_microid');

?>
<div id="commentblock">
	<?php // if have comment, show the comments.
	if ( have_comments() ) {
		wp_list_comments( array( // load comments list
			'walker'		=>	new wp_walker_comment(),
			'avatar_size'	=>	40,
			'reply_text'	=>	__('Replay'),
		) );	
	}
	if ('open' == $post-> comment_status) {
		echo '<div id="respond" class="border border-top-0 border-right-0 border-secondary p-2"><div id="cancel-comment-reply" class="mb-1">';
		cancel_comment_reply_link();
		echo '</div>';
			if ( get_option('comment_registration') && !$user_ID ) { ?>
				<p>Anda harus <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">login</a> untuk berkomentar.</p>
			<?php } else { ?>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" role="form">
					<div class="form-group">
						<textarea name="comment" id="comment" tabindex="1" class="form-control" rows="5" placeholder="Ketik komentarmu di sini" required="required"></textarea>
					</div>
					<div><?php comment_id_fields(); ?><input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" /></div>
					<?php if ( $user_ID ) { ?>
						<p>Anda Login Sebagai <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
						<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
					<?php } else { ?>
						<div class="form-group row">
							<span class="col-md-1"></span>
							<div class="col-md-11 row">
								<div class="col">
									<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="2" class="form-control" placeholder="Nama - Wajib" required="required">
								</div>
								<div class="col">
									<input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="3" class="form-control" placeholder="Email - Wajib (Tidak di publish)" required="required">
								</div>
								<div class="col">
									<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="4" class="form-control" placeholder="Alamat Blog / Web Anda">
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if (get_option("comment_moderation") == "1") { ?>
						<p><small><strong>Catatan :</strong> Moderasi komentar aktif, komentar anda akan di tahan untuk sementara. Jadi tidak perlu memasukkan ulang komentar anda.</small></p>
					<?php } ?>
					<div class="form-group row">
						<span class="col-md-1"></span>
						<div class="col-md-11">
							<button type="submit" name="submit" id="submit" tabindex="5" class="btn btn-outline-success">Kirim Komentar</button>
						</div>
					</div>
					<?php do_action('comment_form', $post->ID); ?>
				</form>
			<?php }
		echo '</div>';
	} else {
		echo '<p>Comments are closed.</p>';
	} ?>
	<div class="row mt-3">
		<div class="col"><?php next_comments_link('Komentar lebih baru') ?></div>
		<div class="col text-right"><?php previous_comments_link('Komentar lebih lama') ?></div>
	</div>
</div>