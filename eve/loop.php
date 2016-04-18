	<?php 
	// Differences between first post
	if($i == 1) {
		$postClasses = 'hentry post col-md-12 first-post'; $wordCount = 60; 
	} else if ($columns == 3) {
		$postClasses = 'hentry post col-md-4'; $wordCount = 20;

	} else { 
		$postClasses = 'hentry post col-md-6'; $wordCount = 20;
	}
	?>
	<article <?php post_class($postClasses); ?> id="post_<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
		<?php if ( has_post_thumbnail()) : ?>
			<div class="post-feature-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
						<?php the_post_thumbnail('thumb825x450', array('class' => 'img-responsive')); ?>
						<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumb825x450" ); ?>
						<span itemprop="url" content="<?php echo $image_data[0];?>">
						<span itemprop="width" content="<?php echo $image_data[1];?>">
						<span itemprop="height" content="<?php echo $image_data[2];?>">
					</span>
				</a>
			</div>
		<?php endif; ?>
		<div class="article-loop-content">
			<h1 class="entry-title" itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div class="post-meta">
				<div class="meta"><time datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time(__('F j, Y')) ?></time><time itemprop="dateModified" datetime="<?php the_modified_time('c'); ?>"></time> by <span itemprop="author" itemscope itemtype="http://schema.org/Person"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Posts by <?php the_author(); ?>" itemprop="url"><span itemprop="name"><?php the_author(); ?></span></a></span></div>
				<div class="meta"><i class="fa fa-comments"></i> <a href="#newcomment" title="Comment on <?php the_title(); ?>"><?php comments_popup_link(__('No Comments'), __('<strong>1</strong> Comment'), __('<strong>%</strong> Comments'), '', __('Comments Closed')); ?></a></div>
				<?php if($i == 1 ) { ?>
					<div class="meta"><i class="fa fa-tag"></i> <span itemprop="about"><?php the_category(', '); ?></span></div>
				<?php } ?>
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
			<?php if($i == 1) { ?><?php include_once(TEMPLATEPATH . "/includes/share.php") ?><?php } ?>
			<p itemprop="articleBody"><?php echo limit_text(get_the_content(), $wordCount); ?></p>
			
		</div>
	</article>
		





