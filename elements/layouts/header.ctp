<div class="head-block">
	<h1><a href="/"><img src="webroot/img/theme/jobssmart.png" alt=""></a></h1>
	<ul class="list-soc">
		<?php if ($this->Session->read('Auth.User')): ?>
			<li>
				<span style="color: #333; font-weight: bold">
					Logged in as 
					<?= $this->Session->read('Auth.User.firstname') ?>
					<?= $this->Session->read('Auth.User.lastname') ?>
				</span>
				( <a href="/users/logout" style="color: #00c">Logout</a> )
			</li>
		<?php else: ?>
			<li>
				<a href="/users/login" style="color: #00c">Login</a>or <a href="/users/registration" style="color: #00c">Register</a>
			</li>
		<?php endif ?>
	</ul>
	<div class="clear"></div>
</div>
<!-- menu -->
<nav>
	<div id="menu-icon">Menu</div>
	<ul class="nav sf-menu sf-js-enabled">
		<li><a href="/pages/about">About</a></li>

		<?php if ($this->Session->read('Auth.User')): ?>
			<li><a href="/pages/training_modules">Training Modules</a></li>
		<?php else: ?>
			<li><a href="/pages/training_modules2">Training Modules</a></li>
		<?php endif; ?>

		<li><a href="/pages/resources">Resources</a></li>
		<li><a href="/pages/employment_tips">Employment Tips</a></li>
		<li><a href="/users/dashboard">Dashboard</a></li>
	</ul>
</nav><!-- end menu -->
<div class="clear"></div>
