<?php get_header(); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1>
				<?php if (is_day()) { ?>
					<?php printf(_c('Daily archive %s'), get_the_date('M j, Y')); ?>
				<?php } elseif (is_month()) { ?>
					<?php printf(_c('Monthly archive %s'), get_the_date('F, Y')); ?>
				<?php } elseif (is_year()) { ?>
					<?php printf(_c('Yearly archive %s'), get_the_date('Y')); ?>
				<?php  } else { ?>
					<?php  echo get_queried_object()->name; ?>
				<?php } ?>
			</h1>
		</div>
	</div>
</header>
<section class="section-content">
	<div class="container clearfix">
		<div class="content-primary col-md-9">
			<?php get_template_part('loop'); ?>
			<?php wp_reset_query(); ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>
