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
			<?php if ( have_posts() ) : ?>
				<?php get_search_form( ); ?>
				<div class="loop-container">
					<?php get_template_part('loop'); ?>
				</div>
				<?php wp_reset_query(); ?>
			<?php else : ?>
				<div class="entry-content">
					<div class="search">
						<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
							<fieldset>
								<input name="s" type="text" onfocus="if(this.value=='Search with some different keywords') this.value='';" onblur="if(this.value=='') this.value='Search with some different keywords';" value="Search with some different keywords" />
								<button type="submit"></button>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="post-meta">
					Your search <strong><?php the_search_query(); ?></strong> did not match any documents
				</div>
			<?php endif; ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>