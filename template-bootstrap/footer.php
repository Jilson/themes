    <footer class="footer">
    	<section class="footer-primary"> 
        	<div class="container clearfix">
				<?php if( get_field('footer_links','option') ): while( has_sub_field('footer_links', 'option') ) : ?>
					<div class="col-md-2">
						 <h3><?php the_sub_field('link_group_heading'); ?></h3>
						 <?php $rows = get_sub_field('links'); if($rows) :	?>
							<ul>
								<?php foreach($rows as $row) : ?>
										<li><a href="<?php echo $row['link_destination']; ?>" title="<?php echo $row['link_text']; ?>"><?php echo $row['link_text']; ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php	endif; ?>
					</div>
				<?php endwhile; endif; ?>
				<div class="col-md-4">
					<div class="newsletter-sign-up">
						<?php /* gravity_form(5, true, true, false, null, true, 10); */ ?>
					</div>
				</div>
            </div>
        </section><!-- end footer-primary -->
        <section class="footer-copyright">
        	<div class="container clearfix">
            	<div class="col-md-12">
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="http://www.westcounty.com/web-services/" title="Web Design & Development by West County Net" target="_blank">Web Development</a> &#38; <a href="http://www.westcounty.com/web-services/marketing-seo/search-engine-optimization/" title="Santa Rosa SEO Company" target="_blank">SEO</a> By <a href="http://www.westcounty.com" title="West County Net Santa Rosa" target="_blank">West County Net</a></p>
                </div>
            </div>
        </section><!-- end footer-copyright -->
    </footer><!-- end page-footer -->
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/respond.js"></script>
<?php wp_footer(); ?>
</html>