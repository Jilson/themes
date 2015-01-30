<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div <?php post_class('hentry post'); ?> id="post_<?php the_ID(); ?>">
	<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="post-meta">
		<div class="meta"><i class="fa fa-clock-o"></i> <?php the_time(__('M j')) ?></div>
		<div class="meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> </div>
		<div class="meta"><i class="fa fa-tag"></i> <a href="#"><?php the_category(', '); ?></a></div>
		<div class="meta"><i class="fa fa-comments"></i> <a href="#" title="Comment on <?php the_title(); ?>"><?php comments_popup_link(__('No Comments'), __('<strong>1</strong> Comment'), __('<strong>%</strong> Comments'), '', __('Comments Closed')); ?></a></div>
	</div>
	<?php if ( has_post_thumbnail()) : ?>
		<div class="post-feature-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
		</div>
	<?php endif; ?>
	<div class="post-content clearfix">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink() ?>" class="continue-reading"><i class="fa fa-angle-double-right fa-fw"></i>Continue Reading</a>
	</div>
</div>
<?php endwhile; endif;  ?>

