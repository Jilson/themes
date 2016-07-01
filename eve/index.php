<?php get_header(); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1>Blog</h1>
			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
		</div>
	</div>
</header>
<section class="section-content">
	<div class="container clearfix">
		<div class="content-primary col-md-9">
			<div class="loop-container row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php include( locate_template( 'loop.php' ) ); ?>
				<?php endwhile; ?>
				<div class="paginate col-md-12">
					<?php
					global $wp_query;	
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?page=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_next' => false,
					) );
					?>
				</div>
				<?php endif;  ?>
			</div>
			<?php wp_reset_query(); ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>
