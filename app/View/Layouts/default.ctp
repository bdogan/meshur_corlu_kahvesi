<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Meşhur Çorlu Kahvesi
	</title>

	<meta name="keywords" content="kahve,meşhur,çorlu,geleneksel kahve,yöresel lezzet,türk kahvesi,toptan türk kahvesi,bitter kahve,kakuleli kahve,sade kahve,meşhur çorlu kahvesi,meyveli türk kahvesi" />
	<meta name="description" content="Meşhur çorlu kahvesi, Uygun fiyatlı toptan satış" />
	<meta name="author" content="PlatinTedarik" />
	<meta name="robots" content="All" />

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500italic,500,300,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places" type="text/javascript"></script>
	<?php

		echo $this->Html->css(array(
			'bootstrap.min',
			'bootstrap-theme.css',
			'font-awesome.min',
			'bootstrap-social',
			'jquery.bxslider',
		));

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body class="loading" onload=initMap()>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
 	<?php 

		echo $this->Html->script(array(
			'jquery-1.11.1.min',
			'bootstrap.min',
			'imagesloaded',
			'jquery.localscroll-1.2.7-min',
			'jquery.parallax-1.1.3',
			'jquery.scrollTo-1.4.2-min',
			'jquery.bxslider.min',
			'main'
		));

		echo $this->fetch('script');
	?>
</body>
</html>
