<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="<?php bloginfo('web_description'); ?>">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
		
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
 		<?php wp_head(); ?>
	</head>
  
	<body>
 
	<div id="wrapper">
	 
		<div id="header">
			 
		<p class="description"><?php bloginfo('description'); ?></p>
					 
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					 
		<ul id="nav_left">
		<?php
		wp_nav_menu( array(
			'name' => 'menu_left',
			'theme_location' => 'menu_left'
		 ) );
		?>
		</ul>
		
		<ul id="nav_right">
		<?php
		wp_nav_menu( array(
			'name' => 'menu_right',
			'theme_location' => 'menu_right'
		 ) );
		?>
		</ul>
			 
		</div>