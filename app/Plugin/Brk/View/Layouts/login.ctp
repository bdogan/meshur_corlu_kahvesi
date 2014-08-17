<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    Achtung! Zu Kommen!
  </title>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500italic,500,300,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <?php

    echo $this->Html->css(array(
      'bootstrap.min',
      'bootstrap-theme.css',
      'font-awesome.min',
    ));

    echo $this->Html->css('brk_login');

    echo $this->fetch('meta');
    echo $this->fetch('css');
  ?>
</head>
<body>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->fetch('content'); ?>
   <?php 

    echo $this->Html->script(array(
      'jquery-1.11.1.min',
      'bootstrap.min',
    ));

    echo $this->fetch('script');
  ?>
</body>
</html>
