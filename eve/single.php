<?php get_header(); ?>
	<section class="section-content">
		<div class="container clearfix">
			<div class="col-md-9">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); $post_classes ='first-post'; ?>
						<article <?php post_class($post_classes); ?> id="post_<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
							<header class="post-info clearfix">
								<h1 class="entry-title" itemprop="name headline"><?php the_title(); ?></h1>
								<div class="post-meta">
									<div class="meta">
										<time datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time(__('F j, Y')) ?></time>
										<time itemprop="dateModified" datetime="<?php the_modified_time('c'); ?>"></time> by 
										<span itemprop="author" itemscope itemtype="http://schema.org/Person"> 
											<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Posts by <?php the_author(); ?>" itemprop="url">
												<span itemprop="name"><?php the_author(); ?></span>
											</a>
										</span>
									</div>
									<div class="meta">
										<span itemprop="about">
											<?php the_category(', '); ?>
										</span>
									</div>
									<span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
										<meta itemprop="name" content="<?php bloginfo('name'); ?>">
										<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
											<?php $logo = get_field('logo', 'options'); ?>
											<meta itemprop="url" content="<?php echo $logo['url']; ?>">
											<meta itemprop="width" content="<?php echo $logo['width']; ?>">
											<meta itemprop="height" content="<?php echo $logo['height']; ?>">
										</span>
									</span>
									<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>
								</div>
								<?php include(TEMPLATEPATH . "/includes/share.php") ?>
							</header>
							<?php if(get_field('post_introduction')) { the_field('post_introduction'); } ?>
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
							<div class="post-content content-primary clearfix" itemprop="articleBody"><?php the_content(); ?></div>
							<div class="pagination">
								<?php previous_post_link('<div class="pull-left">%link</div>', '<i class="fa fa-angle-double-left"></i> Previous Post'); ?>
								<?php next_post_link('<div class="pull-right">%link</div>', 'Next Post <i class="fa fa-angle-double-right"></i>'); ?>
							</div>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar('blog'); ?>
			<div class="related-posts col-md-12">
				<div class="related-posts-container border-top border-bottom">
					<h3 class="related-title">Related Posts</h3>
					<?php $queried_object = get_queried_object(); $terms = get_the_terms($queried_object->ID, 'category'); ?>
					<?php 
					$columns = 3;
					$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'category__in' => $terms, 'post__not_in' => array($queried_object->ID) );
						$articles = new WP_Query( $args );
						if ( $articles->have_posts() ) : ?>
						<div class="row">
							<?php while ( $articles->have_posts() ) : $articles->the_post();?>
								<?php include( locate_template( 'loop.php' ) ); ?>
							<?php endwhile; ?> 
						</div>
				<?php endif; wp_reset_postdata(); ?>				
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>