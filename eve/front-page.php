<?php get_header(); ?>
		
		<section class="feature">
		<?php if(get_field('slides')) { ?>
			<?php while(has_sub_field('slides')) { ?>
				<?php $slideImage = get_sub_field('slide_image'); ?>
				<div class="slide" style="background-image:url('<?php echo $slideImage['url']; ?>')">
					<div class="container">
						<div class="col-md-6 slide-content v-center">
							<h1><?php the_sub_field('slide_title'); ?></h1>
							<h2><?php the_sub_field('slide_sub_title'); ?></h2>
							<a href="<?php the_sub_field('slide_link'); ?>" class="btn btn-black">Read More</a>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
				<!-- Can remove the below slide when acf slides configured -->
				<div class="slide" style="background-image:url('http://placehold.it/1920x600/2980B9/ffffff');">
					<div class="container">
						<div class="col-md-6 slide-content v-center">
							<h1>Lorem Ipsum</h1>
							<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt finibus diam faucibus lobortis. </h2>
							<a href="#" class="btn btn-black">Read More</a>
						</div>
					</div>
				</div>
		</section>
		
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
