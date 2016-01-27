<?php get_header(); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
		</div>
	</div>
</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-md-8">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class('hentry post'); ?> id="post_<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
							<?php if ( has_post_thumbnail()) : ?>
								<div class="post-feature-image">
									<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
										<?php the_post_thumbnail('blog-thumb', array('class' => 'img-responsive')); ?>
										<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "blog-thumb" ); ?>
										<span itemprop="url" content="<?php echo $image_data[0];?>">
										<span itemprop="width" content="<?php echo $image_data[1];?>">
										<span itemprop="height" content="<?php echo $image_data[2];?>">
									</span>
								</div>
							<?php endif; ?>
							<div class="article-inner">
								<h1 class="entry-title" itemprop="name headline"><?php the_title(); ?></h1>
								<div class="post-meta">
									<div class="meta"><time datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time(__('M j, Y')) ?></time><time itemprop="dateModified" datetime="<?php the_modified_time('c'); ?>"></time></div>
									<div class="meta author"><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="http://schema.org/Person"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Posts by <?php the_author(); ?>" itemprop="url"><span itemprop="name"><?php the_author(); ?></span></a></span></div>
									<div class="meta"><i class="fa fa-tag"></i> <span itemprop="about"><?php the_category(', '); ?></span></div>
									<div class="meta"><i class="fa fa-comments"></i> <a href="#newcomment" title="Comment on <?php the_title(); ?>"><?php comments_popup_link(__('No Comments'), __('<strong>1</strong> Comment'), __('<strong>%</strong> Comments'), '', __('Comments Closed')); ?></a></div>
									<span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
										<meta itemprop="name" content="<?php bloginfo('name'); ?>">
										<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
											<?php if(get_field('logo', 'options')) { $logo = get_field('logo', 'options'); } ?>
											<meta itemprop="url" content="<?php echo $logo['url']; ?>">
											<meta itemprop="width" content="<?php echo $logo['width']; ?>">
											<meta itemprop="height" content="<?php echo $logo['height']; ?>">
										</span>
									</span>
									 <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>
								</div>
								<div class="post-content clearfix" itemprop="articleBody"><?php the_content(); ?></div>
								<?php comments_template(); ?>
								<div class="pagination">
									<?php previous_post_link('<div class="pull-left">%link</div>', '<i class="fa fa-angle-double-left"></i> Previous Post'); ?>
									<?php next_post_link('<div class="pull-right">%link</div>', 'Next Post <i class="fa fa-angle-double-right"></i>'); ?>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar('blog'); ?>
		</div>
	</section>
<?php get_footer(); ?>