<?php 
/* Template Name: FAQ */
get_header(); ?>
	<header class="page-body-header">
		<div class="container clearfix">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<section class="section-content">
		<div class="container clearfix">
			<div class="content-primary col-lg-9">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>    
					<?php the_content(); ?>
                    <hr class="shadow">
					<?php if(get_field('faq')): ?>
					<div id="accordion">
						<?php while(has_sub_field('faq')): ?>
							<h3><?php the_sub_field('question'); ?></h3>
							<div><?php the_sub_field('answer'); ?></div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php get_footer(); ?>