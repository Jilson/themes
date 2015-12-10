<?php get_header(); ?>
		<?php $row = 1; if(get_field('slides')): ?>
			<section class="section-feature">
				<div class="container">
					<div class="col-md-12">
					  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php while(has_sub_field('slides')): $i=0; ?>
									<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="active"></li>
								<?php $i++; endwhile; ?>
							</ol>
							<div class="carousel-inner">
								<?php while(has_sub_field('slides')):  $background = get_sub_field('slide_background');?>
									<div class="item <?php if($row == 1) { echo 'active'; } ?>">
										<img src="<?php echo $background['url']; ?>" alt="<?php echo $background['alt']; ?>">
										<div class="carousel-caption">
											<h2><?php the_sub_field('main_title'); ?></h2>
											<h3><?php the_sub_field('sub_title'); ?></h3>
											<a class="button" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
										</div>
									</div>
								<?php $row++; endwhile; ?>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span><i class="fa fa-chevron-left"></i></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span><i class="fa fa-chevron-right"></i></span>
							</a>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
        <section class="section-content">
        	<div class="container clearfix">
            	<div class="content-primary col-md-9">
					<h1><?php bloginfo('blogname'); ?><span class="small-title"><?php bloginfo('description'); ?></span></h1>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
               <?php get_sidebar(); ?>
            </div>
        </section>
<?php get_footer(); ?>
