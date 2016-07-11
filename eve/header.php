<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta content="True" name="HandheldFriendly">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<link href='https://fonts.googleapis.com/css?family=Hind:400,700,300,500' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
<?php include_once(TEMPLATEPATH . "/includes/analytics.php") ?>
</head>
<body <?php body_class($class); ?> itemscope itemtype="http://schema.org/WebPage">
    <header class="header clearfix" itemscope itemtype="http://schema.org/WPHeader">
        	<div class="container-fluid clearfix">
				<div class="branding">
					<div class="logo">
						<a href="/" title="<?php bloginfo('name'); ?>">
							<?php if(get_field('logo', 'option')) : $image = get_field('logo', 'option'); ?>
								<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php bloginfo('name'); ?> Logo" />
							<?php else : ?>
								<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/westcounty_logo_final.png" />	
							<?php endif; ?>
						</a>
					</div>
                </div>
				<nav class="navbar-wrapper" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php  wp_nav_menu( array( 'menu' => 'Navigation', 'theme_location' => 'Navigation', 'depth' => 3, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker'  => new wp_bootstrap_navwalker() ) ); ?>
					<button type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</nav>
            </div>
    </header>
