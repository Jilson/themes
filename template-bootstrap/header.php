<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta content="True" name="HandheldFriendly">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.ico" type="image/x-icon" />
<script type="text/javascript" src="http://fast.fonts.net/jsapi/54712a40-e515-4ca2-8010-8021f9fe5182.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php include_once(TEMPLATEPATH . "/includes/analytics.php") ?>
<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
    <header class="header">
    	<div class="ui-secondary">
        	<div class="container clearfix">
				<div class="branding col-md-12">
					<h2 class="logo"><a href="/"><?php if(get_field('logo', 'option')) { $image = get_field('logo', 'option'); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php } else { bloginfo('name'); } ?></a></h2>
                </div>
				<nav class="navbar-wrapper navbar-default navbar-static-top col-md-12" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					</div>
					<?php  wp_nav_menu( array( 'menu' => 'Navigation', 'theme_location' => 'Navigation', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker'  => new wp_bootstrap_navwalker() ) ); ?>
				</nav>
            </div>
        </div>
    </header>
