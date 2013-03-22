<?php
/**
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2013
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- meta -->
		<meta charset="utf-8">

		<!-- css -->
		<link rel="stylesheet" href="/css/reset.css" type="text/css">
		<link rel="stylesheet" href="/css/ui-redmond/jquery-ui-1.8.10.custom.css" type="text/css">
		<link rel="stylesheet" href="/css/style.css" type="text/css">
		<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
		<!--[if IE 7]>
			<link rel="stylesheet" href="/css/font-awesome-ie7.min.css" type="text/css">
		<![endif]-->

		<!-- js -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js"></script>
		<?= $scripts_for_layout ?>

		<title><?= $title_for_layout; ?> &mdash; Suncoast Workforce Board &ndash; Manatee County &ndash; Sarasota County (Powered by ATLAS)</title>
    </head>
    <body>
	<div id="container">
		<div id="inner-container">
			<div id="top">
				<div id="user-details">
					<?php if ($this->Session->read('Auth.User')): ?>
						<?php $firstname = $this->Session->read('Auth.User.firstname') ?>
						<?php $lastname = $this->Session->read('Auth.User.lastname') ?>
						<? printf(__('<strong>Logged in as: %s %s</strong>', true), $firstname, $lastname) ?>
						(
						<ul>
							<li>
								<?= $this->Html->link(__('Dashboard', true), array(
									'controller' => 'users',
									'action' => 'dashboard',
									'admin' => false
								)) ?>
							</li>
							<li class="divider"> | </li>
							<li>
								<?= $this->Html->link(__('Edit Profile', true), array(
									'controller' => 'users',
									'action' => 'edit',
									'kiosk' => false,
									$this->Session->read('Auth.User.id')
								)) ?>
							</li>
							<li class="divider"> | </li>
							<li>
								<?= $this->Html->link(__('Logout', true), array(
									'controller' => 'users',
									'action' => 'logout',
									'kiosk' => false,
									'web'
								)) ?>
							</li>
						</ul>
						)
					<?php endif ?>
				</div>
			</div>
			<div class="clear"></div>
			<div id="header">
				<img src="/img/logo.jpg" alt="Suncoast Workforce Board" />
				<img src="/img/cewcs.jpg" style="margin: 15px 0 0 25px" />
				<img src="/img/social_networking.jpg" style="margin-left: 50px" usemap="#Map" />
				<map name="Map" id="Map">
					<area shape="rect" coords="5,1,200,61" href="http://www.facebook.com/SuncoastWorkforce" alt="Link to Suncoast Workforce Board Facebook Page">
					<area shape="rect" coords="6,76,205,135" href="http://twitter.com/SuncoastWork" alt="Link to Suncoast Workforce Board Twitter Page">
				</map>
			</div>
			<div class="clear"></div>
			<div id="nav"><?php echo $this->Nav->links('Top') ?></div>
			<div id="content">
				<h1 class="left"><?php echo $title_for_layout; ?></h1>
				<?php echo $this->Session->flash(); ?>
				<?php echo $session->flash('auth'); ?>
				<br class="clear"/>
				<?php echo $content_for_layout; ?>
			</div>
			<div  id="footer">
				<p>
					<?php printf(__('%s is an equal opportunity employer/program. Auxiliary aids and services are available upon request to individuals with disabilities. All voice telephone numbers listed on this website may be reached by persons using TTY/TDD equipment via the Florida Relay Service at 711.', true), Configure::read('Company.name')) ?>
					<?php printf(__('Copyright &copy; %s - %s. All Rights Reserved. Developed &amp; Hosted by Complete Technology Solutions', true), date('Y'), Configure::read('Company.name')) ?>
				</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function () {
			$('.message').fadeOut(10000);
			$('.datepicker').datepicker();

			if ($('.actions ul').text() === '') {
				$('div.datepickeractions').hide();
			}
		});
	</script>
	<?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>
