<?php
/**
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">

	<!-- css -->
	<link rel="stylesheet" href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' type='text/css'>
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/camera.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">

	<!--[if IE 7]>
		<link rel="stylesheet" href="/css/font-awesome-ie7.min.css" type="text/css">
	<![endif]-->

	<!--[if lt IE 9]>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/docs.css" type="text/css" media="screen">
		<link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen">
	<![endif]-->

	<!-- js -->
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/superfish.js"></script>
	<script type="text/javascript" src="/js/camera.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.totop.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?= $scripts_for_layout ?>

	<!--[if (gt IE 9)|!(IE)]><!-->
		<script type="text/javascript" src="/js/jquery.mobile.customized.min.js"></script>
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
		<?php __('Tampa Bay Workforce Alliance') ?>
	</title>
</head>
<body>
	<header class="p0">
		<div class="container">
			<div class="row">
				<div class="span6 offset6 welcome">
				<?php if ($this->Session->read('Auth.User')): ?>
					<?php
						$firstname = $this->Session->read('Auth.User.firstname');
						$lastname = $this->Session->read('Auth.User.lastname');
						printf(__('<strong>Logged in as: %s %s</strong>', true), $firstname, $lastname);
					?>
					<span class="login-or-register">
						<?= $this->Html->link(__('Dashboard', true), array(
							'controller' => 'users',
							'action' => 'dashboard',
							'admin' => false,
						)) ?>
						or
						<?= $this->Html->link(__('Edit Profile', true), array(
							'controller' => 'users',
							'action' => 'edit',
							'kiosk' => false,
							$this->Session->read('Auth.User.id')
						)) ?>
						or
						<?= $this->Html->link(__('Logout', true), array(
							'controller' => 'users',
							'action' => 'logout',
							'kiosk' => false,
							'web'
						)) ?>
					</span>
				<?php else: ?>
					<strong>Welcome, Guest</strong>
					<span class="login-or-register">
					<?= $this->Html->link(__('Login', true), array(
						'controller' => 'users',
						'action' => 'login',
						'kiosk' => false
					)) ?>
					or
					<?= $this->Html->link(__('Register', true), array(
						'controller' => 'users',
						'action' => 'registration',
						'kiosk' => false
					)) ?>
					</span>
				<?php endif ?>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<div class="header-block clearfix">
						<div class="clearfix header-block-pad">
							<h1 class="brand">
								<a href="/"><img src="/img/logo.png" alt=""></a>
							</h1>
							<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
								<input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
								<a href="#" onClick="document.getElementById('search-form').submit()"></a>
							</form>
							<span class="contacts">Call Us Toll Free:  <span>+1 234 567 89 90</span><br>E-mail: <a href="#">company@demolink.org</a></span>
						</div>
						<div class="navbar navbar_ clearfix">
							<div class="navbar-inner navbar-inner_">
								<div class="container">
									<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
									<div class="nav-collapse nav-collapse_ collapse">
										<?= $this->Nav->links('Top', true, 'nav sf-menu') ?>
									</div>
									<ul class="social-icons">
										<li><a href="http://facebook.com/TampaBayWorkforceAlliance" class="social-icon facebook" title="Like TBWA on Facebook">Facebook</a></li>
										<li><a href="http://twitter.com/#!/TBWorkAlliance" class="social-icon twitter" title="Follow TBWA on Twitter">Twitter</a></li>
										<li><a href="http://linkedin.com/company/tampa-bay-workforce-alliance" class="social-icon linkedin" class="Visit TBWA on LinkedIn">LinkedIn</a></li>
										<li><a href="http://youtube.com/user/tbwavideos" class="social-icon youtube" title="Watch TBWA videos on YouTube">YouTube</a></li>
									</ul>
								</div>
							</div>
						 </div>
					</div>
				</div>
			 </div>
			 <?php if (!empty($this->params['pass']) && $this->params['pass'][0] == 'home'): ?>
				 <div class="row">
				   <div class="span12">
					  <div class="slider">
						  <div class="camera_wrap">
							  <div data-src="img/slide1.jpg">
								  <div class="camera_caption fadeIn">
									  <div>
										  <h5>our capabilities:</h5>
										  <h2>global</h2>
										  <h1>solutions</h1>
										  <a href="#" class="btn btn_ btn-large_"><span>start now</span></a>
									  </div>
								  </div>
							  </div>
							  <div data-src="img/slide2.jpg">
								  <div class="camera_caption fadeIn">
									  <div>
										  <h5>our capabilities:</h5>
										  <h2>online 24/7</h2>
										  <h1>support</h1>
										  <a href="#" class="btn btn_ btn-large_"><span>start now</span></a>
									  </div>
								  </div>
							  </div>
							  <div data-src="img/slide3.jpg">
								  <div class="camera_caption fadeIn">
									  <div>
										  <h5>our capabilities:</h5>
										  <h2>premium</h2>
										  <h1>services</h1>
										  <a href="#" class="btn btn_ btn-large_"><span>start now</span></a>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
			   </div>
			<?php endif; ?>
		</div>
	</header>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<?php if ($title_for_layout !== 'Home'): ?>
						<h3><?= $title_for_layout ?></h3>
					<?php endif ?>
					<?= $content_for_layout ?>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="span4 float2">
					<form id="newsletter" method="post">
						<label>Newsletter</label>
						<div class="clearfix">
							<input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
							<a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
						</div>
					</form>
				</div>
				<div class="span8 float">
					<ul class="footer-menu">
						<li><a href="index.html" class="current">Home Page</a>|</li>
						<li><a href="index-1.html">Company</a>|</li>
						<li><a href="index-2.html">Services</a>|</li>
						<li><a href="index-3.html">Solutions</a>|</li>
						<li><a href="index-4.html">Projects</a>|</li>
						<li><a href="index-5.html">Contacts</a></li>
					</ul>
					Expert   ©  2012  |   <a href="index-6.html">Privacy Policy</a>
				</div>
			</div>
		</div>
	</footer>

	<script>
		$(function () {
			$('.camera_wrap').camera();
			$('ul.nav li:first').addClass('li-first');
			$('.message').fadeOut(10000);

			if($('.actions ul').text() == '') {
				$('div.actions').hide();
			}
		});
	</script>
</body>
</html>
