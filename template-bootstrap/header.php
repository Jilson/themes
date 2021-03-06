<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta content="True" name="HandheldFriendly">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
<?php include_once(TEMPLATEPATH . "/includes/analytics.php") ?>
</head>
<body <?php body_class($class); ?>>
    <header class="header">
        	<div class="container clearfix">
				<div class="branding col-md-12">
					<h2 class="logo"><a href="/"><?php if(get_field('logo', 'option')) { $image = get_field('logo', 'option'); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php } else { bloginfo('name'); } ?></a></h2>
                </div>
				<nav class="navbar-wrapper navbar-default navbar-static-top col-md-12" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php  wp_nav_menu( array( 'menu' => 'Navigation', 'theme_location' => 'Navigation', 'depth' => 3, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker'  => new wp_bootstrap_navwalker() ) ); ?>
				</nav>
            </div>
    </header>
