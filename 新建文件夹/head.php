<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">



	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_get_archives("type=monthly&format=link"); ?>

	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>

</head>

<body>
	<div id="header">
		<div id="nav_main">
			<div class="header_title">
			<!-- 博客的标题 -->
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo(‘name’); ?></a></h1>
			<!-- 博客描述 description -->
			<?php bloginfo( 'description' ); ?>
		</div>
		
		<?php 
  		if(function_exists('wp_nav_menu')) {
      		wp_nav_menu(array( 'theme_location' => 'top-menu','container_class'=>'menu_top','menu_id'=> 'menu_top_ul') ); 
  		}
		?>

		

		</div>
		
	</div>