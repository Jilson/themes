<aside class="sidebar col-md-4">
	<?php if ( function_exists ( dynamic_sidebar('blog') ) ) : ?>
		<?php dynamic_sidebar ('blog'); ?>
	<?php endif; ?>
	<div class="widget recent-posts">
		<div class="widget-title"><h3>Recent Posts</h3></div>
		<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
		$posts = new WP_Query( $args );
		if ( $posts->have_posts() ) : ?>
		<ul>
			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<li>
					
					<div class="widget-post-thumbnail"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); } ?></a></div>
					<div class="widget-post-content">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<cite><?php the_time('M d, Y'); ?></cite>
					</div>
					
				</li>		
			<?php endwhile; ?>
		</ul>
		<?php endif; wp_reset_postdata(); ?>				
	</div>
	<div class="widget categories">
		<div class="widget-title"><h3>Categories</h3></div>
		<div class="widget-body">
		<?php	$args = array( 'hide_empty' => 1 );
		$terms = get_terms( 'category', $args );
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) { ?>
			<ul>
			<?php foreach ( $terms as $term ) { ?>
				<li><i class="fa fa-folder-open-o"></i> <a href="<?php echo get_term_link( $term ); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a> ( <?php echo $term->count; ?> )</li>
			<?php } ?>
			</ul>
		<?php } ?>
		</div>
	</div>
	
</aside>
