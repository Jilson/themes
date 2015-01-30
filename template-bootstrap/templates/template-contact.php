<?php 
/* Template Name: Contact Us */
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
                    <div class="col-md-4">
						<h3>Contact Details</h3>
						<ul class="fa-ul">
                            <?php if(get_field('city', 'option')) { ?><li><i class="fa-li fa fa-globe fa-fw"></i><?php the_field('street', 'option'); ?><br /><?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?>, <?php the_field('zip', 'option'); ?></li><?php } ?>
                            <?php if(get_field('email', 'option')) { ?><li><i class="fa-li fa fa-envelope fa-fw"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li><?php } ?>
                            <?php if(get_field('primary_phone_number', 'option')) { ?><li><i class="fa-li fa fa-phone fa-fw"></i><?php the_field('primary_phone_number', 'option'); ?></li><?php } ?>
                    	</ul>
                    </div>
                    <div class="col-md-8">
						<?php the_content(); ?>
                    </div>
					<hr class="shadow">
                    <div class="contact-container clearfix">
                        <div class="col-md-6">
							<?php $street = get_field('street', 'option');  $streeturl = str_replace(' ', '%20', $street);
										$city = get_field('city', 'option');  $cityurl = str_replace(' ', '%20', $city);
										$state = get_field('state', 'option');  $stateurl = str_replace(' ', '%20', $state); ?> 
                        	<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $streeturl; ?>%2C%20<?php echo $cityurl; ?>%2C%20<?php echo $stateurl; ?>%2C%20United%20States&key=AIzaSyA6K24l8Hovl7GGUSsU1XY9eIaNBjp-zBk"></iframe>
                        </div>
                        <div class="col-md-6">
							<?php gravity_form(1, true, true, false, null, true, 10); ?>
                        </div>
                    </div><!-- end contact container -->
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar('sidebar'); ?>
		</div>
	</section>
<?php get_footer(); ?>