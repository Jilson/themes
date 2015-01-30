<?php get_header(); ?>
<div itemscope itemtype="http://schema.org/Article">
	<header class="page-body-header">
		<div class="container clearfix">
			<div class="col-md-12">
				<h1 class="entry-title" itemprop="name headline"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-md-9">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div <?php post_class('hentry post'); ?> id="post_<?php the_ID(); ?>">
							<div class="post-meta">
								<div class="meta"><i class="fa fa-clock-o"></i> <?php the_time(__('M j')) ?></div>
								<div class="meta author"><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="http://schema.org/Person" itemprop="name"> <?php the_author_posts_link(); ?></span></div>
								<div class="meta"><i class="fa fa-tag"></i> <span itemprop="about"><?php the_category(', '); ?></span></div>
								<div class="meta"><i class="fa fa-comments"></i> <a href="#newcomment" title="Comment on <?php the_title(); ?>"><?php comments_popup_link(__('No Comments'), __('<strong>1</strong> Comment'), __('<strong>%</strong> Comments'), '', __('Comments Closed')); ?></a></div>
							</div>
							<?php if ( has_post_thumbnail()) : ?><div class="post-feature-image"><?php the_post_thumbnail('large'); ?></div><?php endif; ?>
							<div class="post-content clearfix" itemprop="articleBody"><?php the_content(); ?></div>
							<?php include(TEMPLATEPATH . "pagination.php") ?>
							<?php comments_template(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar('blog'); ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>