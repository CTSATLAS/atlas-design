<header class="p0">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="header-block clearfix">
					<div class="clearfix header-block-pad">
						<div class="span6">
							<h1 class="brand">
								<a href="/"><img src="/img/logo.png" alt=""></a>
							</h1>
						</div>
						<div class="span3 hidden-phone hidden-tablet" id="login-or-register">
							<?php if ($this->Session->read('Auth.User')): ?>
								<?php
									$firstname = $this->Session->read('Auth.User.firstname');
									$lastname = $this->Session->read('Auth.User.lastname');
								?>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<?php printf(__('Logged in as: <strong>%s %s</strong>', true), ucwords($firstname), ucwords($lastname)) ?>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<?= $this->Html->link(__('My Dashboard', true), array(
												'controller' => 'users',
												'action' => 'dashboard',
												'admin' => false,
											)) ?>
										</li>
										<li>
											<?= $this->Html->link(__('Edit Profile', true), array(
												'controller' => 'users',
												'action' => 'edit',
												'kiosk' => false,
												$this->Session->read('Auth.User.id')
											)) ?>
										</li>
										<li class="divider"></li>
										<li>
											<?= $this->Html->link(__('Logout', true), array(
												'controller' => 'users',
												'action' => 'logout',
												'kiosk' => false,
												'web'
											)) ?>
										</li>
									</ul>
								</div>
							<?php else: ?>
								<div class="btn-group">
								<?= $this->Html->link(__('Login', true),
									array(
										'controller' => 'users',
										'action' => 'login',
										'kiosk' => false
									),
									array(
										'class' => 'btn'
									)) ?>
									<?= $this->Html->link(__('Register', true),
									array(
										'controller' => 'users',
										'action' => 'registration',
										'kiosk' => false
									),
									array(
										'class' => 'btn'
									)) ?>
								</div>
							<?php endif ?>
						</div>
						<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
							<input type="text" placeholder="Search" name="s">
							<a href="#" onClick="document.getElementById('search-form').submit()"></a>
						</form>
						<div class="span4" style="margin-left: 170px;">
							<?php $events = $this->requestAction('/events/upcoming') ?>
							<h6 style='color: #fff; margin-bottom: 0;'>Upcoming Events</h6>
							<div id="events-slider" class="hide" style="text-align: right;">
							<?php foreach ($events as $event): ?>
								<div class="event">
									<a href="/events/">
										<p><?= $event['Event']['name'] ?></p>
										<p style="color: #999;"><?= $event['Event']['description'] ?></p>
										<ul style="color: #fff; list-style: none; margin-left: 0;">
											<li style="display: inline-block;">
												<i class="icon-calendar"></i>
												<?= date('l, F dS Y', strtotime($event['Event']['scheduled'])) ?>
											</li>
											<li style="display: inline-block;">
												<?php $startTime = strtotime($event['Event']['scheduled']) ?>
												<?php $mins = ($event['Event']['duration'] / .25) * 15 ?>
												<?php $endTime = strtotime("$mins minutes", $startTime) ?>
												<i class="icon-time icon-large"></i>
												<?= date('h:iA', $startTime) ?> &ndash;
												<?= date('h:iA', $endTime) ?>
											</li>
										</ul>
									</a>
								</div>
							<?php endforeach ?>
							</div>
						</div>
					</div>
					<?= $this->element('layouts/nav') ?>
				</div>
			</div>
		</div>
		<?php if (!empty($this->params['pass']) && $this->params['pass'][0] == 'home'): ?>
			<?= $this->element('layouts/middle_nav') ?>
		<?php endif; ?>
	</div>
</header>
