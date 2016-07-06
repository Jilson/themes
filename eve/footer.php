    <footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
    	<section class="footer-information">
    		<div class="container clearfix">

    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u"><a href="tel:<?php the_field('phone', 'options'); ?>" title="Call <?php echo bloginfo('name'); ?>"><?php the_field('phone', 'options'); ?></a></h3>
    				<p><?php the_field('hours', 'options'); ?></p>
    			</div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u"><a href="mailto:<?php the_field('email', 'options'); ?>" title="Email <?php echo bloginfo('name'); ?>">Email Us</a></h3>
    				<p>Have questions? don't hesitate to ask us!</p>
    			</div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u"><a href="/contact-us" title="View our location">Location</a></h3>
    				<?php  
                        $address =  get_field('address', 'options'); 
                        $addressExplode = explode(',', $address[address]);
                        $stateExplode = explode(' ', $addressExplode[2]); 
                        $street = $addressExplode[0];
                        $city = $addressExplode[1];
                        $state = $stateExplode[1];
                        $zip = $stateExplode[2];
                    ?>
                    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress"><?php echo $street; ?></span><span itemprop="addressLocality"><?php echo $city; ?></span>, <span itemprop="addressRegion"><?php echo $state; ?></span> <span itemprop="postalCode"><?php echo $zip; ?></span></address>
    			</div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u"><a href="/faq" title="Read Frequently Asked Questions">FAQS</a></h3>
					<p>Read answers to commonly asked questions</p>
    			</div>
    			<div class="col-md-12 clearfix"><div class="border-bottom"></div></div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
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
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u">About <?php echo bloginfo('name'); ?></h3>
					<p></p>
    			</div>
    			<div class="clearfix-sm"></div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u">Our Vision</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium egestas augue vel dictum.</p>
    			</div>
    			<div class="col-md-3 col-sm-6 footer-information-section">
					<h3 class="tt-u">Connect</h3>
					<ul>
						<li><a target="_blank" href="<?php the_field('facebook', 'options'); ?>" title="<?php echo bloginfo('name'); ?> on Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="<?php the_field('google', 'options'); ?>" title="<?php echo bloginfo('name'); ?> on Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a target="_blank" href="<?php the_field('yelp', 'options'); ?>" title="<?php echo bloginfo('name'); ?> on Yelp"><i class="fa fa-yelp"></i></a></li>
						
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