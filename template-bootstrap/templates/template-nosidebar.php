<?php
/* Template Name: No Sidebar */
get_header(); ?>
	<header class="page-body-header">
		<div class="container clearfix">
			<div class="col-lg-12 col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-lg-12 col-md-12">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>    
						<div <?php post_class(''); ?> id="post_<?php the_ID(); ?>">
							<div class="entry-content"><?php the_content(); ?></div>
						</div>           
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>

