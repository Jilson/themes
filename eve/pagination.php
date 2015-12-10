<nav class="next-prev-posts">
	<?php
	$prev_post = get_adjacent_post(false, '', true);
	$next_post = get_adjacent_post(false, '', false); ?>
	<?php if ($prev_post) : $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
		<a class="post-prev" href="<?php echo $prev_post_url; ?>"><span>&#171; Older Posts</span></a>
	<?php endif; ?>
	<?php if ($next_post) : $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
		<a class="post-next" href="<?php echo $next_post_url; ?>"><span>Newer Posts &#187;</span></a>
	<?php endif; ?>
</nav>