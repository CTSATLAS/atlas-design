<!DOCTYPE html>
<html lang="en-us">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= Configure::read('Company.name') ?>">
	<meta name="keywords" content="<?= Configure::read('Company.name') ?>">
	<meta name="author" content="<?= Configure::read('Company.name') ?>">

	<!-- stylesheets -->
    <?= $this->Html->css('application') ?>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="img/theme/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/theme/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/theme/favicon-16x16.png">
    <link rel="manifest" href="img/theme/site.webmanifest">
    <link rel="mask-icon" href="img/theme/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

	<title>
		<?= $title_for_layout ?> &mdash; <?= Configure::read('Company.name') ?>
	</title>
</head>
<body>
    <?= $content_for_layout ?>

    <!-- javascripts -->
    <?= $this->Html->script('dist/application') ?>
</body>
</html>
