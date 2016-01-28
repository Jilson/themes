<?php get_header(); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1>Search Result <span>|</span> <?php the_search_query(); ?></h1>
		</div>
	</div>
</header>
<section class="section-content">
	<div class="container clearfix">
		<div class="content-primary col-md-8">
				<?php get_search_form( ); ?>
			<?php if ( have_posts() ) : ?>
				<div class="loop-container">
					<?php get_template_part('loop'); ?>
				</div>
				<?php wp_reset_query(); ?>
			<?php else : ?>
				<div class="post-meta">
					Your search <strong><?php the_search_query(); ?></strong> did not match any documents. Try again using different terms or maybe you can find what you want using the sites main navigation
				</div>
			<?php endif; ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>