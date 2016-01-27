<?php get_header(); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1><?php single_cat_title( '', true ); ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
		</div>
	</div>
</header>
<section class="section-content">
	<div class="container clearfix">
		<div class="content-primary col-md-8">
			<?php get_template_part('loop'); ?>
			<?php wp_reset_query(); ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>
