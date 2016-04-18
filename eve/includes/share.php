<ul class="share">
	<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");  ?>
	<li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-facebook"></i></a></li>
	<li><a class="twitter" href="https://twitter.com/home?status=<?php the_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-twitter"></i></a></li>
	<li><a class="google-plus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-google-plus"></i></a></li>
	<li><a class="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $image_data[0]; ?>&description=<?php echo get_the_excerpt(); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-pinterest"></i></a></li>
	<li><a class="email" href="mailto:?&subject=&body=<?php the_permalink(); ?>" ><i class="fa fa-envelope"></i></a></li>
</ul>