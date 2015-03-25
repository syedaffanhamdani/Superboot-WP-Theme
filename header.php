<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/modal-styles.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/button-plus.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animations.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/iconmoon.css" type="text/css"  />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />

	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/holder.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
	
	<!-- Wordpress Admin Bar & Header Defaults -->
	<?php wp_head(); ?>

</head>
<body>

	