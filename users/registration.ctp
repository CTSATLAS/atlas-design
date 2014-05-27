<?php
/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>
<?php echo $this->Html->script('users/registration', array('inline' => 'false')) ?>
<?php echo $this->Html->script('jquery.autotab-1.1b', array('inline' => false)) ?>
<?php echo $this->Html->scriptStart(array('inline' => false)) ?>
$(document).ready(function() {
	$('#UserSsn1, #UserSsn2, #UserSsn3').autotab_magic().autotab_filter('numeric');
	$('#UserSsn1Confirm, #UserSsn2Confirm, #UserSsn3Confirm').autotab_magic().autotab_filter('numeric');
});
<?php echo $this->Html->scriptEnd() ?>

	<p><?php __('We currently do not have a record for you.') ?></p>
	<p><?php __('Please register your information using the following form.') ?></p>
	<p>
		<?php __('If you have already created a login, please') ?>
		<?php $options = array('controller' => 'users', 'action' => 'login')?>
		<?php if(isset($this->params['pass'][2]) && $this->params['pass']['2'] === 'program') :?>
			<?php array_push($options, $this->params['pass'][2], $this->params['pass'][3]); ?>
		<?php endif ?>
		<?php echo $this->Html->link(__('click here', true), $options); ?>
		<?php __('to return to the login page and try your login information again.') ?>
	</p>
<?php if(isset($instructions)) : ?>
	<p><?php echo $instructions ?></p>
<?php endif ?>
	<br/>
	<div class="required"><label style="display: inline;"></label> <?php __('indicates required fields.') ?></div>
<br/>
  <div id="WebRegistrationForm">
  	<?= $this->element('/users/registration_form', array('login_method' => Configure::read('Login.method'))) ?>
  </div>