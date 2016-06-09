<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">

	<!-- css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css">
	<link href='//fonts.googleapis.com/css?family=Lato:300,400,400italic,700' rel='stylesheet' type='text/css'>
	<?= $this->Html->css('style') ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?= $this->Html->meta('favicon.ico', '/theme/bluedrop/img/favicon.ico', array('type' => 'icon')) ?>

	<title>Pacific Gateway &mdash; <?= $title_for_layout ?></title>
</head>
<body>
	<!--[if lt IE 9]>
    <div class="alert alert-warning ie-warning" role="alert" style="position: top; text-align: center; top: 0;">
      <strong>Warning!</strong>
      You are using an outdated browser. For a faster, safer browsing experience, <a href="#" class="alert-link">upgrade for free today</a>.
    </div>
	<![endif]-->

  <?= $this->element('layouts/nav') ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?= $content_for_layout ?>
      </div>
    </div>
  </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="//use.fontawesome.com/88bf8d9902.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
  <?= $this->Html->script('js-cookie') ?>
  <?= $this->Html->script('global') ?>
	<?= $scripts_for_layout ?>
</body>
</html>
