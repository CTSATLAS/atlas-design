<?php
/**
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 * @since 02/06/2014
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CareerSource Pinellas develops and leads an effective, efficient and integrated business driven workforce system, providing comprehensive and responsive services to the County’s citizens and business community.">
	<meta name="keywords" content="CareerSource Pinellas,jobs,careers,workforce,worknet pinellas">
	<meta name="author" content="Complete Technology Solutions">

	<!-- css -->
	<link rel="stylesheet" href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' type='text/css'>
	<link rel="stylesheet" href="/css/theme/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/camera.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/dcsmt.css" type="text/css">
        <link rel="stylesheet" href="/css/theme/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/theme/step_container.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/theme/events.css" type="text/css" media="screen">
	
	<link rel="stylesheet" href="/css/theme/atlas-icons/style.css" type="text/css">
         <?php echo $this->Html->css('theme/sg-grid'); ?>


    <!--
	<link rel="stylesheet" href="/css/theme/font-awesome.min.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="/css/theme/font-awesome-ie7.min.css" type="text/css">
	<![endif]-->


	<!--[if lt IE 9]>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/theme/docs.css" type="text/css" media="screen">
		<link rel="stylesheet" href="/css/theme/ie.css" type="text/css" media="screen">
	<![endif]-->

	<!-- js -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>-->

	<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js') ?>

	<?= $this->Html->css('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/south-street/jquery-ui.css') ?>
	<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js') ?>

	<script type="text/javascript" src="/js/theme/modernizr.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/theme/superfish.js"></script>
	<script type="text/javascript" src="/js/theme/camera.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.ui.totop.js"></script>
	<script type="text/javascript" src="/js/theme/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/theme/easy-tabs/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="/js/theme/easy-tabs/jquery.hashchange.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.social.media.tabs.1.7.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.ba-throttle-debounce.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.transit.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.carouFredSel.packed.js"></script>

	<?= $scripts_for_layout ?>

	<!--[if (gt IE 9)|!(IE)]><!-->
		<script type="text/javascript" src="/js/theme/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->

	<!-- favicon -->
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	<!--[if lt IE 9]>
		<div style="clear: both; height: 59px; padding:0 0 0 15px; position: relative; text-align: center;"> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
	<![endif]-->

	<!-- title -->
	<title>
		<?= $title_for_layout ?>
		&mdash;
		<?php __('CareerSource Pinellas') ?>
	</title>
</head>
<body>
	<?= $this->element('no_javascript') ?>
	<?php echo $this->element('layouts/header') ?>

	<section id="content">
		<div class="container">
                <?php if ($title_for_layout === 'Home'): //display home ?>
			<div class="row">
				<div class="span12" id="main-content">
                        <?php echo $content_for_layout ?> 
                    </div>
                </div>
                <?php else: ///display content page ?>
                <div class="row-fluid">                                                  
                    <div class="span11 offset1" id="main-content">
					<?php if ($title_for_layout !== 'Home'): ?>
						<h1 id="page-title"><?= $title_for_layout ?></h1>
					<?php endif ?>
                        <div class="post">
                            <?php echo $content_for_layout ?> 
				</div>
			</div>
		</div>
                <?php endif ?> 
            </div>
	</section>

	<?= $this->element('layouts/footer') ?>

	<script>
            
		$(function () {
			$('.camera_wrap').camera();
			$('ul.nav li:first').addClass('li-first');
			$('.message').fadeOut(10000);

			if($('.actions ul').text() == '') {
				$('div.actions').hide();
			}

			if (!Modernizr.input.placeholder) {
				$('[placeholder]').focus(function () {
					var input = $(this);

					if (input.val() == input.attr('placeholder')) {
						input.val('');
						input.removeClass('placeholder');
					}
				}).blur(function () {
					var input = $(this);

					if (input.val() == '' || input.val() == input.attr('placeholder')) {
						input.addClass('placeholder');
						input.val(input.attr('placeholder'));
					}
				}).blur();

				$('[placeholder]').parents('form').submit(function () {
					var input = $(this);

					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				});
			}

			$('#events-slider').removeClass('hide')
			.carouFredSel({
				direction: 'up',
				height: 80,
				scroll: {
					items: 1,
					easing: 'linear',
					duration: 1000,
					pauseOnHover: true
				},
				width: 'auto'
			});

			$('#social-stream').dcSocialTabs({
				method: 'static',
				height: 450,
				width: 270,
				widgets: 'facebook,youtube',
				facebookId: 132438623509873,
				twitterId: 'TBWorkAlliance',
				youtubeId: 'WorkNetPinellas',
				twitter: {
					thumb: true
                                        
				}
			});
		});
                
                $('#tab-container').easytabs();
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-53497302-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
</body>
</html>
