<?php get_header(); ?>
<!-- This sets the $curauth variable -->
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
<header class="page-body-header">
	<div class="container clearfix">
		<div class="col-md-12">
			<h1><?php echo $curauth->nickname; ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
		</div>
	</div>
</header>
<section class="section-content">
	<div class="container clearfix">
		<div class="content-primary col-md-8">
		<div class="post-meta">
		<div class="authorInfo">
			<div class="info">
				<h2>About the author <?php echo $curauth->nickname; ?></h2>
				<span><?php echo $curauth->user_description; ?></span>
			</div>
			<div class="author-image">
			</div>
		</div>
		<h1 class="postby">Posts by <?php echo $curauth->nickname; ?></h1>
		</div>
		<?php get_template_part('loop'); ?>
		<?php wp_reset_query(); ?>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>
<?php get_footer(); ?>