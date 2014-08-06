<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Meşhur Çorlu Kahvesi
	</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500italic,500,300,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php

		echo $this->Html->css(array(
			'bootstrap.min',
			'bootstrap-theme.css',
			'font-awesome.min'
		));

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body class="loading">
	<div id="intro" class="sections window-height">
		<?php echo $this->element('Paralax/intro'); ?>
	</div>
	<div id="second" class="sections">
		<?php echo $this->element('Paralax/second'); ?>
	</div>
	<div class="container">
		<div class="row">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
 	<?php 

		echo $this->Html->script(array(
			'jquery-1.11.1.min',
			'bootstrap.min',
			'imagesloaded',
			'jquery.localscroll-1.2.7-min',
			'jquery.parallax-1.1.3',
			'jquery.scrollTo-1.4.2-min',
			'main'
		));

		echo $this->fetch('script');
	?>
</body>
</html>
