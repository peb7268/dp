<!DOCTYPE html>
<!-- http://copypastecharacter.com/all-characters -->
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>Page Title</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700|Anton' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">

	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div id="wrapper" class="clearfix">
	<?php require_once 'searchform.php'; ?>
	<header class="clearfix">
		<div id="logo">
			<h1>DOC<span>PLUS</span></h1>
			<p class="tagline">A Chiropractic EMR Company</p>
		</div><!-- #logo -->
		<div class="navigation clearfix">
			<a href="#">≡ </a>
			<span>Navigation</span>
		</div><!-- .navigation -->
		<?php 
			wp_nav_menu( array(
				'theme_location'  	=> 'Primary', 
				'container_id' 		=> 'navigation'
				)
			); 
		?> 
	</header>