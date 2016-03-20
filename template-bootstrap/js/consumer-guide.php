<?php
/*
Template Name: Consumer Guide
*/
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        <article class="hentry content entry col-md-9">
			<div <?php post_class('single'); ?> id="post_<?php the_ID(); ?>">
			<div class="entry-content"> 
			<div class="post-meta"><h1><?php the_title(); ?></h1></div>
			<div class="opener">
            <div class="featured-img"><img src="http://hearingaidslocal.com/wp-content/uploads/2013/03/cg.jpg" /></div>
            
            <div class="firstbox">
				<p>Learn what the experts have to say about popular brands. Act now to receive an unbiased, FREE copy of the 2014 Consumer's Guide to Hearing Aids. </p>
				<p>THIS IS THE ONLY UNBIASED, THIRD-PARTY SOURCE OF HEARING AID REVIEWS & COMPARISONS AVAILABLE!</p>
				<p>To get your personal copy, complete the form below.</p>
            </div>
          </div>
            <div class='gform_wrapper' id='gform_wrapper_5' >
            
            <a href="http://www.ascenthearing.com/consumer-guide/">SIGN UP HERE TODAY</a>
     
				<?php include (TEMPLATEPATH . '/includes/promos-three.php'); ?>
            </div>           
        </article>
        <?php endwhile; ?>
    <?php endif; ?>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>