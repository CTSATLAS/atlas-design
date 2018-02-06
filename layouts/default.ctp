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
	<meta name="description" content="<?= Configure::read('Company.name') ?>">
	<meta name="keywords" content="<?= Configure::read('Company.name') ?>">
	<meta name="author" content="<?= Configure::read('Company.name') ?>">

	<!-- css -->
	<link rel="stylesheet" href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' type='text/css'>
	<link rel="stylesheet" href="/css/theme/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/camera.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/dcsmt.css" type="text/css">
        <link rel="stylesheet" href="/css/theme/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/theme/step_container.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/theme/events.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/theme/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="/css/theme/atlas-icons/style.css" type="text/css">
         <?php echo $this->Html->css('theme/sg-grid'); ?>

    <?php  if ($this->params['action'] == 'display' && $this->params['controller'] == "pages"):?>   
<link rel="stylesheet" href="css/tabs/css/tabs-style.css" type="text/css">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=188470541231776";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <?php endif; ?>


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

	<!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="img/theme/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/theme/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/theme/favicon-16x16.png">
    <link rel="manifest" href="img/theme/site.webmanifest">
    <link rel="mask-icon" href="img/theme/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

	<!--[if lt IE 9]>
		<div style="clear: both; height: 59px; padding:0 0 0 15px; position: relative; text-align: center;"> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
	<![endif]-->

	<!-- title -->
	<title>
		<?= $title_for_layout ?>
		&mdash;
		<?php __('CareerSource Okaloosa | Walton') ?>
	</title>
</head>
<body>
	<?php echo $this->element('layouts/header') ?>

	<section id="content">
		<div class="container">
		<?php //echo $this->params['action'] ?>
                <?php if ($title_for_layout === 'Home'): //display home ?>
			<div class="row">
				<div class="span12" id="main-content">
                        <?php echo $content_for_layout ?> 
                    </div>
                </div>
                <?php else: ///display content page ?>
                <div class="row-fluid">                                                  
                    <div class="span12" id="main-content" style="padding: 20px">
					<?php if ($title_for_layout !== 'Home'): ?>
						<h1 id="page-title"><?= $title_for_layout ?></h1>
					<?php endif ?>
                        <div class="post" style="padding: 0">
                            <?php echo $content_for_layout ?> 
				</div>
			</div>
		</div>
                <?php endif ?> 
            </div>
	</section>

	<?= $this->element('layouts/footer') ?>

	<script type="text/javascript" src="/js/theme/modernizr.min.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/theme/superfish.js"></script>
	<script type="text/javascript" src="/js/theme/camera.js"></script>
	<script type="text/javascript" src="/js/theme/jquery.ui.totop.js"></script>
	<script type="text/javascript" src="/js/theme/bootstrap.min.js"></script>
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
				widgets: 'facebook',
				facebookId: 136700043064540,
				twitterId: 'TBWorkAlliance',
				youtubeId: 'tbwavideos',
				twitter: {
					thumb: true
                                        
				}
			});
		});

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1035798246456870');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=1035798246456870&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110909006-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag()

{dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-110909006-1');
</script>
	</script>
</body>
</html>
