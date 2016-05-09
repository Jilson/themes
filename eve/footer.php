    <footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
    	<section class="footer-information">
    		<div class="container clearfix">

    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section icon-left">
    				<i class="fa fa-phone"></i>
					<h3 class="tt-u"><a href="tel:<?php the_field('phone', 'options'); ?>" title="Call Atlas HVAC"><?php the_field('phone', 'options'); ?></a></h3>
    				<p><?php the_field('hours', 'options'); ?></p>
    			</div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section icon-left">
    				<i class="fa fa-envelope"></i>
					<h3 class="tt-u"><a href="mailto:<?php the_field('email', 'options'); ?>" title="Email Atlas HVAC">Email Us</a></h3>
    				<p>Have questions? don't hesitate to ask us!</p>
    			</div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section icon-left">
    				<i class="fa fa-map-marker"></i>
					<h3 class="tt-u"><a href="/contact-us" title="View our location">Location</a></h3>
    				<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress"><?php the_field('street', 'options'); ?></span><br /><span itemprop="addressLocality"><?php the_field('city', 'options'); ?></span>, <span itemprop="addressRegion"><?php the_field('state', 'options'); ?></span> <span itemprop="postalCode"><?php the_field('zip', 'options'); ?></span></address>
    			</div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section icon-left">
    				<i class="fa fa-question-circle"></i>
					<h3 class="tt-u"><a href="/faq" title="Read Frequently Asked Questions">FAQS</a></h3>
					<p>Read answers to commonly asked questions</p>
    			</div>
    			<div class="col-md-12 clearfix"><div class="border-bottom"></div></div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section">
    				<h3 class="tt-u">Service Areas</h3>
    				<?php $args = array( 'post_type' => 'areas', 'posts_per_page' => -1 );
						$areas = new WP_Query( $args );
						if ( $areas->have_posts() ) : $count = 0; $i = 1; ?>
						<?php while ( $areas->have_posts() ) : $areas->the_post(); $count++; endwhile;?>	
        				<p>
        				<?php while ( $areas->have_posts() ) : $areas->the_post();
							?>
        					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('city_name'); ?></a><?php if($i == $count) {} else { ?>, <?php } ?>
        				<?php $i++; endwhile;?>
        				</p>
        			<?php endif; wp_reset_postdata();  ?>
    			</div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section">
					<h3 class="tt-u">About Atlas</h3>
					<p>Atlas Heating and Air Conditioning Inc. is dedicated to providing consumers with quality, value and customer satisfaction.</p>
    			</div>
    			<div class="clearfix-sm"></div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section">
					<h3 class="tt-u">Our Vision</h3>
					<p>Atlas Heating and Air Conditioning Inc. strives to provide the highest quality HVAC service to Sonoma County.</p>
    			</div>
    			<div class="col-md-3 col-xxs col-sm-6 col-xs-6 footer-information-section">
					<h3 class="tt-u">Connect</h3>
					<ul>
						<li><a target="_blank" href="<?php the_field('facebook', 'options'); ?>" title="Atlas Heating and Air Conditioning on Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="<?php the_field('google', 'options'); ?>" title="Atlas Heating and Air Conditioning on Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a target="_blank" href="<?php the_field('yelp', 'options'); ?>" title="Atlas Heating and Air Conditioning on Yelp"><i class="fa fa-yelp"></i></a></li>
						
					</ul>
    			</div>
    			<div class="col-md-12 clearfix"><div class="border-bottom"></div></div>
    		</div>
    	</section>
        <section class="footer-copyright">
        	<div class="container clearfix">
            	<div class="col-md-12">
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="http://www.westcounty.com/web-services/" title="Web Design & Development by West County" target="_blank">Web Development</a> By <a href="http://www.westcounty.com" title="West County Net Santa Rosa" target="_blank">West County Net</a></p>
                </div>
            </div>
        </section><!-- end footer-copyright -->
    </footer><!-- end page-footer -->
</body>
<?php wp_footer(); ?>
</html>