<?php get_header(); ?>
	<header class="page-body-header">
		<div class="container clearfix">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-md-8">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>    
						<div <?php post_class(''); ?> id="post_<?php the_ID(); ?>">
							<div class="entry-content"><?php the_content(); ?></div>
						</div>           
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer(); ?>

