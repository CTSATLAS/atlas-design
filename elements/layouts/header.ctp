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
	<?= $this->Nav->links('Top') ?>
</nav><!-- end menu -->
<div class="clear"></div>
