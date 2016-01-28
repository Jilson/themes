<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>
<?php if($comments) : ?>
	<div class="comments">
		<p><h3>Comments </h3><a class="newComment btn btn-primary" href="#newcomment">Add a comment</a></p>
		<ol>
			<?php foreach($comments as $comment) : ?>
			<li id="comment-<?php comment_ID(); ?>">
				<div class="comment-content">
				<?php if ($comment->comment_approved == '0') : ?>
					<p class="approval">Your comment is awaiting approval</p>
				<?php endif; ?>
				<?php comment_text(); ?>
				</div>
				<p class="meta"><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></p>
			</li>
			<?php endforeach; ?>
		</ol>
	</div>
<?php else : ?>
	<div class="comments">
		<p class="comment-content">No comments yet. <a class="newComment" href="#newcomment">Add the first comment</a></p>
	</div>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		<div class="comment-form">
			<h3 id="newcomment" class="title bottom-2">Add Comment</h3>
			<form  action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if($user_ID) : ?>
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
				<?php else : ?>
					<div class="form-box col-lg-4 col-md-4 col-sm-4">
						<label for="author">Name <sup>*</sup></label>
						<input class="form-control" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1">
					</div><!-- End Box -->
					<div class="form-box col-lg-4 col-md-4 col-sm-4">
						<label for="email">Email <sup>*</sup></label>
						<input class="form-control" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
					</div><!-- End Box -->
					<div class="form-box col-lg-4 col-md-4 col-sm-4">
						<label for="url">Website</label>
						<input class="form-control" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					</div><!-- End Box -->
					<?php endif; ?>
					<div class="form-box col-lg-12 ">
						<label for="comment">Comment <sup>*</sup></label>
						<textarea class="form-control" name="comment" id="comment" rows="10" tabindex="4"></textarea>
					</div><!-- End Box -->
					<div class="clearfix"></div>
					<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn btn-primary" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		</div>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>