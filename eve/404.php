<?php get_header(); ?>
	<header class="page-body-header">
		<div class="container clearfix">
			<div class="col-lg-12">
				<h1>Uh-Oh We couldn't find what you were looking for! 404!</h1>
			</div>
		</div>
	</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-lg-8">
				<?php get_search_form( ); ?>
				<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
					<div class="entry-content">
						<p>The page that you are trying to reach does not exist. You can try using the search form above or maybe the main navigation will point you in the right direction. Sorry for the inconvenience.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>