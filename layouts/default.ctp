<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<!-- css -->
	<link rel="stylesheet" href="/css/font-awesome.min.css" media="screen" />
	<link rel="stylesheet" href="/css/theme/style.css" media="screen" />
	<link rel="icon" href="images/favicon.ico" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="/css/font-awesome-ie7.min" media="screen" />
	<![endif]-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="/css/theme/ie.css"> 
	<![endif]-->

	<link rel="shortcut icon" href="images/favicon.ico" />

	<title><?= $title_for_layout ?> &mdash; Job Smart Tampa Bay</title>
</head>
<body>
	<!--[if lt IE 8]><?= $this->element('layouts/ie_warning') ?><![endif]-->
	<div class="body-glow">
		<div class="main">
			<!-- header -->
			<header>
				<?= $this->element('layouts/header') ?>
				<?= $this->element('layouts/slider') ?>
				
				<div>
					<div class="col-green maxheight">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Confidence</h3>
							<div>
								<p>Reliance on one's ability to succeed.</p>
							</div>
						</div>
					</div>
					<div class="col-blue maxheight">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Knowledge</h3>
							<div>
								<p>Increasing one’s information, experiences and understanding</p>
							</div>
						</div>
					</div>
					<div class="col-light-blue last-col maxheight">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Independence</h3>
							<div>
								<p>Reliance on one’s own actions and abilities</p>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</header><!-- end header -->
			
			<section id="content">
				<?php if ($this->here === '/'): ?>
					<?= $content_for_layout ?>
				<?php else: ?>
					<div class="container_24">
						<div class="wrapper">
							<div class="grid_24">
								<div class="rt-indent-1">
									<h2 class="indent-bot-1"><?= $title_for_layout ?></h2>
									<?= $content_for_layout ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif ?>
			</section>
			<div class="clear"></div>
		</div>
	</div>

	<script src="/js/theme/jquery-1.7.2.min.js"></script>
	<script src="/js/theme/superfish.js"></script>
	<script src="/js/theme/jquery.responsivemenu.js"></script>
	<script src="/js/theme/jquery.elastislide.js"></script>
	<script src="/js/theme/camera.js"></script>
	<script src="/js/theme/jquery.easing.1.3.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!--><script src="/js/theme/jquery.mobile.customized.min.js"></script><!--<![endif]-->
	<!--[if lt IE 9]>
		<script src="/js/theme/html5.js"></script>
		<script src="/js/theme/jquery.hoverIntent.minified.js"></script>
	<![endif]-->
	<script src="/js/theme/jquery.equalheights-rt.js"></script>
	<script src="/js/theme/script.js"></script>
	<?= $scripts_for_layout ?>
	<script>
		$(function () {
			$('.camera_wrap').camera();
			$('#carousel').elastislide({
				speed		: 450,
				easing		: '',
				imageW		: 140,
				margin		: 30,
				border		: 0,
				minItems	: 1,
				current		: 0
			});
		});
	</script>
</body>
</html>